<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Details · {{ config('app.name', 'ResortFlow') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    @include('partials.demo-banner')
    <main class="mx-auto max-w-2xl px-6 py-12">
        <div class="flex flex-wrap items-center gap-4 text-sm font-semibold">
            <a href="{{ route('stay') }}" class="text-emerald-700 transition hover:text-emerald-900">← Back to rooms</a>
        </div>
        <div class="mt-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            <p class="text-sm font-semibold text-emerald-700">Step 2 of 3</p>
            <h1 class="mt-1 text-3xl font-bold">Guest details</h1>
            <p class="mt-3 text-slate-600">Tell us who will be staying with us.</p>

            @if (session('booking'))
                <div class="mt-6 rounded-lg bg-emerald-50 p-4 text-sm text-emerald-900">
                    <strong>{{ session('booking.room') }}</strong><br>
                    {{ session('booking.check_in') }} to {{ session('booking.check_out') }} · {{ session('booking.guests') }} {{ session('booking.guests') == 1 ? 'guest' : 'guests' }}<br>
                    Maximum room capacity: {{ session('booking.capacity') }} guests
                    @if(session('booking.experiences'))<br>Added experiences: {{ implode(', ', session('booking.experiences')) }}@endif
                </div>
            @endif

            <form action="{{ route('booking.guest-details') }}" method="POST" class="mt-6 space-y-5">
                @csrf
                <div>
                    <label for="guest_name" class="mb-2 block text-sm font-medium">Full name</label>
                    <input id="guest_name" name="guest_name" type="text" required value="{{ old('guest_name', session('booking.guest.guest_name')) }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                    @error('guest_name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="guest_email" class="mb-2 block text-sm font-medium">Email address</label>
                    <input id="guest_email" name="guest_email" type="email" required value="{{ old('guest_email', session('booking.guest.guest_email')) }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                    @error('guest_email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="guest_phone" class="mb-2 block text-sm font-medium">Phone number <span class="font-normal text-slate-500">(optional)</span></label>
                    <input id="guest_phone" name="guest_phone" type="tel" value="{{ old('guest_phone', session('booking.guest.guest_phone')) }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                </div>
                <fieldset class="space-y-4 rounded-xl border border-slate-200 bg-slate-50 p-4">
                    <legend class="px-1 text-sm font-semibold text-slate-900">Billing &amp; postal address</legend>
                    <div>
                        <label for="billing_address" class="mb-2 block text-sm font-medium">Street address</label>
                        <input id="billing_address" name="billing_address" type="text" required value="{{ old('billing_address', session('booking.guest.billing_address')) }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                        @error('billing_address') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label for="billing_city" class="mb-2 block text-sm font-medium">City</label>
                            <input id="billing_city" name="billing_city" type="text" required value="{{ old('billing_city', session('booking.guest.billing_city')) }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                            @error('billing_city') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="billing_state_zip" class="mb-2 block text-sm font-medium">State / ZIP code</label>
                            <input id="billing_state_zip" name="billing_state_zip" type="text" required value="{{ old('billing_state_zip', session('booking.guest.billing_state_zip')) }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                            @error('billing_state_zip') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="billing_country" class="mb-2 block text-sm font-medium">Country</label>
                        <input id="billing_country" name="billing_country" type="text" required value="{{ old('billing_country', session('booking.guest.billing_country')) }}" class="w-full rounded-lg border border-slate-300 bg-white px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                        @error('billing_country') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </fieldset>
                <button type="submit" class="w-full rounded-lg bg-emerald-800 px-6 py-3 font-semibold text-white transition hover:bg-emerald-900">Continue to review →</button>
            </form>
        </div>
    </main>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
