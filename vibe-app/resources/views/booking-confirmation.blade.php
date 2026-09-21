<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation · {{ config('app.name', 'ResortFlow') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    @include('partials.demo-banner')
    @include('partials.booking-brand-bar')
    <main class="mx-auto max-w-2xl px-6 py-12">
        <div class="rounded-2xl border border-emerald-200 bg-white p-8 text-center shadow-sm sm:p-12">
            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-100 text-3xl text-emerald-800">✓</div>
            <p class="mt-6 text-sm font-semibold uppercase tracking-widest text-emerald-700">Step 5 of 5</p>
            <h1 class="mt-2 text-3xl font-bold">Booking confirmed!</h1>
            <p class="mt-3 text-slate-600">Thank you, {{ session('booking.guest.guest_name', 'guest') }}. Your reservation request has been recorded.</p>

            <div class="mt-8 rounded-xl bg-slate-50 p-5 text-left text-sm">
                <div class="flex justify-between border-b border-slate-200 pb-3"><span class="text-slate-500">Reference</span><strong>{{ session('booking.reference', 'RF-DEMO') }}</strong></div>
                <div class="flex justify-between border-b border-slate-200 py-3"><span class="text-slate-500">Room</span><strong>{{ session('booking.room', 'Selected room') }}</strong></div>
                <div class="flex justify-between border-b border-slate-200 py-3"><span class="text-slate-500">Dates</span><strong>{{ session('booking.check_in', '—') }} to {{ session('booking.check_out', '—') }}</strong></div>
                <div class="flex justify-between pt-3"><span class="text-slate-500">Guests</span><strong>{{ session('booking.guests', '—') }}</strong></div>
                @if(session('booking.experiences'))<div class="mt-3 border-t border-slate-200 pt-3"><span class="text-slate-500">Added experiences</span><ul class="mt-1 list-disc pl-5 font-semibold">@foreach(session('booking.experiences') as $experience)<li>{{ $experience }}</li>@endforeach</ul></div>@endif
                <div class="mt-3 flex justify-between border-t border-slate-200 pt-3"><span class="text-slate-500">Room capacity</span><strong>{{ session('booking.capacity', '—') }} guests</strong></div>
            </div>

            <div class="mt-6 rounded-xl border border-amber-200 bg-amber-50 p-4 text-left text-sm text-amber-950">
                <p class="font-semibold">Important reservation notice</p>
                <p class="mt-1 leading-6">Your reservation is held for 24 hours. To keep it active beyond that window, complete payment within 24 hours; once processed, the payment is non-refundable.</p>
                <p class="mt-2 leading-6">If payment is not completed within 24 hours, the reservation may be automatically cancelled and the room released. Need to change or cancel your stay? Contact our concierge as soon as possible, preferably at least 48 hours before check-in.</p>
                <p class="mt-2 text-xs font-medium text-amber-800">Demo environment: no real payment or charge is processed.</p>
            </div>

            <a href="{{ route('stay') }}" class="mt-8 inline-block rounded-lg bg-emerald-800 px-6 py-3 font-semibold text-white transition hover:bg-emerald-900">Make another booking</a>
        </div>
    </main>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
