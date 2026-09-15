<!DOCTYPE html><html lang="en"><head><title>{{ config('app.name', 'ResortFlow') }} · Add-ons</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fddeb2", "surface-tint": "#456553", "secondary-fixed": "#fddeb2", "on-tertiary-fixed-variant": "#574500", "tertiary-fixed-dim": "#e9c349", "on-error-container": "#93000a", "inverse-on-surface": "#edf2ed", "on-tertiary-container": "#4e3d00", "tertiary-fixed": "#ffe088", "on-secondary": "#ffffff", "tertiary-container": "#cba72f", "error-container": "#ffdad6", "tertiary": "#735c00", "primary-container": "#1b3b2b", "surface-container": "#ebefea", "secondary-fixed-dim": "#e0c298", "inverse-surface": "#2c322e", "background": "#f6fbf5", "on-primary-container": "#83a590", "secondary": "#715b38", "surface-container-low": "#f0f5f0", "surface-variant": "#dfe4df", "on-surface-variant": "#424843", "on-primary-fixed": "#002113", "surface-container-lowest": "#ffffff", "surface-container-highest": "#dfe4df", "on-primary-fixed-variant": "#2d4d3c", "primary-fixed": "#c7ebd4", "primary-fixed-dim": "#abcfb8", "on-primary": "#ffffff", "outline": "#727973", "outline-variant": "#c1c8c2", "on-surface": "#181d1a", "on-tertiary-fixed": "#241a00", "surface-bright": "#f6fbf5", "error": "#ba1a1a", "on-secondary-container": "#78613e", "on-background": "#181d1a", "primary": "#032517", "on-secondary-fixed": "#281900", "surface": "#f6fbf5", "surface-dim": "#d7dbd6", "surface-container-high": "#e5e9e4", "inverse-primary": "#abcfb8", "on-secondary-fixed-variant": "#584323", "on-tertiary": "#ffffff", "on-error": "#ffffff" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-2xs": "0.25rem", "space-2xl": "3rem", "space-md": "1rem", "space-xs": "0.5rem", "gutter-mobile": "1rem", "gutter-desktop": "2rem", "space-4xl": "6rem", "space-xl": "2rem", "container-max": "1440px", "gutter-tablet": "1.5rem", "space-lg": "1.5rem", "space-sm": "0.75rem", "space-3xl": "4rem" }, "fontFamily": { "label-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "title-lg": [ "Plus Jakarta Sans" ], "title-md": [ "Plus Jakarta Sans" ], "headline-lg": [ "Playfair Display" ], "currency-lg": [ "Plus Jakarta Sans" ], "headline-lg-mobile": [ "Playfair Display" ], "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "headline-md": [ "Playfair Display" ], "display-xl": [ "Playfair Display" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Playfair Display" ], "display-xl-mobile": [ "Playfair Display" ] }, "fontSize": { "label-md": [ "13px", { "lineHeight": "18px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" } ], "title-lg": [ "18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "title-md": [ "16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "600" } ], "headline-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "500" } ], "currency-lg": [ "24px", { "lineHeight": "30px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "body-lg": [ "16px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ], "headline-md": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "display-xl": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" } ], "body-sm": [ "12px", { "lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "400" } ], "headline-sm": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ], "display-xl-mobile": [ "38px", { "lineHeight": "46px", "letterSpacing": "-0.01em", "fontWeight": "600" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><header class="fixed top-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="bg-primary-container text-on-primary-container px-space-md py-space-xs"><div class="max-w-container-max mx-auto px-gutter-desktop flex flex-wrap items-center justify-between gap-space-xs"><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary-fixed text-[16px]">info</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-container-lowest font-medium">Demo Environment</span><span class="hidden md:inline font-body-sm text-body-sm text-on-primary-container/90">— No real payments or guest reservations are processed. Portfolio Showcase.</span></div><div class="flex items-center gap-space-sm"><div class="inline-flex items-center bg-primary/40 rounded-full p-0.5"><span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Guest Portal</span><a class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full text-on-primary-container hover:text-surface-container-lowest transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact">Staff Suite</a></div></div></div></div><div class="h-20 bg-surface/90 backdrop-blur-xl"><div class="h-20 max-w-container-max mx-auto px-gutter-desktop flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-sm"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary font-title-md font-semibold after:scale-x-100"><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="home" href="{{ route('home') }}">Home</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="stay" href="{{ route('stay') }}">Stay</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="amenities" href="{{ route('home') }}#amenities">Amenities</a><a aria-current="page" class="transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:transition-transform text-primary font-title-md font-semibold after:scale-x-100" data-path="experiences" href="{{ route('home') }}#experiences">Experiences</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="gallery" href="{{ route('home') }}#gallery">Gallery</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="about" href="{{ route('home') }}#about">About</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="contact" href="{{ route('home') }}#contact">Contact</a></nav><div class="flex items-center gap-space-md"><a class="hidden xl:flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Staff Admin</a><div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile" class="w-8 h-8 rounded-full object-cover shadow-[0_1px_4px_rgba(0,0,0,0.08)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjSHtXOB-ilyK-dHVZP07RT4sENR5yAt84ZsmAhhxPbojWzuE15zMXsUJ9v_LhehisMVtVJBpDlyHfiBLooaeuTdTnHSLRkDtaP6jOxlMYZnPtd7k9SUYpYv9JLzcfHn0kvubnoBdNYSmzaXEsZWsWOn2swSdtCNpvT0sPlvyWbOClhiJWgLu745-Jbht8kBj_5BPBm11VfgoJxd1NMWmfBRQB3xsUhc_Esosj2LDp8-2gIQWBK9v8_A"><a class="hidden sm:inline font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">My Bookings</a></div><a class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors shadow-[0_2px_8px_rgba(27,59,43,0.15)]" data-path="book-stay" href="{{ route('availability') }}">Book Your Stay</a></div></div></div></header><main class="w-full pt-20 bg-surface"><div class="flex flex-col w-full">
<!-- Progress Stepper Tracker Bar -->
<section class="booking-progress-indicator w-full bg-surface-container-low py-space-md shadow-sm">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm pb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Booking Journey</span>
<span class="text-outline-variant font-body-sm">•</span>
<span class="font-label-sm text-label-sm text-secondary font-semibold">Step 3 of 5 • Tailored Enhancements</span>
</div>
<div class="hidden sm:flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[16px] text-surface-tint">verified_user</span>
<span>Complimentary cancellation up to 72 hours before arrival</span>
</div>
</div>
<!-- Stepper Nodes -->
<div class="relative flex items-center justify-between pt-space-xs">
<!-- Connecting Track -->
<div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[2px] bg-surface-container-highest -z-0"></div>
<div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/2 h-[2px] bg-primary transition-all duration-500 -z-0"></div>
<!-- Step 1 -->
<div class="flex items-center gap-space-xs bg-surface-container-low pr-space-xs z-10">
<div class="w-7 h-7 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-[15px]">check</span>
</div>
<div class="hidden lg:flex flex-col">
<span class="font-label-sm text-label-sm text-primary font-bold">1. Room Sanctuary</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ocean Villa Selected</span>
</div>
</div>
<!-- Step 2 -->
<div class="flex items-center gap-space-xs bg-surface-container-low px-space-xs z-10">
<div class="w-7 h-7 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm shadow-sm">
<span class="material-symbols-outlined text-[15px]">check</span>
</div>
<div class="hidden lg:flex flex-col">
<span class="font-label-sm text-label-sm text-primary font-bold">2. Guest Details</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">2 Adults • Verified</span>
</div>
</div>
<!-- Step 3 (Active) -->
<div class="flex items-center gap-space-xs bg-surface-container-low px-space-xs z-10">
<div class="w-8 h-8 rounded-full bg-primary-container text-secondary-container flex items-center justify-center font-label-md text-label-md shadow-md animate-pulse">
<span>3</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-primary font-bold flex items-center gap-1">
              3. Experiences
              <span class="inline-block w-1.5 h-1.5 rounded-full bg-secondary"></span>
</span>
<span class="hidden sm:inline font-body-sm text-body-sm text-secondary font-medium">Curating In Progress</span>
</div>
</div>
<!-- Step 4 -->
<div class="flex items-center gap-space-xs bg-surface-container-low px-space-xs z-10">
<div class="w-7 h-7 rounded-full bg-surface-container text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm">
<span>4</span>
</div>
<div class="hidden lg:flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">4. Final Review</span>
<span class="font-body-sm text-body-sm text-on-surface-variant/70">Itinerary &amp; Guarantee</span>
</div>
</div>
<!-- Step 5 -->
<div class="flex items-center gap-space-xs bg-surface-container-low pl-space-xs z-10">
<div class="w-7 h-7 rounded-full bg-surface-container text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm">
<span>5</span>
</div>
<div class="hidden lg:flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">5. Confirmed</span>
<span class="font-body-sm text-body-sm text-on-surface-variant/70">Welcome Key</span>
</div>
</div>
</div>
</div>
</section>
<!-- Editorial Section Header -->
<section class="max-w-container-max mx-auto px-gutter-desktop pt-space-2xl pb-space-lg w-full">
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
<div class="max-w-3xl space-y-space-xs">
<div class="inline-flex items-center gap-space-xs rounded-full bg-secondary-container/40 px-space-sm py-0.5">
<span class="material-symbols-outlined text-secondary text-[16px]">room_service</span>
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Sanctuary Bespoke Program</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">
          Curate Your Stay Experiences &amp; Amenities
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
          Enhance your coastal sanctuary with artisanal dining packages, thermal wellness treatments, and private marine excursions tailored to your unhurried tempo.
        </p>
</div>
<!-- Quick Filter Nav Pill -->
<div class="flex items-center bg-surface-container rounded-full p-1 self-start lg:self-end shadow-sm">
<button class="filter-tab px-space-md py-1.5 rounded-full font-label-sm text-label-sm transition-all duration-200 bg-primary-container text-surface-container-lowest shadow-sm" id="filter-all" onclick="filterCatalog('all')">
          All Enhancements (8)
        </button>
<button class="filter-tab px-space-md py-1.5 rounded-full font-label-sm text-label-sm transition-all duration-200 text-on-surface-variant hover:text-primary" id="filter-amenities" onclick="filterCatalog('amenities')">
          Amenities &amp; Arrival
        </button>
<button class="filter-tab px-space-md py-1.5 rounded-full font-label-sm text-label-sm transition-all duration-200 text-on-surface-variant hover:text-primary" id="filter-wellness" onclick="filterCatalog('wellness')">
          Wellness &amp; Sea
        </button>
</div>
</div>
</section>
<!-- Main 2-Column Catalog & Sticky Ledger -->
<div class="max-w-container-max mx-auto px-gutter-desktop pb-space-4xl w-full">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
<!-- LEFT COLUMN: Add-ons Catalog (8 Columns) -->
<main class="lg:col-span-8 flex flex-col gap-space-2xl min-w-0">
<!-- SECTION 1: Resort Amenities & Convenience -->
<section class="category-group flex flex-col gap-space-md" id="section-amenities">
<div class="flex items-center justify-between pb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[22px]">nest_multi_room</span>
<h2 class="font-title-lg text-title-lg text-primary font-semibold">Resort Amenities &amp; Convenience</h2>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant/80">4 Curated Options</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Card A: Artisanal Organic Breakfast Package (ADDED with counter) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative overflow-hidden" id="card-breakfast">
<div class="absolute top-0 right-0">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm px-space-sm py-1 bg-secondary-container text-on-secondary-container rounded-bl-lg font-semibold">
<span class="material-symbols-outlined text-[14px]">local_cafe</span> Signature
                </span>
</div>
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Artisanal coastal breakfast tray served on a private cedar sun deck with poached organic eggs, fresh pastries, seasonal berries, linen napkin, and steaming pour-over coffee overlooking foggy Carmel pine trees." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8B1RVCre20A2ld5UvlX9psI36yLELszPAUxfjFNWymUzvctgMbdUB7GKmM87AZGGsqvC36VzrnssNj6E4I5RxZWTl71qfU8GvUoKYN8N4QeDQnj36pLWj4NnRe3VvanMNOntI_XPBN-PyNPNWJ9UFcWOfxj5fgGgar-lWNoEVdViwf8bMle01IEfFO1-3nMKvggq9p2DkhKAxhmXLgNU93dhwafd_UfozOgtUP1Ui9gsRGPlTglQg6g">
</div>
<div>
<div class="flex items-baseline justify-between gap-2">
<h3 class="font-title-md text-title-md text-primary font-semibold">Artisanal Organic Breakfast Package</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Farm-fresh daily breakfast delivered to your private terrace or enjoyed at the coastal ocean pavilion. Pastries, heirloom fruits, and barista service.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$45</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per guest / day</span>
</div>
<div class="text-right">
<span class="font-label-sm text-label-sm text-secondary font-bold">2 Guests • 4 Days</span>
<p class="font-title-md text-title-md text-primary font-semibold" id="breakfast-subtotal-display">$360</p>
</div>
</div>
<!-- Active State Controls with Counter -->
<div class="flex items-center justify-between bg-surface-container-low p-1.5 rounded-lg">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px] text-surface-tint">check_circle</span>
<span class="font-label-sm text-label-sm text-primary font-semibold">Included in Stay</span>
</div>
<div class="flex items-center gap-space-xs bg-surface-container-lowest rounded-md px-1 py-0.5 shadow-sm">
<button class="w-7 h-7 rounded hover:bg-surface-container flex items-center justify-center text-primary transition-colors" onclick="adjustBreakfastGuests(-1)" type="button">
<span class="material-symbols-outlined text-[16px]">remove</span>
</button>
<span class="font-title-md text-title-md text-primary font-bold px-2" id="breakfast-guest-count">2</span>
<button class="w-7 h-7 rounded hover:bg-surface-container flex items-center justify-center text-primary transition-colors" onclick="adjustBreakfastGuests(1)" type="button">
<span class="material-symbols-outlined text-[16px]">add</span>
</button>
</div>
</div>
</div>
</article>
<!-- Card B: Private Chauffeur Airport Transfer (NOT ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative" id="card-chauffeur">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Sleek midnight black electric luxury SUV parked along a winding scenic Big Sur cliffside road surrounded by towering cypress trees and ocean mist in soft ambient morning light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5hf2e08UHL8VRuzUQ6aRGe0liMO6tsmR4cE1Gh7zr28c0zqDmpiz0KIw-RJFDwd933JrWxW6bjKCQymOI2LsUq7DTeQko3Gtn767UNAdUh8LTv4I3WwN8EQKGwGh2EK11mUlsPV_rndED6JBQVNLGxxtmz8_2Uj6KSUmxIFY1_UkjSTGwym5ZykYz0sDEM-BmffPHVKHb6kdvWIMTbDbGNPVUzwj4T0x0rRWDqI_HOk3K6v0_nPd9eg">
</div>
<div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Private Chauffeur Airport Transfer</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Direct VIP greeting and transfer from Monterey Regional (MRY) or SFO in a quiet electric luxury SUV with chilled bottled spring water.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$140</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per booking / one-way</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Flight tracking included</span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest" id="btn-chauffeur" onclick="toggleAddon('chauffeur', 140, 'Private Chauffeur Airport Transfer')" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add to Stay</span>
</button>
</div>
</article>
<!-- Card C: Guaranteed Early Check-in (ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative overflow-hidden" id="card-earlycheckin">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Sunlit minimalist coastal resort pavilion bedroom with king bed, floor-to-ceiling glass doors opened to an ocean breeze, linen sheets, and warm natural oak woodwork." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfEmbO-AyhdhdivP0HpgxJsZ8w-99OOJIgsXJLPZpLks6oi4hapvDypz4nvwTKCqLaRzdp5o57j49_dNRuOGiQNz6tPjH4RuUpp2B0vxId3wnQ0pCsO9R7WG8ZdorfEvEzFXQEW_VrSnkUqOnUk_UO-bJ0ZGz0W5aVyncHmsDipY6pizZD9s0Hk4lwP3fyNXHhLBLAQ034yiXEYQ9WDurCHA9CXhF3Okglmuf3Lp2S0mycCJOuaPNZYg">
</div>
<div>
<div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[15px]">schedule</span> 12:00 PM Arrival
                  </div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Guaranteed Early Check-in (12:00 PM)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Settle into your villa ahead of the regular 3:00 PM check-in. Luggage unpack service, refreshing lavender spritz, and welcome refreshments.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$95</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">one-time privilege</span>
</div>
<span class="font-label-sm text-label-sm text-surface-tint font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">bolt</span> Priority Prep
                  </span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-primary text-on-primary shadow-sm hover:bg-primary/90" id="btn-earlycheckin" onclick="toggleAddon('earlycheckin', 95, 'Guaranteed Early Check-in')" type="button">
<span class="material-symbols-outlined text-[18px]">done</span>
<span>Added • $95</span>
</button>
</div>
</article>
<!-- Card D: Late Check-out Privilege (NOT ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative" id="card-latecheckout">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Serene turquoise private heated plunge pool on a private stone terrace surrounded by coastal succulents and overlooking the sun-drenched Pacific Ocean at mid-afternoon." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9SHCs-xjBy5R7o9o4ACjHxG-mg9Li2dXqINVsMEmqg9zgWsrrr86xrPJd23xFz3_HrSAOcJWDt4DEjWk-SILJakuupR-W_QXcjGmPH3-9WuOXiUMxj-ATWhavqv67wSSmPWtzoPiSqaW6rjbKldfqABC9OzvVz3lxxO-rBcrkOmtYX3LR6cILWoO9ekurM5JwDsw70dT9pBNzFjIi8GkbT1OscMnm68FdP5s2u0w_1R7aRnPdDku8sg">
</div>
<div>
<div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[15px]">schedule</span> 3:00 PM Departure
                  </div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Late Check-out Privilege (3:00 PM)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Enjoy an unhurried final afternoon soaking in the private heated plunge pool and taking a leisurely lunch before departure.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$110</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">one-time privilege</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Flexible luggage hold</span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest" id="btn-latecheckout" onclick="toggleAddon('latecheckout', 110, 'Late Check-out Privilege (3:00 PM)')" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add to Stay</span>
</button>
</div>
</article>
</div>
</section>
<!-- SECTION 2: Signature Wellness & Island Activities -->
<section class="category-group flex flex-col gap-space-md" id="section-wellness">
<div class="flex items-center justify-between pb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[22px]">spa</span>
<h2 class="font-title-lg text-title-lg text-primary font-semibold">Signature Wellness &amp; Island Activities</h2>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant/80">4 Curated Options</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Card E: Deep Ocean Stone Thermal Massage (ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative overflow-hidden" id="card-massage">
<div class="absolute top-0 right-0">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm px-space-sm py-1 bg-primary text-on-primary rounded-bl-lg font-semibold">
<span class="material-symbols-outlined text-[14px]">eco</span> Wellness Best Seller
                </span>
</div>
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Luxury alpine cliffside spa pavilion with smooth black river stones placed along a massage table with eucalyptus sprigs and warm ambient lantern light overlooking misty ocean waves." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNqqEs4hv3lr_ZgFIaFSV_tO0GXXQL0yFThzc9_1Ef1HgP3EoNUOQr4l1E0nhaT56t9NaoVk1OvlwvB_B6XKX96JftK5TA0ECoDYjEKfXBf5p8WSUXBMftJh6ShsO9D0bSijxKGW1LTsNfnCXl6qst7E7umiHtouyVQGqCQofVxKyYZqFAyVQcptKrOEFnaxvAkDvgpat_-jDBleLR0SkYkUBnIIRPGww0L4c_-G_aK9UhSh7FgUEa3Q">
</div>
<div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Deep Ocean Stone Thermal Massage (90 min)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Heated volcanic river stones and organic wild eucalyptus botanical oils administered by a master therapist in our cliffside spa pavilion.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$220</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per person (90 minutes)</span>
</div>
<div class="text-right">
<span class="font-label-sm text-label-sm text-secondary font-bold">1 Guest Reserved</span>
</div>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-primary text-on-primary shadow-sm hover:bg-primary/90" id="btn-massage" onclick="toggleAddon('massage', 220, 'Thermal Stone Massage (90m)')" type="button">
<span class="material-symbols-outlined text-[18px]">done</span>
<span>Added • 1 Guest ($220)</span>
</button>
</div>
</article>
<!-- Card F: Sunset Private Catamaran & Champagne Cruise (ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative overflow-hidden" id="card-catamaran">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A sleek modern luxury white catamaran sailing gently across golden hour ocean waters near dramatic cliffs, with two guests raising champagne flutes on teak deck." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzX1Uqy6vIrE5Lev0Tlban0qp6PEJC9NWaQyDQYbFOT76Qx967VhcKkE7UwwztRMIrE6juY6FAfgnNLLAqtmHALBQihVWuelpG__ShxDq4moDpqfXYTa1OYv2eif7JGIdwqkZFYalmbujKhUxsbc43yP-chi0e4_IBFHKWffVtMYO_XmXpDZ4RiI3DdYjIP_rY380B-JXevkanDRWm-v-OPl6oA2f-BWKiUFHN49J2ofjoQfwCHNkOwQ">
</div>
<div>
<div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[15px]">sailing</span> Golden Hour Excursion
                  </div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Sunset Private Catamaran &amp; Champagne Cruise</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    2.5-hour secluded coastal sailing past dramatic granite sea arches with resident sommelier-paired boutique reserve wines and artisan canapés.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$340</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per couple / 2.5 hours</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Includes Sommelier</span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-primary text-on-primary shadow-sm hover:bg-primary/90" id="btn-catamaran" onclick="toggleAddon('catamaran', 340, 'Sunset Catamaran Cruise')" type="button">
<span class="material-symbols-outlined text-[18px]">done</span>
<span>Added • Couple ($340)</span>
</button>
</div>
</article>
<!-- Card G: Guided Sea Kelp Kayaking & Snorkeling Tour (NOT ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative" id="card-kayak">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Two eco-kayakers navigating crystal-clear emerald coastal waters through a lush giant kelp forest canopy with playful sea otters in Carmel Bay under soft sunlight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHA9b6jmcB6I-SZqyGJUh4vdAu0gO_cDSeVxM8vLRlXs2d3xKEgX-fQe9G8szz-XbJcE8SQCMhzbUUmJ_exQSOnzIs7wM2_WeaepoAjsUnxJe2WuJU6VQsDkUECIeKo-hdtQOlUt-RBQwcizaHe4-EgMyrI_Dl3SXxA3_ll4TEO1jbWqRqDJe61rqFYmMvqo4qsgbbvjwXiXu9yCYqPoM4gvjm1-lOds83xwPacbXVHfI0bn9LIYHy2A">
</div>
<div>
<div class="flex items-center gap-1 text-surface-tint font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[15px]">kayaking</span> Marine Sanctuary Guided
                  </div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Guided Sea Kelp Kayaking &amp; Snorkeling Tour</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    Encounter California sea otters and pristine underwater marine life accompanied by our resident marine biologist. Premium wetsuits provided.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$95</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per person (2 hours)</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Small groups (max 6)</span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest" id="btn-kayak" onclick="toggleAddon('kayak', 95, 'Sea Kelp Kayak &amp; Snorkel')" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add to Stay</span>
</button>
</div>
</article>
<!-- Card H: Private Cliffside Candlelit Chef's Tasting Dinner (NOT ADDED) -->
<article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-space-md shadow-sm transition-all duration-300 hover:shadow-md relative" id="card-chefdinner">
<div class="space-y-space-sm">
<div class="relative w-full h-40 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="An intimate candlelit dining table set on a dramatic private cliff edge terrace with white linen, fine crystal stemware, and gourmet seafood plates as dusk falls over the ocean." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6u6EOM7SW9Nlv-KnGH3jekgA0baGzwQNJLrNodImS-ChC9WVwT5EUA3w0csyiVsZkrfqbYghFc_yk0zh9b3GeyljlP04BXraDJwzuyNxS1ypYSSCsIuynUumxbCEn4YMVVkk9aHd2y8hBEa63FmiSQ1QxS9oc-rO2hWmND-8wDTZr_R3ly58blaOqeSAjapd-p_dqe4b0TZxsF2zUj1Dczwn1IBL67zwLONVd4GYrFLpxMA3Mq6GbEw">
</div>
<div>
<div class="flex items-center gap-1 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[15px]">restaurant</span> Gastronomic Atelier
                  </div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Private Cliffside Candlelit Chef's Tasting</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 leading-relaxed">
                    5-course artisanal Monterey Bay seafood tasting prepared exclusively for you by Executive Chef Julian Vance, paired with private cellar vintages.
                  </p>
</div>
</div>
<div class="pt-space-md mt-space-sm space-y-space-sm">
<div class="flex items-baseline justify-between">
<div class="flex flex-col">
<span class="font-currency-lg text-currency-lg text-primary font-bold">$280</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">per person • 5 courses</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Wine pairing included</span>
</div>
<button class="w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest" id="btn-chefdinner" onclick="toggleAddon('chefdinner', 280, 'Private Cliffside Chef Tasting')" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Add to Stay</span>
</button>
</div>
</article>
</div>
</section>
</main>
<!-- RIGHT COLUMN: Sticky Dynamic Reservation Summary Ledger (4 Columns) -->
<aside class="lg:col-span-4 w-full lg:sticky lg:top-28">
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-md space-y-space-md">
<!-- Summary Header -->
<div class="space-y-space-2xs pb-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Reservation Ledger</span>
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container text-surface-tint">
<span class="w-1.5 h-1.5 rounded-full bg-surface-tint animate-ping"></span> Live Calculation
              </span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-medium">Coastal Ocean Pavilion</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">4 Nights • Oct 24 – Oct 28 • 2 Adults</p>
</div>
<!-- Base Stay Breakdown -->
<div class="space-y-space-xs bg-surface-container-low p-space-sm rounded-lg">
<div class="flex justify-between items-center text-on-surface">
<span class="font-body-sm text-body-sm">Room Base Sanctuary (4 nights)</span>
<span class="font-title-md text-title-md font-semibold text-primary">$3,120</span>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span class="font-body-sm text-body-sm">Resort Service, Spa Access &amp; Taxes</span>
<span class="font-body-sm text-body-sm font-medium">$488</span>
</div>
</div>
<!-- Selected Add-ons Breakdown List -->
<div class="space-y-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Selected Add-ons</span>
<span class="font-label-sm text-label-sm text-secondary font-semibold" id="addons-count-badge">4 Items Selected</span>
</div>
<div class="space-y-space-2xs" id="selected-addons-list">
<!-- Item 1: Breakfast -->
<div class="flex items-center justify-between py-1 text-on-surface" id="ledger-item-breakfast">
<div class="flex items-center gap-2">
<button type="button" onclick="removeAddon('breakfast')" class="text-on-surface-variant hover:text-error transition-colors" title="Remove">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
<span class="font-body-sm text-body-sm">Daily Artisanal Breakfast (2 Guests, 4d)</span>
</div>
<span class="font-body-sm text-body-sm font-semibold text-primary" id="ledger-val-breakfast">$360</span>
</div>
<!-- Item 2: Early Check-in -->
<div class="flex items-center justify-between py-1 text-on-surface" id="ledger-item-earlycheckin">
<div class="flex items-center gap-2">
<button class="text-on-surface-variant hover:text-error transition-colors" onclick="removeAddon('earlycheckin')" title="Remove" type="button">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
<span class="font-body-sm text-body-sm">Guaranteed Early Check-in</span>
</div>
<span class="font-body-sm text-body-sm font-semibold text-primary">$95</span>
</div>
<!-- Item 3: Thermal Stone Massage -->
<div class="flex items-center justify-between py-1 text-on-surface" id="ledger-item-massage">
<div class="flex items-center gap-2">
<button class="text-on-surface-variant hover:text-error transition-colors" onclick="removeAddon('massage')" title="Remove" type="button">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
<span class="font-body-sm text-body-sm">Thermal Stone Massage (90m)</span>
</div>
<span class="font-body-sm text-body-sm font-semibold text-primary">$220</span>
</div>
<!-- Item 4: Sunset Catamaran Cruise -->
<div class="flex items-center justify-between py-1 text-on-surface" id="ledger-item-catamaran">
<div class="flex items-center gap-2">
<button class="text-on-surface-variant hover:text-error transition-colors" onclick="removeAddon('catamaran')" title="Remove" type="button">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
<span class="font-body-sm text-body-sm">Sunset Catamaran Cruise</span>
</div>
<span class="font-body-sm text-body-sm font-semibold text-primary">$340</span>
</div>
</div>
<!-- Subtotal of Add-ons -->
<div class="flex justify-between items-center pt-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm uppercase tracking-wider">Add-ons Subtotal</span>
<span class="font-title-md text-title-md font-semibold text-primary" id="addons-subtotal">$1,015</span>
</div>
</div>
<!-- Total Due -->
<div class="pt-space-sm bg-surface-container p-space-md rounded-lg space-y-space-xs">
<div class="flex justify-between items-baseline">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Total Estimated Investment</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">All taxes and resort fees included</span>
</div>
<div class="text-right">
<span class="font-headline-md text-headline-md text-primary font-bold tracking-tight" id="grand-total">$4,623</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="pt-space-xs flex flex-col gap-space-xs">
<a class="w-full py-3.5 px-space-md rounded-full font-label-md text-label-md flex items-center justify-center gap-space-xs bg-primary text-surface-container-lowest shadow-md hover:bg-primary/90 transition-all duration-200 group" data-path="booking-summary" href="{{ request()->query('return') === 'summary' ? route('booking-summary') : route('booking-confirmation') }}">
<span>Review Booking &amp; Finalize</span>
<span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
<a class="w-full py-2 px-space-md text-center font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" data-path="booking-summary" href="{{ request()->query('return') === 'summary' ? route('booking-summary') : route('booking-confirmation') }}">
              Skip Remaining Add-ons
            </a>
</div>
<!-- Guarantee Badge -->
<div class="flex items-center gap-space-xs pt-space-xs text-on-surface-variant font-body-sm text-body-sm justify-center">
<span class="material-symbols-outlined text-secondary text-[16px]">lock</span>
<span>256-Bit Encrypted Direct Booking Security</span>
</div>
</div>
</aside>
</div>
</div>
<!-- Client-side Interactive Logic -->
<script>
    const ROOM_BASE = 3120;
    const TAXES_FEES = 488;
    const NIGHTS = 4;
    const BREAKFAST_RATE_PER_DAY = 45;

    let breakfastGuests = 2;

    const ADDONS_STORAGE_KEY = 'resortflow.addons.v2';
    const addonsState = {
      breakfast: { active: false, name: 'Daily Artisanal Breakfast', price: 360 },
      earlycheckin: { active: false, name: 'Guaranteed Early Check-in', price: 95 },
      massage: { active: false, name: 'Thermal Stone Massage (90m)', price: 220 },
      catamaran: { active: false, name: 'Sunset Catamaran Cruise', price: 340 },
      chauffeur: { active: false, name: 'Private Chauffeur Airport Transfer', price: 140 },
      latecheckout: { active: false, name: 'Late Check-out Privilege (3:00 PM)', price: 110 },
      kayak: { active: false, name: 'Sea Kelp Kayak & Snorkel', price: 95 },
      chefdinner: { active: false, name: 'Private Cliffside Chef Tasting', price: 280 }
    };

    try {
      const saved = JSON.parse(localStorage.getItem(ADDONS_STORAGE_KEY) || '{}');
      Object.keys(addonsState).forEach((key) => {
        if (typeof saved[key] === 'boolean') addonsState[key].active = saved[key];
      });
    } catch (error) {}

    function persistAddons() {
      try {
        localStorage.setItem(ADDONS_STORAGE_KEY, JSON.stringify(Object.fromEntries(Object.entries(addonsState).map(([key, item]) => [key, item.active]))));
      } catch (error) {}
    }

    function updateCalculations() {
      let addonsSum = 0;
      let count = 0;

      // Calculate Breakfast
      if (addonsState.breakfast.active) {
        addonsState.breakfast.price = breakfastGuests * BREAKFAST_RATE_PER_DAY * NIGHTS;
        addonsSum += addonsState.breakfast.price;
        count++;
      }

      // Calculate Others
      for (const [key, item] of Object.entries(addonsState)) {
        if (key !== 'breakfast' && item.active) {
          addonsSum += item.price;
          count++;
        }
      }

      const grandTotal = ROOM_BASE + TAXES_FEES + addonsSum;

      // Update DOM
      document.getElementById('addons-subtotal').textContent = '$' + addonsSum.toLocaleString();
      document.getElementById('grand-total').textContent = '$' + grandTotal.toLocaleString();
      document.getElementById('addons-count-badge').textContent = count + ' Items Selected';

      // Keep every catalog button aligned with the saved selection state.
      for (const [key, item] of Object.entries(addonsState)) {
        const btn = document.getElementById('btn-' + key);
        if (!btn) continue;
        const price = key === 'breakfast' ? item.price : item.price;
        btn.className = item.active
          ? 'w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-primary text-on-primary shadow-sm hover:bg-primary/90'
          : 'w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest';
        btn.innerHTML = item.active
          ? `<span class="material-symbols-outlined text-[18px]">done</span><span>Added &bull; $${price}</span>`
          : '<span class="material-symbols-outlined text-[18px]">add</span><span>Add to Stay</span>';
      }

      persistAddons();
      renderLedger();
    }

    function renderLedger() {
      const container = document.getElementById('selected-addons-list');
      container.innerHTML = '';

      for (const [key, item] of Object.entries(addonsState)) {
        if (item.active) {
          const row = document.createElement('div');
          row.className = 'flex items-center justify-between py-1 text-on-surface';
          row.id = 'ledger-item-' + key;

          let label = item.name;
          if (key === 'breakfast') {
            label = `Daily Artisanal Breakfast (${breakfastGuests} Guests, ${NIGHTS}d)`;
          }

          row.innerHTML = `
            <div class="flex items-center gap-2 min-w-0 pr-2">
              <button type="button" onclick="removeAddon('${key}')" class="text-on-surface-variant hover:text-error transition-colors shrink-0" title="Remove">
                <span class="material-symbols-outlined text-[16px]">close</span>
              </button>
              <span class="font-body-sm text-body-sm truncate">${label}</span>
            </div>
            <span class="font-body-sm text-body-sm font-semibold text-primary shrink-0">$${item.price.toLocaleString()}</span>
          `;
          container.appendChild(row);
        }
      }
    }

    function toggleAddon(key, price, name) {
      const item = addonsState[key];
      if (!item) return;

      item.active = !item.active;
      const btn = document.getElementById('btn-' + key);

      if (btn) {
        if (item.active) {
          btn.className = 'w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-primary text-on-primary shadow-sm hover:bg-primary/90';
          btn.innerHTML = `<span class="material-symbols-outlined text-[18px]">done</span><span>Added &bull; $${price}</span>`;
        } else {
          btn.className = 'w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest';
          btn.innerHTML = `<span class="material-symbols-outlined text-[18px]">add</span><span>Add to Stay</span>`;
        }
      }

      updateCalculations();
    }

    function removeAddon(key) {
      if (key === 'breakfast') {
        addonsState.breakfast.active = false;
        // Optionally update UI for breakfast card if desired
      } else {
        addonsState[key].active = false;
        const btn = document.getElementById('btn-' + key);
        if (btn) {
          btn.className = 'w-full py-2.5 px-space-md rounded-lg font-label-md text-label-md flex items-center justify-center gap-space-xs transition-all duration-200 bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest';
          btn.innerHTML = `<span class="material-symbols-outlined text-[18px]">add</span><span>Add to Stay</span>`;
        }
      }
      updateCalculations();
    }

    function adjustBreakfastGuests(delta) {
      const next = breakfastGuests + delta;
      if (next >= 1 && next <= 6) {
        breakfastGuests = next;
        document.getElementById('breakfast-guest-count').textContent = breakfastGuests;
        const newTotal = breakfastGuests * BREAKFAST_RATE_PER_DAY * NIGHTS;
        document.getElementById('breakfast-subtotal-display').textContent = '$' + newTotal;
        addonsState.breakfast.active = true;
        updateCalculations();
      }
    }

    function filterCatalog(category) {
      const amenitiesSec = document.getElementById('section-amenities');
      const wellnessSec = document.getElementById('section-wellness');
      const tabs = document.querySelectorAll('.filter-tab');

      tabs.forEach(t => {
        t.classList.remove('bg-primary-container', 'text-surface-container-lowest', 'shadow-sm');
        t.classList.add('text-on-surface-variant');
      });

      const activeTab = document.getElementById('filter-' + category);
      if (activeTab) {
        activeTab.classList.add('bg-primary-container', 'text-surface-container-lowest', 'shadow-sm');
        activeTab.classList.remove('text-on-surface-variant');
      }

      if (category === 'all') {
        amenitiesSec.style.display = 'flex';
        wellnessSec.style.display = 'flex';
      } else if (category === 'amenities') {
        amenitiesSec.style.display = 'flex';
        wellnessSec.style.display = 'none';
      } else if (category === 'wellness') {
        amenitiesSec.style.display = 'none';
        wellnessSec.style.display = 'flex';
      }
    }

    // Initialize state
    updateCalculations();
  </script>
</div></main><footer class="w-full bg-surface-container-low text-on-surface mt-space-3xl"><div class="max-w-container-max mx-auto px-gutter-desktop pt-space-3xl pb-space-2xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl"><div class="lg:col-span-2 space-y-space-md pr-space-xl"><div class="flex items-center gap-space-xs"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><p class="font-body-md text-body-md text-on-surface-variant max-w-md">An architectural sanctuary celebrating quiet hospitality, coastal pine landscapes, and curated alpine wellness rituals.</p><div class="pt-space-xs space-y-space-2xs text-on-surface-variant font-body-sm text-body-sm"><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">pin_drop</span> 4400 Whispering Pines Way, Carmel-by-the-Sea, CA 93923</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">call</span> +1 (831) 555-0198 • Concierge Direct</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">mail</span> concierge@resortflow.internal</p></div></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary &amp; Stays</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Coastal Pavilions</a></li><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Forest Canopy Suites</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">The Stone Thermal Baths</a></li><li><a class="hover:text-primary transition-colors" data-path="experiences" href="{{ route('home') }}#experiences">Private Wine Library</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">Artisanal Dining Atelier</a></li></ul></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Guest Privileges</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">Guest Itinerary Portal</a></li><li><a class="hover:text-primary transition-colors" data-path="book-stay" href="{{ route('availability') }}">Tailored Stay Requests</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Chauffeur &amp; Helipad Transfer</a></li><li><a class="hover:text-primary transition-colors" data-path="about" href="{{ route('home') }}#about">Sustainability Charter</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Resort Policies &amp; FAQ</a></li></ul></div><div class="space-y-space-md"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Gazette &amp; Chronicles</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Receive seasonal monographs, private reserve invitations, and architectural updates.</p><div class="flex flex-col gap-space-xs"><div class="flex items-center rounded-lg bg-surface-container-lowest px-space-sm py-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><input class="w-full bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none" placeholder="Enter your correspondence email" type="email"><button class="text-primary hover:text-secondary transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">arrow_forward</span></button></div><span class="font-label-sm text-label-sm text-on-surface-variant/70">Unsubscribe at your pleasure. Discretion guaranteed.</span></div><div class="inline-flex items-center gap-space-xs rounded-full bg-surface-container px-space-sm py-1"><span class="material-symbols-outlined text-secondary text-[16px]">military_tech</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Forbes Five-Star Laureate 2024</span></div></div></div><div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm"><div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-secondary-container"></span><span>© 2025 ResortFlow Hospitality Group. Architectural Quietude.</span></div><div class="flex items-center gap-space-lg font-label-sm text-label-sm"><span>Pacific Standard Time: 09:42 AM</span><span class="hidden md:inline">•</span><span>Elevation: 320m Above Carmel Bay</span></div></div></div></footer><script src="{{ asset('js/app.js') }}"></script></body></html>
