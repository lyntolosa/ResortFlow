<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'selectedRoom' => request()->query('room'),
        ]);
    }

    public function startBooking(Request $request)
    {
        $booking = $request->validate([
            'room' => ['required', 'string', Rule::in(array_keys(config('rooms')))],
            'check_in' => ['required', 'date', 'after_or_equal:today'],
            'check_out' => ['required', 'date', 'after:check_in'],
            'guests' => ['required', 'integer', 'min:1', 'max:10'],
            'experiences' => ['nullable', 'json'],
        ]);

        $room = config('rooms.' . $booking['room']);
        if ($booking['guests'] > $room['capacity']) {
            return back()->withInput()->withErrors([
                'guests' => "{$booking['room']} can accommodate a maximum of {$room['capacity']} guests.",
            ]);
        }

        $booking['capacity'] = $room['capacity'];
        $booking['price'] = $room['price'];
        $booking['experiences'] = !empty($booking['experiences']) ? json_decode($booking['experiences'], true) : [];

        $request->session()->put('booking', $booking);

        return redirect()->route('guest-details');
    }

    public function stay()
    {
        return view('stay');
    }

    public function details(Request $request)
    {
        $room = $request->query('room', 'Ocean View Villa');

        return view('details', compact('room'));
    }

    public function availability(Request $request)
    {
        $search = $request->only(['check_in', 'check_out', 'adults', 'children', 'rooms', 'room']);
        $availableRooms = null;
        $searchError = null;

        if ($request->hasAny(['check_in', 'check_out', 'adults', 'children', 'rooms'])) {
            $validator = Validator::make($search, [
                'check_in' => ['required', 'date', 'after_or_equal:today'],
                'check_out' => ['required', 'date', 'after:check_in'],
                'adults' => ['required', 'integer', 'min:1', 'max:20'],
                'children' => ['required', 'integer', 'min:0', 'max:20'],
                'rooms' => ['required', 'integer', 'min:1', 'max:10'],
            ]);

            if ($validator->fails()) {
                $searchError = $validator->errors()->first();
            } else {
                $totalGuests = (int) $search['adults'] + (int) $search['children'];
                $availableRooms = collect(config('rooms'))
                    ->filter(fn (array $room) => $room['capacity'] >= $totalGuests)
                    ->map(fn (array $room, string $name) => ['name' => $name, ...$room])
                    ->values()
                    ->all();
            }
        }

        return view('availability', [
            'selectedRoom' => request()->query('room', 'Ocean View Villa'),
            'search' => $search,
            'availableRooms' => $availableRooms,
            'searchError' => $searchError,
        ]);
    }

    public function addons()
    {
        return view('addons');
    }

    public function guestDetails()
    {
        return view('guest-details');
    }

    public function saveGuestDetails(Request $request)
    {
        $guest = $request->validate([
            'guest_name' => ['required', 'string', 'max:120'],
            'guest_email' => ['required', 'email', 'max:255'],
            'guest_phone' => ['nullable', 'string', 'max:30'],
            'billing_address' => ['required', 'string', 'max:255'],
            'billing_city' => ['required', 'string', 'max:100'],
            'billing_state_zip' => ['required', 'string', 'max:100'],
            'billing_country' => ['required', 'string', 'max:100'],
        ]);

        $request->session()->put('booking.guest', $guest);
        $request->session()->forget(['booking.reference', 'booking.confirmed_at']);

        return redirect()->route('booking-summary');
    }

    public function updateStay(Request $request)
    {
        $booking = $request->session()->get('booking', []);
        $validated = $request->validate([
            'check_in' => ['required', 'date', 'after_or_equal:today'],
            'check_out' => ['required', 'date', 'after:check_in'],
            'adults' => ['required', 'integer', 'min:1', 'max:20'],
            'children' => ['required', 'integer', 'min:0', 'max:20'],
        ]);

        $room = config('rooms.' . ($booking['room'] ?? ''));
        if (!$room) {
            return redirect()->route('stay')->withErrors(['room' => 'Please select a room first.']);
        }

        $guests = (int) $validated['adults'] + (int) $validated['children'];
        if ($guests > $room['capacity']) {
            return back()->withInput()->withErrors([
                'adults' => "{$booking['room']} can accommodate a maximum of {$room['capacity']} guests.",
            ]);
        }

        $booking = array_merge($booking, $validated, [
            'guests' => $guests,
            'capacity' => $room['capacity'],
            'price' => $room['price'],
        ]);
        $request->session()->put('booking', $booking);
        $request->session()->forget(['booking.reference', 'booking.confirmed_at']);

        return redirect()->route('booking-summary')->with('stay_updated', true);
    }

    public function confirmBooking(Request $request)
    {
        if (!$request->session()->has('booking.guest')) {
            return redirect()->route('guest-details');
        }

        $request->session()->put('booking.reference', 'RF-' . strtoupper(str()->random(8)));
        $request->session()->put('booking.confirmed_at', now()->toIso8601String());

        return redirect()->route('booking-confirmation');
    }

    public function bookingSummary(Request $request)
    {
        if (!$request->session()->has('booking.guest')) {
            return redirect()->route('guest-details');
        }

        return view('booking-summary');
    }

    public function bookingConfirmation(Request $request)
    {
        if (!$request->session()->has('booking.confirmed_at')) {
            return redirect()->route('booking-summary');
        }

        return view('booking-confirmation');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
        ]);

        return 'Generated successfully';
    }
}
