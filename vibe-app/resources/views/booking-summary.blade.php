<!DOCTYPE html><html lang="en"><head><title>{{ config('app.name', 'ResortFlow') }} · Booking Summary</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fddeb2", "surface-tint": "#456553", "secondary-fixed": "#fddeb2", "on-tertiary-fixed-variant": "#574500", "tertiary-fixed-dim": "#e9c349", "on-error-container": "#93000a", "inverse-on-surface": "#edf2ed", "on-tertiary-container": "#4e3d00", "tertiary-fixed": "#ffe088", "on-secondary": "#ffffff", "tertiary-container": "#cba72f", "error-container": "#ffdad6", "tertiary": "#735c00", "primary-container": "#1b3b2b", "surface-container": "#ebefea", "secondary-fixed-dim": "#e0c298", "inverse-surface": "#2c322e", "background": "#f6fbf5", "on-primary-container": "#83a590", "secondary": "#715b38", "surface-container-low": "#f0f5f0", "surface-variant": "#dfe4df", "on-surface-variant": "#424843", "on-primary-fixed": "#002113", "surface-container-lowest": "#ffffff", "surface-container-highest": "#dfe4df", "on-primary-fixed-variant": "#2d4d3c", "primary-fixed": "#c7ebd4", "primary-fixed-dim": "#abcfb8", "on-primary": "#ffffff", "outline": "#727973", "outline-variant": "#c1c8c2", "on-surface": "#181d1a", "on-tertiary-fixed": "#241a00", "surface-bright": "#f6fbf5", "error": "#ba1a1a", "on-secondary-container": "#78613e", "on-background": "#181d1a", "primary": "#032517", "on-secondary-fixed": "#281900", "surface": "#f6fbf5", "surface-dim": "#d7dbd6", "surface-container-high": "#e5e9e4", "inverse-primary": "#abcfb8", "on-secondary-fixed-variant": "#584323", "on-tertiary": "#ffffff", "on-error": "#ffffff" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-2xs": "0.25rem", "space-2xl": "3rem", "space-md": "1rem", "space-xs": "0.5rem", "gutter-mobile": "1rem", "gutter-desktop": "2rem", "space-4xl": "6rem", "space-xl": "2rem", "container-max": "1440px", "gutter-tablet": "1.5rem", "space-lg": "1.5rem", "space-sm": "0.75rem", "space-3xl": "4rem" }, "fontFamily": { "label-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "title-lg": [ "Plus Jakarta Sans" ], "title-md": [ "Plus Jakarta Sans" ], "headline-lg": [ "Playfair Display" ], "currency-lg": [ "Plus Jakarta Sans" ], "headline-lg-mobile": [ "Playfair Display" ], "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "headline-md": [ "Playfair Display" ], "display-xl": [ "Playfair Display" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Playfair Display" ], "display-xl-mobile": [ "Playfair Display" ] }, "fontSize": { "label-md": [ "13px", { "lineHeight": "18px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" } ], "title-lg": [ "18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "title-md": [ "16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "600" } ], "headline-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "500" } ], "currency-lg": [ "24px", { "lineHeight": "30px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "body-lg": [ "16px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ], "headline-md": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "display-xl": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" } ], "body-sm": [ "12px", { "lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "400" } ], "headline-sm": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ], "display-xl-mobile": [ "38px", { "lineHeight": "46px", "letterSpacing": "-0.01em", "fontWeight": "600" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><header class="fixed top-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="bg-primary-container text-on-primary-container px-space-md py-space-xs"><div class="max-w-container-max mx-auto px-gutter-desktop flex flex-wrap items-center justify-between gap-space-xs"><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary-fixed text-[16px]">info</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-container-lowest font-medium">Demo Environment</span><span class="hidden md:inline font-body-sm text-body-sm text-on-primary-container/90">— No real payments or guest reservations are processed. Portfolio Showcase.</span></div><div class="flex items-center gap-space-sm"><div class="inline-flex items-center bg-primary/40 rounded-full p-0.5"><span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Guest Portal</span><a class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full text-on-primary-container hover:text-surface-container-lowest transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact">Staff Suite</a></div></div></div></div><div class="h-20 bg-surface/90 backdrop-blur-xl"><div class="h-20 max-w-container-max mx-auto px-gutter-desktop flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-sm"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary font-title-md font-semibold after:scale-x-100"><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="home" href="{{ route('home') }}">Home</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="stay" href="{{ route('stay') }}">Stay</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="amenities" href="{{ route('home') }}#amenities">Amenities</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="experiences" href="{{ route('home') }}#experiences">Experiences</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="gallery" href="{{ route('home') }}#gallery">Gallery</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="about" href="{{ route('home') }}#about">About</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="contact" href="{{ route('home') }}#contact">Contact</a></nav><div class="flex items-center gap-space-md"><a class="hidden xl:flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Staff Admin</a><div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile" class="w-8 h-8 rounded-full object-cover shadow-[0_1px_4px_rgba(0,0,0,0.08)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjSHtXOB-ilyK-dHVZP07RT4sENR5yAt84ZsmAhhxPbojWzuE15zMXsUJ9v_LhehisMVtVJBpDlyHfiBLooaeuTdTnHSLRkDtaP6jOxlMYZnPtd7k9SUYpYv9JLzcfHn0kvubnoBdNYSmzaXEsZWsWOn2swSdtCNpvT0sPlvyWbOClhiJWgLu745-Jbht8kBj_5BPBm11VfgoJxd1NMWmfBRQB3xsUhc_Esosj2LDp8-2gIQWBK9v8_A"><a class="hidden sm:inline font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">My Bookings</a></div><a class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors shadow-[0_2px_8px_rgba(27,59,43,0.15)]" data-path="book-stay" href="{{ route('availability') }}">Book Your Stay</a></div></div></div></header><main class="w-full pt-20 bg-surface"><div class="flex flex-col w-full">
<!-- Booking Progression Ribbon -->
<section class="booking-progress-indicator w-full bg-surface-container-low px-gutter-desktop py-space-md shadow-sm">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm text-on-surface-variant">
<span class="material-symbols-outlined text-surface-tint text-[22px]" style="font-variation-settings: 'FILL' 1;">spa</span>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary Journey</span>
<span class="text-outline-variant">/</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Carmel-by-the-Sea Haven</span>
</div>
<!-- Progression Steps -->
<nav aria-label="Reservation Progress" class="w-full md:w-auto overflow-x-auto pb-1 md:pb-0">
<ol class="flex items-center gap-space-xs min-w-max">
<!-- Step 1 -->
<li class="flex items-center gap-space-xs">
<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-container text-surface-container-lowest font-label-sm text-label-sm font-bold shadow-sm">✓</span>
<span class="font-label-sm text-label-sm text-on-surface font-semibold">1. Room</span>
<div class="w-6 h-0.5 bg-primary-container rounded-full mx-1"></div>
</li>
<!-- Step 2 -->
<li class="flex items-center gap-space-xs">
<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-container text-surface-container-lowest font-label-sm text-label-sm font-bold shadow-sm">✓</span>
<span class="font-label-sm text-label-sm text-on-surface font-semibold">2. Guests</span>
<div class="w-6 h-0.5 bg-primary-container rounded-full mx-1"></div>
</li>
<!-- Step 3 -->
<li class="flex items-center gap-space-xs">
<span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-container text-surface-container-lowest font-label-sm text-label-sm font-bold shadow-sm">✓</span>
<span class="font-label-sm text-label-sm text-on-surface font-semibold">3. Add-ons</span>
<div class="w-6 h-0.5 bg-secondary rounded-full mx-1"></div>
</li>
<!-- Step 4 (Active) -->
<li class="flex items-center gap-space-xs bg-secondary-container text-on-secondary-container px-space-sm py-1 rounded-full shadow-sm">
<span class="flex items-center justify-center w-5 h-5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">4</span>
<span class="font-label-sm text-label-sm font-bold uppercase tracking-wide">Review &amp; Confirm</span>
</li>
<!-- Step 5 -->
<li class="flex items-center gap-space-xs pl-space-xs text-outline">
<div class="w-6 h-0.5 bg-surface-variant rounded-full mx-1"></div>
<span class="flex items-center justify-center w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant font-label-sm text-label-sm font-medium">5</span>
<span class="font-label-sm text-label-sm text-on-surface-variant/80">Confirmed</span>
</li>
</ol>
</nav>
</div>
</section>
<!-- Editorial Title & Showcase Notice -->
<section class="w-full px-gutter-desktop pt-space-xl pb-space-lg">
<div class="max-w-container-max mx-auto space-y-space-md">
<!-- Demo Alert Banner -->
<div class="relative overflow-hidden rounded-xl bg-primary-container text-surface-container-lowest p-space-md shadow-md">
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-sm relative z-10">
<div class="flex items-center gap-space-sm">
<div class="flex items-center justify-center w-9 h-9 rounded-full bg-secondary-container text-on-secondary-container shadow-sm shrink-0">
<span class="material-symbols-outlined text-[20px]">science</span>
</div>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">Portfolio Interactive Demonstration</span>
<span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
<span class="font-label-sm text-label-sm text-on-primary-container">Simulated Sandbox</span>
</div>
<p class="font-body-sm text-body-sm text-on-primary-container/95 mt-0.5">
                No real charges or credit card transactions will occur. Your booking simulates our five-star real-time operational confirmation dispatch.
              </p>
</div>
</div>
<div class="shrink-0 pl-11 sm:pl-0">
<span class="inline-flex items-center gap-1 rounded-full bg-surface-container-lowest/15 px-space-sm py-1 font-label-sm text-label-sm text-surface-container-lowest">
<span class="material-symbols-outlined text-[16px] text-secondary-fixed">lock_open</span> Sandbox Token: RF-DEMO-993
            </span>
</div>
</div>
<!-- Decorative Ambient Radial Glow -->
<div class="absolute -right-16 -top-16 w-56 h-56 rounded-full bg-surface-tint/20 blur-2xl pointer-events-none"></div>
</div>
<!-- Section Title Area -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm pt-space-xs">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Step 4 of 5 • Final Itinerary Verification</span>
<h1 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-1">Review &amp; Confirm Your Reservation</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-1">
            Please verify all architectural stay parameters and custom wellness additions before securing your sanctuary suite.
          </p>
</div>
<div class="hidden lg:flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm bg-surface-container-low px-space-md py-space-xs rounded-full">
<span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
<span>Reservation hold active for <span class="font-bold text-primary" id="countdown-timer">14:48</span> minutes</span>
</div>
</div>
</div>
</section>
<!-- Main Content Layout (Two Columns) -->
<section class="w-full px-gutter-desktop pb-space-4xl">
<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
<!-- LEFT COLUMN: Review Cards -->
<div class="lg:col-span-7 xl:col-span-8 flex flex-col gap-space-lg">
<!-- 1. Accommodation Card -->
<div class="rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow overflow-hidden">
<div class="grid grid-cols-1 md:grid-cols-12">
<!-- Room Image Aspect Preview -->
<div class="md:col-span-5 relative h-56 md:h-auto min-h-[240px]">
<img class="w-full h-full object-cover" data-alt="Luxurious ocean view resort villa suite in Carmel-by-the-Sea with floor-to-ceiling glass sliding doors opening to a private wooden sun deck overlooking misty coastal pine cliffs, warm afternoon golden sunlight illuminating natural linen bedding, polished cypress timber ceilings, and minimalist earthen ceramic lamps in serene sage and cream tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWdjtrnVfK3JwT30Sxh8zGtDvW7XqOp_oaeTsu9yoRaE7RVvj-8ZGObi8o2hlVSm281Ye6X0vfCrON_IXScO1PLoDuLwC0UAFz3UrNcPwYD859p268MWkkzLKfrLiUYMJDOEjSPcwrDsR-nyfwrseYGgybm_Cc0BeS4FVgb1FbEAW0imlnBsElXQ7XX-UWFpnmnRp1wOlnUnkq5kQ8fjWks7OXpvZEzYf_6Mwcd06VsvmILLmfgP48xw">
<span class="absolute top-space-sm left-space-sm bg-primary/80 backdrop-blur-md text-surface-container-lowest font-label-sm text-label-sm px-space-sm py-1 rounded-full uppercase tracking-wider font-semibold">
                Villa Suite 104
              </span>
</div>
<!-- Suite Content -->
<div class="md:col-span-7 p-space-lg flex flex-col justify-between">
<div>
<div class="flex items-start justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Signature Oceanfront Collection</span>
<h2 class="font-headline-md text-headline-md text-primary mt-1">{{ session('booking.room', 'Selected room') }}</h2>
</div>
<button id="edit-stay-btn" type="button" class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors bg-surface-container-low hover:bg-surface-container px-space-sm py-1 rounded-full">
<span class="material-symbols-outlined text-[16px]">edit</span> Edit Room
</button>
</div>
<!-- Stay Details Grid -->
<div class="grid grid-cols-2 gap-space-sm my-space-md p-space-sm bg-surface-container-low rounded-lg">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block uppercase tracking-wider">Stay Duration</span>
<span id="summary-stay-duration" class="font-title-md text-title-md text-on-surface font-semibold">{{ session('booking.check_in', '—') }} → {{ session('booking.check_out', '—') }}</span>
<span id="summary-night-count" class="font-body-sm text-body-sm text-secondary block font-medium">Stay dates selected</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block uppercase tracking-wider">Registered Occupants</span>
<span id="summary-occupants" class="font-title-md text-title-md text-on-surface font-semibold">{{ session('booking.adults', session('booking.guests', 1)) }} Adults{{ session('booking.children', 0) ? ', '.session('booking.children').' Children' : '' }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block">Family King + Daybed</span>
</div>
</div>
<!-- Privileges -->
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold block mb-space-xs">ResortFlow Sanctuary Privileges Included</span>
<div class="flex flex-wrap gap-space-xs">
<span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">
<span class="material-symbols-outlined text-[15px] text-surface-tint">self_improvement</span> Daily Ocean Yoga
                    </span>
<span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">
<span class="material-symbols-outlined text-[15px] text-surface-tint">nutrition</span> Welcome Fruit Platter
                    </span>
<span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">
<span class="material-symbols-outlined text-[15px] text-surface-tint">wifi</span> 1Gbps Wi-Fi
                    </span>
<span class="inline-flex items-center gap-1 font-body-sm text-body-sm text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">
<span class="material-symbols-outlined text-[15px] text-surface-tint">hot_tub</span> Thermal Pool Access
                    </span>
</div>
</div>
</div>
<div class="pt-space-md mt-space-sm flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-surface-tint"></span> Guaranteed oceanfront horizon</span>
<span class="font-label-md text-label-md text-primary font-bold">${{ number_format(config('rooms.'.session('booking.room', 'Ocean View Villa').'.price', 780)) }} / night</span>
</div>
</div>
</div>
</div>
<!-- Edit Stay Modal -->
<div id="edit-stay-modal" class="fixed inset-0 z-[70] hidden items-center justify-center bg-inverse-surface/60 p-space-md backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="edit-stay-title">
<div class="w-full max-w-lg rounded-2xl bg-surface-container-lowest p-space-xl shadow-xl">
<div class="flex items-start justify-between gap-space-md">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Update your stay</span>
<h2 id="edit-stay-title" class="font-headline-md text-headline-md text-primary mt-1">Edit room details</h2>
</div>
<button id="close-edit-stay" type="button" class="rounded-full p-1 text-on-surface-variant hover:bg-surface-container" aria-label="Close edit room dialog"><span class="material-symbols-outlined">close</span></button>
</div>
<p class="mt-3 text-sm text-on-surface-variant">Update the registered occupants and stay duration for {{ session('booking.room', 'your selected room') }}.</p>
<form action="{{ route('booking.update-stay') }}" method="POST" class="mt-space-lg space-y-space-md">
@csrf
<div class="grid gap-space-md sm:grid-cols-2">
<div><label for="edit-check-in" class="mb-2 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-in</label><input id="edit-check-in" name="check_in" type="date" required value="{{ session('booking.check_in') }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-low px-3 py-3"></div>
<div><label for="edit-check-out" class="mb-2 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-out</label><input id="edit-check-out" name="check_out" type="date" required value="{{ session('booking.check_out') }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-low px-3 py-3"></div>
</div>
<div class="grid gap-space-md sm:grid-cols-2">
<div><label for="edit-adults" class="mb-2 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Adults</label><input id="edit-adults" name="adults" type="number" min="1" max="20" required value="{{ session('booking.adults', session('booking.guests', 1)) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-low px-3 py-3"></div>
<div><label for="edit-children" class="mb-2 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Children</label><input id="edit-children" name="children" type="number" min="0" max="20" required value="{{ session('booking.children', 0) }}" class="w-full rounded-lg border border-outline-variant bg-surface-container-low px-3 py-3"></div>
</div>
@if ($errors->any())<p class="rounded-lg bg-red-50 px-3 py-2 text-sm font-medium text-red-700">{{ $errors->first() }}</p>@endif
<div class="flex flex-col-reverse gap-space-xs sm:flex-row sm:justify-end">
<button id="cancel-edit-stay" type="button" class="rounded-full bg-surface-container px-space-md py-space-xs font-label-md text-label-md text-on-surface hover:bg-surface-container-high">Cancel</button>
<button type="submit" class="rounded-full bg-primary-container px-space-lg py-space-xs font-label-md text-label-md text-surface-container-lowest hover:bg-primary">Save room details</button>
</div>
</form>
</div>
</div>
<!-- 2. Primary Guest Information Card -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-start justify-between gap-space-sm pb-space-sm">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">person</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Party Registration</span>
<h3 class="font-title-lg text-title-lg text-primary font-semibold">Primary Guest Information</h3>
</div>
</div>
<a href="{{ route('guest-details') }}" class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors bg-surface-container-low hover:bg-surface-container px-space-sm py-1 rounded-full">
<span class="material-symbols-outlined text-[16px]">edit</span> Edit Guest Details
            </a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-sm">
<div class="space-y-space-xs">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant block">Full Legal Name</span>
<span class="font-title-md text-title-md text-on-surface font-semibold">{{ session('booking.guest.guest_name', 'Guest') }}</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant block">Contact Channels</span>
<span class="font-body-md text-body-md text-on-surface font-medium block">{{ session('booking.guest.guest_email', 'No email provided') }}</span>
<span class="font-body-md text-body-md text-on-surface-variant block">{{ session('booking.guest.guest_phone', 'No phone provided') }}</span>
</div>
</div>
<div class="space-y-space-xs">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant block">Billing &amp; Postal Address</span>
<p class="font-body-md text-body-md text-on-surface">
                  {{ session('booking.guest.billing_address', 'Billing address not provided') }}<br>
                  {{ session('booking.guest.billing_city', '—') }}, {{ session('booking.guest.billing_state_zip', '—') }}, {{ session('booking.guest.billing_country', '—') }}
                </p>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant block">Estimated Arrival Window</span>
<span class="font-title-md text-title-md text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-[18px]">schedule</span> 3:00 PM – 5:00 PM PST
                </span>
</div>
</div>
</div>
<!-- Occasion & Concierge Notes Highlight -->
<div class="mt-space-md p-space-sm rounded-lg bg-secondary-container/30 flex items-start gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">celebration</span>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-secondary-container font-bold">Special Occasion Request</span>
<p class="font-body-sm text-body-sm text-on-surface mt-0.5">
<span class="font-semibold text-primary">Honeymoon &amp; Romance celebration.</span> Special floral arrangement requested in master bedroom prior to arrival. Housekeeping and pastry team alerted.
              </p>
</div>
</div>
</div>
<!-- 3. Selected Add-ons & Curated Experiences -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-shadow">
<div class="flex items-start justify-between gap-space-sm pb-space-sm">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">room_service</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Personalized Itinerary</span>
<h3 class="font-title-lg text-title-lg text-primary font-semibold">Selected Add-ons &amp; Curated Experiences</h3>
</div>
</div>
<a href="{{ route('addons', ['return' => 'summary']) }}" class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors bg-surface-container-low hover:bg-surface-container px-space-sm py-1 rounded-full">
<span class="material-symbols-outlined text-[16px]">tune</span> Edit Add-ons
            </a>
</div>
<!-- Item list with subtle zebra backgrounds -->
<div class="space-y-space-xs mt-space-sm" id="summary-addons-list">
<!-- Addon 1 -->
<div data-addon="breakfast" class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-surface-tint">
<span class="material-symbols-outlined text-[22px]">restaurant</span>
</div>
<div>
<span class="font-title-md text-title-md text-on-surface font-semibold block">Artisanal Organic Breakfast Atelier</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">4 mornings • 2 adults • Farm-to-table seasonal harvest</span>
</div>
</div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$360.00</span>
</div>
<!-- Addon 2 -->
<div data-addon="earlycheckin" class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[22px]">alarm_on</span>
</div>
<div>
<span class="font-title-md text-title-md text-on-surface font-semibold block">Guaranteed Early Check-in</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Priority suite readiness at 12:00 PM noon on Oct 16</span>
</div>
</div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$95.00</span>
</div>
<!-- Addon 3 -->
<div data-addon="massage" class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined text-[22px]">spa</span>
</div>
<div>
<span class="font-title-md text-title-md text-on-surface font-semibold block">Deep Ocean Stone Thermal Massage</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">90 minutes • 1 guest • Private stone pavilion ritual</span>
</div>
</div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$220.00</span>
</div>
<!-- Addon 4 -->
<div data-addon="catamaran" class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-lowest">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[22px]">sailing</span>
</div>
<div>
<span class="font-title-md text-title-md text-on-surface font-semibold block">Sunset Private Catamaran Cruise</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">2.5 hours Monterey Bay marine sanctuary charter with sparkling wine</span>
</div>
</div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$340.00</span>
</div>
</div>
</div>
<!-- 4. Cancellation & Guarantee Policies -->
<div class="rounded-xl bg-surface-container-low p-space-lg shadow-sm">
<div class="flex items-center gap-space-sm pb-space-xs">
<span class="material-symbols-outlined text-surface-tint text-[24px]">verified_user</span>
<h3 class="font-title-lg text-title-lg text-primary font-semibold">Cancellation Flexibility &amp; Resort Guarantee</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs text-on-surface">
<div class="space-y-space-2xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-tint font-bold">Complimentary Cancellation Window</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                100% full refund available up to 48 hours prior to check-in (<span class="font-semibold text-on-surface">Oct 14, 2025, 3:00 PM PST</span>). Zero cancellation penalty fees.
              </p>
</div>
<div class="space-y-space-2xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Check-in Verification Protocol</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Standard check-in is 3:00 PM (12:00 PM requested). A valid government ID matching {{ session('booking.guest.guest_name', 'the primary guest') }} is presented upon arrival at the Port Cochère.
              </p>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: Sticky Price Breakdown & Action Rail -->
<div class="lg:col-span-5 xl:col-span-4 sticky top-28 space-y-space-lg">
<!-- Master Itemized Summary Card -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-md">
<div class="flex items-center justify-between pb-space-sm">
<h3 class="font-headline-sm text-headline-sm text-primary font-medium">Reservation Summary</h3>
<span class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed font-bold px-space-xs py-0.5 rounded-full uppercase tracking-wider">Confirmed Rates</span>
</div>
<!-- Price Breakdown Rows -->
<div class="space-y-space-sm pt-space-xs text-on-surface">
<div class="flex items-center justify-between">
<div>
<span class="font-body-md text-body-md text-on-surface block font-medium">Ocean View Villa</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">4 nights × $780.00</span>
</div>
<span class="font-title-md text-title-md text-on-surface font-semibold">$3,120.00</span>
</div>
<div class="flex items-center justify-between">
<div>
<span class="font-body-md text-body-md text-on-surface block font-medium">Curated Add-ons &amp; Experiences</span>
<span class="font-body-sm text-body-sm text-on-surface-variant" id="summary-addons-count">4 selections confirmed</span>
</div>
<span class="font-title-md text-title-md text-on-surface font-semibold" id="summary-addons-total">$1,015.00</span>
</div>
<div class="flex items-center justify-between">
<div>
<span class="font-body-md text-body-md text-on-surface block font-medium">Resort Facility &amp; Wellness Fee</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Spa, valet, estate trail access</span>
</div>
<span class="font-title-md text-title-md text-on-surface font-semibold">$160.00</span>
</div>
<div class="flex items-center justify-between">
<div>
<span class="font-body-md text-body-md text-on-surface block font-medium">State &amp; Local Hospitality Tax</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">10.0% Monterey County lodging</span>
</div>
<span class="font-title-md text-title-md text-on-surface font-semibold">$429.50</span>
</div>
<!-- Total Bar -->
<div class="pt-space-md mt-space-xs bg-surface-container-low p-space-sm rounded-lg">
<div class="flex items-baseline justify-between">
<span class="font-title-lg text-title-lg text-primary font-bold">Total Stay Value</span>
<div class="text-right">
<span class="font-display-xl text-currency-lg md:text-headline-md text-primary font-bold tracking-tight" id="summary-grand-total">$4,724.50</span>
<span class="block font-body-sm text-body-sm text-on-surface-variant">USD including all taxes</span>
</div>
</div>
<div class="flex items-center justify-between pt-space-xs mt-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="font-medium text-surface-tint">Simulated Deposit Due Today:</span>
<span class="font-bold text-surface-tint">$0.00 (Due at Check-in)</span>
</div>
</div>
</div>
<!-- Agreement Checkbox -->
<div class="pt-space-md">
<label class="flex items-start gap-space-xs cursor-pointer group">
<input checked="" class="mt-1 w-4 h-4 rounded text-primary focus:ring-surface-tint focus:ring-offset-0 bg-surface-container-lowest" id="terms-checkbox" type="checkbox">
<span class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface transition-colors leading-snug">
                I agree to the <a class="text-primary font-semibold underline underline-offset-2 hover:text-secondary" href="#">ResortFlow Guest Agreement</a>, Sanctuary Quiet Hours policy, and the 48-hour cancellation terms.
              </span>
</label>
</div>
<!-- Final Confirmation CTA -->
<div class="pt-space-md">
<button class="w-full inline-flex items-center justify-center gap-space-xs bg-primary-container hover:bg-primary text-surface-container-lowest font-label-md text-title-md px-space-lg py-space-sm rounded-xl transition-all duration-200 shadow-md hover:shadow-lg transform active:scale-[0.99]" id="confirm-booking-btn" type="button">
<span class="material-symbols-outlined text-[20px]">lock</span>
<span>Confirm Reservation (Demo)</span>
</button>
<p class="text-center font-label-sm text-label-sm text-on-surface-variant mt-2">
              Instant instant-dispatch voucher generated upon click.
            </p>
</div>
<!-- Reassurance Badges -->
<div class="pt-space-md mt-space-sm space-y-space-xs bg-surface-container-low p-space-sm rounded-lg">
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-surface-tint text-[18px]">verified</span>
<span>256-Bit Bank-Grade SSL Encryption Verified</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">workspace_premium</span>
<span>Direct Booking Best Price Guarantee</span>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[18px]">support_agent</span>
<span>24/7 Dedicated Concierge Direct: <span class="font-semibold text-primary">+1 (831) 555-0198</span></span>
</div>
</div>
</div>
<!-- Secondary Visual Accent: Architect's Sanctuary Note -->
<div class="rounded-xl bg-surface-container p-space-md flex items-center gap-space-sm shadow-sm">
<img class="w-16 h-16 rounded-lg object-cover shrink-0" data-alt="Monochrome close-up architectural study of polished natural cedar wood beam joinery and native Carmel fieldstone textures under soft diffused coastal fog lighting, luxury resort craftsmanship detail." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAxnpF2UCTwFhhV1yKGJjpcvDLf88ckFbwVv1IA1lPDZwrsCo3EPPMhzim8GmfNkaL5yPQulfoSu-K4mFugzZ5UGS2O9kYEagVGhwLNpu6Saf4HCBBU04c6WgILAZCNO3wFM9IhY4UB74nUkQhnwN1ibSvsEUYCP7m80OvBgRJ_vToGV34eqjjRY6kEZMxmraNyc3P77PfV3duGWyBycs5EbGgumiC5wepWNGd3-cNJM9N88-hKUiUSw">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Hospitality Philosophy</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
              "We curate silence as the true luxury. Your villa includes our non-intrusive personal steward service."
            </p>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Simulation Modal Backdrop (Hidden by Default) -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-space-md bg-inverse-surface/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300" id="simulation-modal">
<div class="relative w-full max-w-lg rounded-2xl bg-surface-container-lowest p-space-xl shadow-xl text-center space-y-space-md transform scale-95 transition-transform duration-300" id="modal-card">
<div class="w-16 h-16 mx-auto rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed shadow-sm">
<span class="material-symbols-outlined text-[36px]">check_circle</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Ready to confirm</span>
<h3 class="font-headline-md text-headline-md text-primary mt-1">Review your reservation</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
          Please check your reservation details before confirming. No booking is recorded until you click the final confirmation button.
        </p>
</div>
<div class="p-space-md rounded-lg bg-surface-container-low text-left space-y-2 font-body-sm text-body-sm">
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Room:</span> <span class="font-semibold text-right text-on-surface">{{ session('booking.room', 'Selected room') }}</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Dates:</span> <span class="font-semibold text-right text-on-surface">{{ session('booking.check_in', '—') }} to {{ session('booking.check_out', '—') }}</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Stay duration:</span> <span id="modal-night-count" class="font-semibold text-on-surface">— nights</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Guests:</span> <span class="font-semibold text-right text-on-surface">{{ session('booking.guests', '—') }}</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Room subtotal:</span> <span id="modal-room-total" class="font-semibold text-on-surface">$0.00</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Add-ons:</span> <span id="modal-addon-total" class="font-semibold text-on-surface">$0.00</span></div>
<div class="flex justify-between gap-4"><span class="text-on-surface-variant">Resort fee:</span> <span id="modal-resort-fee" class="font-semibold text-on-surface">$0.00</span></div>
<div class="flex justify-between gap-4 border-t border-surface-container-highest pt-2"><span class="font-semibold text-primary">Estimated total:</span> <span id="modal-grand-total" class="font-bold text-primary">$3,608.00</span></div>
</div>
<label class="flex items-start gap-2 text-left text-sm text-on-surface-variant">
<input id="modal-review-checkbox" class="mt-1 h-4 w-4 accent-emerald-800" type="checkbox">
<span>I have checked the room, dates, guests, add-ons, and estimated total above.</span>
</label>
<div class="flex flex-col sm:flex-row gap-space-xs justify-center pt-space-xs">
<form action="{{ route('booking.confirm') }}" method="POST">
          @csrf
          <button class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors disabled:cursor-not-allowed disabled:opacity-50" id="confirm-modal-submit" type="submit" disabled>
            Confirm and view itinerary
          </button>
        </form>
<button class="inline-flex items-center justify-center bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md px-space-md py-space-xs rounded-full transition-colors" id="close-modal-btn" type="button">
          Back to Review
        </button>
</div>
</div>
</div>
<!-- Inline Interaction Logic -->
<script>
    (function initBookingReview() {
      const savedAddons = (() => {
        try { return JSON.parse(localStorage.getItem('resortflow.addons.v2') || '{}'); } catch (error) { return {}; }
      })();
      const addonPrices = { breakfast: 360, earlycheckin: 95, massage: 220, catamaran: 340, chauffeur: 140, latecheckout: 110, kayak: 95, chefdinner: 280 };
      const activeAddons = Object.keys(addonPrices).filter((key) => savedAddons[key] === true);
      Object.keys(addonPrices).filter((key) => savedAddons[key] === false).forEach((key) => document.querySelector(`[data-addon="${key}"]`)?.remove());
      const addonTotal = activeAddons.reduce((sum, key) => sum + addonPrices[key], 0);
      const addonNames = { breakfast: 'Daily Artisanal Breakfast', earlycheckin: 'Guaranteed Early Check-in', massage: 'Thermal Stone Massage (90m)', catamaran: 'Sunset Catamaran Cruise', chauffeur: 'Private Chauffeur Airport Transfer', latecheckout: 'Late Check-out Privilege (3:00 PM)', kayak: 'Sea Kelp Kayak & Snorkel', chefdinner: 'Private Cliffside Chef Tasting' };
      const addonList = document.getElementById('summary-addons-list');
      if (addonList) {
        addonList.innerHTML = '';
        activeAddons.forEach((key) => {
          const row = document.createElement('div');
          row.className = 'flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low';
          row.innerHTML = '<span class="font-title-md text-title-md text-on-surface font-semibold">' + addonNames[key] + '</span><span class="font-currency-lg text-currency-lg text-primary font-bold">$' + addonPrices[key].toLocaleString('en-US', { minimumFractionDigits: 2 }) + '</span>';
          addonList.appendChild(row);
        });
      }
      const roomPrice = {{ config('rooms.'.session('booking.room', 'Ocean View Villa').'.price', 780) }};
      const checkInDate = new Date('{{ session('booking.check_in', '') }}T00:00:00');
      const checkOutDate = new Date('{{ session('booking.check_out', '') }}T00:00:00');
      const nights = Number.isFinite(checkInDate.getTime()) && Number.isFinite(checkOutDate.getTime())
        ? Math.max(1, Math.round((checkOutDate - checkInDate) / 86400000))
        : 1;
      const roomTotal = roomPrice * nights;
      const resortFee = 40 * nights;
      const stayTotal = roomTotal + addonTotal + resortFee;
      const grandTotal = stayTotal * 1.10;
      const addonCountEl = document.getElementById('summary-addons-count');
      const addonTotalEl = document.getElementById('summary-addons-total');
      const grandTotalEl = document.getElementById('summary-grand-total');
      if (addonCountEl) addonCountEl.textContent = `${activeAddons.length} selection${activeAddons.length === 1 ? '' : 's'} confirmed`;
      if (addonTotalEl) addonTotalEl.textContent = `$${addonTotal.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
      if (grandTotalEl) grandTotalEl.textContent = `$${grandTotal.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
      const nightCountEl = document.getElementById('summary-night-count');
      if (nightCountEl) nightCountEl.textContent = `${nights} night${nights === 1 ? '' : 's'} · Coastal stay`;
      const modalAddonTotalEl = document.getElementById('modal-addon-total');
      const modalRoomTotalEl = document.getElementById('modal-room-total');
      const modalResortFeeEl = document.getElementById('modal-resort-fee');
      const modalNightCountEl = document.getElementById('modal-night-count');
      const money = (value) => `$${value.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
      if (modalRoomTotalEl) modalRoomTotalEl.textContent = money(roomTotal);
      if (modalResortFeeEl) modalResortFeeEl.textContent = money(resortFee);
      if (modalNightCountEl) modalNightCountEl.textContent = `${nights} night${nights === 1 ? '' : 's'}`;
      const modalGrandTotalEl = document.getElementById('modal-grand-total');
      if (modalAddonTotalEl) modalAddonTotalEl.textContent = `$${addonTotal.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;
      if (modalGrandTotalEl) modalGrandTotalEl.textContent = `$${grandTotal.toLocaleString('en-US', { minimumFractionDigits: 2 })}`;

      // Countdown Timer Emulation
      var timerEl = document.getElementById('countdown-timer');
      var secondsLeft = 14 * 60 + 48;
      
      function updateTimer() {
        if (!timerEl) return;
        var minutes = Math.floor(secondsLeft / 60);
        var seconds = secondsLeft % 60;
        timerEl.textContent = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
        if (secondsLeft > 0) {
          secondsLeft--;
          setTimeout(updateTimer, 1000);
        }
      }
      updateTimer();

      // Simulated Reservation Modal Logic
      var confirmBtn = document.getElementById('confirm-booking-btn');
      var modal = document.getElementById('simulation-modal');
      var modalCard = document.getElementById('modal-card');
      var closeBtn = document.getElementById('close-modal-btn');
      var termsCheckbox = document.getElementById('terms-checkbox');
      var modalReviewCheckbox = document.getElementById('modal-review-checkbox');
      var modalSubmit = document.getElementById('confirm-modal-submit');

      if (modalReviewCheckbox && modalSubmit) {
        modalReviewCheckbox.addEventListener('change', function() {
          modalSubmit.disabled = !modalReviewCheckbox.checked;
        });
      }

      if (confirmBtn && modal && modalCard) {
        confirmBtn.addEventListener('click', function(e) {
          e.preventDefault();
          if (termsCheckbox && !termsCheckbox.checked) {
            alert('Please accept the ResortFlow terms & conditions to proceed.');
            return;
          }
          modal.classList.remove('hidden');
          setTimeout(function() {
            modal.classList.remove('opacity-0');
            modalCard.classList.remove('scale-95');
            modalCard.classList.add('scale-100');
          }, 20);
        });

        function closeModal() {
          modalCard.classList.remove('scale-100');
          modalCard.classList.add('scale-95');
          modal.classList.add('opacity-0');
          setTimeout(function() {
            modal.classList.add('hidden');
          }, 300);
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', function(e) {
          if (e.target === modal) closeModal();
        });
      }

      // Edit room details in place, then persist changes back to the booking session.
      const editStayBtn = document.getElementById('edit-stay-btn');
      const editStayModal = document.getElementById('edit-stay-modal');
      const closeEditStay = document.getElementById('close-edit-stay');
      const cancelEditStay = document.getElementById('cancel-edit-stay');
      function closeEditStayModal() {
        if (editStayModal) editStayModal.classList.add('hidden');
        if (editStayModal) editStayModal.classList.remove('flex');
      }
      if (editStayBtn && editStayModal) editStayBtn.addEventListener('click', () => {
        editStayModal.classList.remove('hidden');
        editStayModal.classList.add('flex');
      });
      if (closeEditStay) closeEditStay.addEventListener('click', closeEditStayModal);
      if (cancelEditStay) cancelEditStay.addEventListener('click', closeEditStayModal);
      if (editStayModal) editStayModal.addEventListener('click', (event) => {
        if (event.target === editStayModal) closeEditStayModal();
      });
    })();
  </script>
</div></main><footer class="w-full bg-surface-container-low text-on-surface mt-space-3xl"><div class="max-w-container-max mx-auto px-gutter-desktop pt-space-3xl pb-space-2xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl"><div class="lg:col-span-2 space-y-space-md pr-space-xl"><div class="flex items-center gap-space-xs"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><p class="font-body-md text-body-md text-on-surface-variant max-w-md">An architectural sanctuary celebrating quiet hospitality, coastal pine landscapes, and curated alpine wellness rituals.</p><div class="pt-space-xs space-y-space-2xs text-on-surface-variant font-body-sm text-body-sm"><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">pin_drop</span> 4400 Whispering Pines Way, Carmel-by-the-Sea, CA 93923</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">call</span> +1 (831) 555-0198 • Concierge Direct</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">mail</span> concierge@resortflow.internal</p></div></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary &amp; Stays</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Coastal Pavilions</a></li><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Forest Canopy Suites</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">The Stone Thermal Baths</a></li><li><a class="hover:text-primary transition-colors" data-path="experiences" href="{{ route('home') }}#experiences">Private Wine Library</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">Artisanal Dining Atelier</a></li></ul></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Guest Privileges</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">Guest Itinerary Portal</a></li><li><a class="hover:text-primary transition-colors" data-path="book-stay" href="{{ route('availability') }}">Tailored Stay Requests</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Chauffeur &amp; Helipad Transfer</a></li><li><a class="hover:text-primary transition-colors" data-path="about" href="{{ route('home') }}#about">Sustainability Charter</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Resort Policies &amp; FAQ</a></li></ul></div><div class="space-y-space-md"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Gazette &amp; Chronicles</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Receive seasonal monographs, private reserve invitations, and architectural updates.</p><div class="flex flex-col gap-space-xs"><div class="flex items-center rounded-lg bg-surface-container-lowest px-space-sm py-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><input class="w-full bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none" placeholder="Enter your correspondence email" type="email"><button class="text-primary hover:text-secondary transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">arrow_forward</span></button></div><span class="font-label-sm text-label-sm text-on-surface-variant/70">Unsubscribe at your pleasure. Discretion guaranteed.</span></div><div class="inline-flex items-center gap-space-xs rounded-full bg-surface-container px-space-sm py-1"><span class="material-symbols-outlined text-secondary text-[16px]">military_tech</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Forbes Five-Star Laureate 2024</span></div></div></div><div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm"><div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-secondary-container"></span><span>© 2025 ResortFlow Hospitality Group. Architectural Quietude.</span></div><div class="flex items-center gap-space-lg font-label-sm text-label-sm"><span>Pacific Standard Time: 09:42 AM</span><span class="hidden md:inline">•</span><span>Elevation: 320m Above Carmel Bay</span></div></div></div></footer><script src="{{ asset('js/app.js') }}"></script></body></html>
