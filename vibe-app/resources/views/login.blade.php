<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in · {{ config('app.name', 'ResortFlow') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    @include('partials.demo-banner')
    <main class="mx-auto flex min-h-[calc(100vh-48px)] max-w-md items-center px-6 py-12">
        <section class="w-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            <a href="{{ route('home') }}" class="text-sm font-semibold text-emerald-700 transition hover:text-emerald-900">← Back to home</a>
            <p class="mt-8 text-sm font-semibold uppercase tracking-widest text-emerald-700">Guest portal</p>
            <h1 class="mt-1 text-3xl font-bold">Log in</h1>
            <p class="mt-3 text-slate-600">Access your ResortFlow bookings and itinerary.</p>
            <form class="mt-6 space-y-4" action="{{ route('home') }}" method="GET">
                <div>
                    <label for="email" class="mb-2 block text-sm font-medium">Email address</label>
                    <input id="email" name="email" type="email" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-medium">Password</label>
                    <input id="password" name="password" type="password" required class="w-full rounded-lg border border-slate-300 px-4 py-3 focus:border-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-100">
                </div>
                <button type="submit" class="w-full rounded-lg bg-emerald-800 px-6 py-3 font-semibold text-white transition hover:bg-emerald-900">Continue</button>
            </form>
            <p class="mt-4 text-center text-xs text-slate-500">Demo environment — authentication is for showcase purposes.</p>
        </section>
    </main>
</body>
</html>
