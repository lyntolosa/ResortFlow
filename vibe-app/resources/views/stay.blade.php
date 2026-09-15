<!DOCTYPE html><html lang="en"><head><title>{{ config('app.name', 'ResortFlow') }} · Stay</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fddeb2", "surface-tint": "#456553", "secondary-fixed": "#fddeb2", "on-tertiary-fixed-variant": "#574500", "tertiary-fixed-dim": "#e9c349", "on-error-container": "#93000a", "inverse-on-surface": "#edf2ed", "on-tertiary-container": "#4e3d00", "tertiary-fixed": "#ffe088", "on-secondary": "#ffffff", "tertiary-container": "#cba72f", "error-container": "#ffdad6", "tertiary": "#735c00", "primary-container": "#1b3b2b", "surface-container": "#ebefea", "secondary-fixed-dim": "#e0c298", "inverse-surface": "#2c322e", "background": "#f6fbf5", "on-primary-container": "#83a590", "secondary": "#715b38", "surface-container-low": "#f0f5f0", "surface-variant": "#dfe4df", "on-surface-variant": "#424843", "on-primary-fixed": "#002113", "surface-container-lowest": "#ffffff", "surface-container-highest": "#dfe4df", "on-primary-fixed-variant": "#2d4d3c", "primary-fixed": "#c7ebd4", "primary-fixed-dim": "#abcfb8", "on-primary": "#ffffff", "outline": "#727973", "outline-variant": "#c1c8c2", "on-surface": "#181d1a", "on-tertiary-fixed": "#241a00", "surface-bright": "#f6fbf5", "error": "#ba1a1a", "on-secondary-container": "#78613e", "on-background": "#181d1a", "primary": "#032517", "on-secondary-fixed": "#281900", "surface": "#f6fbf5", "surface-dim": "#d7dbd6", "surface-container-high": "#e5e9e4", "inverse-primary": "#abcfb8", "on-secondary-fixed-variant": "#584323", "on-tertiary": "#ffffff", "on-error": "#ffffff" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-2xs": "0.25rem", "space-2xl": "3rem", "space-md": "1rem", "space-xs": "0.5rem", "gutter-mobile": "1rem", "gutter-desktop": "2rem", "space-4xl": "6rem", "space-xl": "2rem", "container-max": "1440px", "gutter-tablet": "1.5rem", "space-lg": "1.5rem", "space-sm": "0.75rem", "space-3xl": "4rem" }, "fontFamily": { "label-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "title-lg": [ "Plus Jakarta Sans" ], "title-md": [ "Plus Jakarta Sans" ], "headline-lg": [ "Playfair Display" ], "currency-lg": [ "Plus Jakarta Sans" ], "headline-lg-mobile": [ "Playfair Display" ], "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "headline-md": [ "Playfair Display" ], "display-xl": [ "Playfair Display" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Playfair Display" ], "display-xl-mobile": [ "Playfair Display" ] }, "fontSize": { "label-md": [ "13px", { "lineHeight": "18px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" } ], "title-lg": [ "18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "title-md": [ "16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "600" } ], "headline-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "500" } ], "currency-lg": [ "24px", { "lineHeight": "30px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "body-lg": [ "16px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ], "headline-md": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "display-xl": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" } ], "body-sm": [ "12px", { "lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "400" } ], "headline-sm": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ], "display-xl-mobile": [ "38px", { "lineHeight": "46px", "letterSpacing": "-0.01em", "fontWeight": "600" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><header class="fixed top-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="bg-primary-container text-on-primary-container px-space-md py-space-xs"><div class="max-w-container-max mx-auto px-gutter-desktop flex flex-wrap items-center justify-between gap-space-xs"><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary-fixed text-[16px]">info</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-container-lowest font-medium">Demo Environment</span><span class="hidden md:inline font-body-sm text-body-sm text-on-primary-container/90">— No real payments or guest reservations are processed. Portfolio Showcase.</span></div><div class="flex items-center gap-space-sm"><div class="inline-flex items-center bg-primary/40 rounded-full p-0.5"><span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Guest Portal</span><a class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full text-on-primary-container hover:text-surface-container-lowest transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact">Staff Suite</a></div></div></div></div><div class="h-20 bg-surface/90 backdrop-blur-xl"><div class="h-20 max-w-container-max mx-auto px-gutter-desktop flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-sm"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary font-title-md font-semibold after:scale-x-100"><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="home" href="{{ route('home') }}">Home</a><a aria-current="page" class="transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:transition-transform text-primary font-title-md font-semibold after:scale-x-100" data-path="stay" href="{{ route('stay') }}">Stay</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="amenities" href="{{ route('home') }}#amenities">Amenities</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="experiences" href="{{ route('home') }}#experiences">Experiences</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="gallery" href="{{ route('home') }}#gallery">Gallery</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="about" href="{{ route('home') }}#about">About</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="contact" href="{{ route('home') }}#contact">Contact</a></nav><div class="flex items-center gap-space-md"><a class="hidden xl:flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Staff Admin</a><div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile" class="w-8 h-8 rounded-full object-cover shadow-[0_1px_4px_rgba(0,0,0,0.08)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjSHtXOB-ilyK-dHVZP07RT4sENR5yAt84ZsmAhhxPbojWzuE15zMXsUJ9v_LhehisMVtVJBpDlyHfiBLooaeuTdTnHSLRkDtaP6jOxlMYZnPtd7k9SUYpYv9JLzcfHn0kvubnoBdNYSmzaXEsZWsWOn2swSdtCNpvT0sPlvyWbOClhiJWgLu745-Jbht8kBj_5BPBm11VfgoJxd1NMWmfBRQB3xsUhc_Esosj2LDp8-2gIQWBK9v8_A"><a class="hidden sm:inline font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">My Bookings</a></div><a class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors shadow-[0_2px_8px_rgba(27,59,43,0.15)]" data-path="book-stay" href="{{ route('availability') }}">Book Your Stay</a></div></div></div></header><main class="w-full pt-20 bg-surface"><div class="flex flex-col w-full">
<!-- Sticky Horizon Bar: Contextual Booking Summary -->
<div class="sticky top-20 z-40 w-full bg-surface-container-lowest/95 backdrop-blur-md shadow-sm">
<div class="max-w-container-max mx-auto px-gutter-desktop py-space-sm flex flex-wrap items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-md flex-wrap">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-secondary text-[20px]">calendar_month</span>
<span class="font-title-md text-title-md text-on-surface">Oct 16, 2025</span>
<span class="text-outline-variant font-light">→</span>
<span class="font-title-md text-title-md text-on-surface">Oct 20, 2025</span>
</div>
<span class="inline-block w-1 h-1 rounded-full bg-outline-variant"></span>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
<span class="material-symbols-outlined text-[18px]">group</span>
<span>2 Adults, 1 Child</span>
</div>
<span class="inline-block w-1 h-1 rounded-full bg-outline-variant"></span>
<div class="inline-flex items-center gap-1.5 px-space-xs py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-surface-tint"></span>
<span>4 Nights</span>
</div>
<span class="hidden xl:inline text-secondary font-label-sm text-label-sm font-semibold tracking-wide uppercase">
          • 5 Accommodations Available
        </span>
</div>
<div class="flex items-center gap-space-sm">
<button class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-md text-label-md" id="modify-search-btn">
<span class="material-symbols-outlined text-[16px]">tune</span>
<span>Modify Stay</span>
</button>
</div>
</div>
</div>
<!-- Booking Progression Flow Indicator -->
<section class="booking-progress-indicator w-full bg-surface-container-low py-space-md shadow-inner">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="relative flex items-center justify-between max-w-3xl mx-auto">
<!-- Connecting Line Background -->
<div class="absolute top-1/2 left-4 right-4 -translate-y-1/2 h-[2px] bg-surface-container-highest z-0"></div>
<div class="absolute top-1/2 left-4 w-1/8 -translate-y-1/2 h-[2px] bg-primary-container z-0"></div>
<!-- Step 1 (Active) -->
<div class="relative z-10 flex flex-col items-center gap-1">
<div class="w-8 h-8 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shadow-md">
            1
          </div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Rooms</span>
</div>
<!-- Step 2 -->
<div class="relative z-10 flex flex-col items-center gap-1 opacity-70">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-semibold shadow-sm">
            2
          </div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Guest Details</span>
</div>
<!-- Step 3 -->
<div class="relative z-10 flex flex-col items-center gap-1 opacity-60">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-semibold shadow-sm">
            3
          </div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Add-ons</span>
</div>
<!-- Step 4 -->
<div class="relative z-10 flex flex-col items-center gap-1 opacity-50">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-semibold shadow-sm">
            4
          </div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Review</span>
</div>
<!-- Step 5 -->
<div class="relative z-10 flex flex-col items-center gap-1 opacity-40">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-semibold shadow-sm">
            5
          </div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Confirmed</span>
</div>
</div>
</div>
</section>
<!-- Main Showcase Layout: 2 Columns (Sidebar & Listings) -->
<div class="max-w-container-max mx-auto px-gutter-desktop py-space-xl w-full">
<div class="flex flex-col lg:flex-row items-start gap-space-xl">
<!-- Left Architectural Filter Sidebar (~280px) -->
<aside class="w-full lg:w-72 shrink-0 space-y-space-lg">
<!-- Filter Card Container -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm space-y-space-lg">
<div class="flex items-center justify-between pb-space-xs">
<h3 class="font-title-lg text-title-lg text-primary flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">filter_list</span>
              Curate Sanctuary
            </h3>
<button class="font-label-sm text-label-sm text-secondary hover:text-primary transition-colors tracking-wide underline uppercase" id="reset-filters">
              Reset
            </button>
</div>
<!-- Sorting Selector -->
<div class="space-y-space-xs">
<label class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold">
              Sort Collection
            </label>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-low text-on-surface font-title-md text-title-md py-2.5 px-3 rounded-lg focus:outline-none cursor-pointer" id="sort-filter">
<option selected="" value="recommended">Recommended Selection</option>
<option value="price-asc">Price: Low to High</option>
<option value="price-desc">Price: High to Low</option>
<option value="guest-favorites">Guest Favorites &amp; Ratings</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">
                expand_more
              </span>
</div>
</div>
<!-- Room Categories -->
<div class="space-y-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold block">
              Architectural Type
            </span>
<div class="space-y-1 font-body-sm text-body-sm">
<label data-category="all" class="category-filter flex items-center justify-between p-2 rounded-lg bg-surface-container text-primary font-semibold cursor-pointer" tabindex="0">
<span class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                  All Accommodations
                </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-lowest font-label-sm text-label-sm">4</span>
</label>
<label data-category="standalone" class="category-filter flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors cursor-pointer" tabindex="0">
<span class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
                  Standalone Villas
                </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">2</span>
</label>
<label data-category="veranda" class="category-filter flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors cursor-pointer" tabindex="0">
<span class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
                  Veranda Suites
                </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">1</span>
</label>
<label data-category="deluxe" class="category-filter flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors cursor-pointer" tabindex="0">
<span class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
                  Deluxe Rooms
                </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">1</span>
</label>
</div>
</div>
<!-- Price Range Slider -->
<div class="space-y-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold">
                Nightly Rate
              </span>
<span class="font-title-md text-title-md text-primary font-bold" id="price-val">$300 - $1,500</span>
</div>
<input id="price-filter" class="w-full accent-primary-container cursor-pointer h-1.5 bg-surface-container rounded-lg" max="1500" min="300" step="50" type="range" value="1500">
<div class="flex justify-between font-body-sm text-body-sm text-on-surface-variant">
<span>$300</span>
<span>$1,500+</span>
</div>
</div>
<!-- Bed Configurations -->
<div class="space-y-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold block">
              Bedding Preference
            </span>
<div class="space-y-2">
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="bedding" data-filter-value="king" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>California King Bed</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="bedding" data-filter-value="twin" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Twin Double Beds</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="bedding" data-filter-value="daybed" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Daybed / Convertible Sofa</span>
</label>
</div>
</div>
<!-- Amenities Multi-select -->
<div class="space-y-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-semibold block">
              Sanctuary Attributes
            </span>
<div class="space-y-2">
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="ocean" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Ocean View Panorama</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="pool" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Private Heated Pool</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="balcony" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Balcony &amp; Sun Terrace</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="bathtub" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Deep Soaking Bathtub</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="kitchenette" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Artisan Kitchenette</span>
</label>
<label class="flex items-center gap-2.5 text-on-surface font-body-sm text-body-sm cursor-pointer">
<input data-filter-group="attribute" data-filter-value="butler" class="w-4 h-4 rounded text-primary-container accent-primary-container" type="checkbox">
<span>Dedicated Butler Service</span>
</label>
</div>
</div>
</div>
<!-- Ambient Concierge Callout -->
<div class="p-space-lg rounded-xl bg-primary-container text-on-primary space-y-space-sm shadow-md">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest/10 flex items-center justify-center">
<span class="material-symbols-outlined text-secondary-fixed text-[18px]">support_agent</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest">Specialized Suite Requests</h4>
<p class="font-body-sm text-body-sm text-on-primary-container">
            Seeking contiguous villas for family assemblies or private cliffside buyouts? Direct contact with our Chief Concierge.
          </p>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary-fixed hover:text-surface-container-lowest transition-colors pt-1" href="{{ route('home') }}#contact">
<span>Inquire discreetly</span>
<span class="material-symbols-outlined text-[16px]">north_east</span>
</a>
</div>
</aside>
<!-- Right Main Content: Available Room Cards List -->
<main class="flex-1 w-full space-y-space-lg">
<!-- Header Info Line -->
<div class="flex flex-col sm:flex-row sm:items-baseline justify-between gap-space-xs pb-space-xs">
<div>
<h2 class="font-headline-md text-headline-md text-primary tracking-tight">Available Residences</h2>
<p class="font-body-md text-body-md text-on-surface-variant">All selections include organic alpine breakfast and thermal pool privileges.</p>
</div>
<div class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold shrink-0">
            Real-time Rates Guarantee
          </div>
</div>
<!-- CARD 1: Ocean View Villa (Highlighted / Most Popular) -->
<article data-category="standalone" data-price="{{ config('rooms.Ocean View Villa.price') }}" data-bedding="king" data-attributes="ocean,pool,balcony,bathtub" class="room-card group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="grid grid-cols-1 md:grid-cols-12">
<!-- Photography Presentation (5 cols) -->
<div class="relative md:col-span-5 h-72 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A tranquil architectural luxury villa with wide floor-to-ceiling glass sliding doors opened toward a glistening Pacific ocean at twilight. Inside features minimalist low-slung oak furniture, pure linen drapes, and an adjacent private stone plunge pool resting under fragrant pine trees. Warm amber ambient lighting, cinematic editorial composition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWTe4CCkPSgDKD8DHyuHKilfBvbf4en6Zn9ErN0onCiMbEwU6H02QLEtyJBBETK7NiwSohtPMHk1_nQHF4nTZW641PZK_Y1LMheAk91A8Mf26nognZ5-vEsABrGhHfphhy-nYuzQ7dvknn5CdO5L8V0My7zNbt2N2p54sD_2sh9coV0t7-8BQ_JBhuhi2PMYQIQK378pqE3BV_lnzAX5Wb5VVUU2trtanuGwPQC7k2IuoYKg9Z-UJO0Q">
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
                  Signature Villa
                </span>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold shadow-sm">
                  Only 2 villas left
                </span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-inverse-surface/75 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">photo_camera</span>
<span>8 Photos</span>
</div>
</div>
<!-- Detail & Rates (7 cols) -->
<div class="p-space-lg md:col-span-7 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-start justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Standalone Pavilion</span>
<h3 class="font-headline-md text-headline-md text-primary mt-0.5 group-hover:text-surface-tint transition-colors">
                      Ocean View Villa
                    </h3>
</div>
<div class="text-right">
<span class="font-currency-lg text-currency-lg text-primary block leading-none">$780</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
</div>
<!-- Room Specifications Strip -->
<div class="grid grid-cols-3 gap-2 py-space-sm my-space-xs rounded-lg bg-surface-container-low px-space-sm">
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">group</span>
<span>2-3 Guests</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">king_bed</span>
<span>1 King Bed</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">square_foot</span>
<span>85 m²</span>
</div>
</div>
<!-- Highlight Amenities -->
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-sm">
                  Perched high above the marine horizon with private cedar sun deck, heated ocean-facing plunge pool, outdoor rain shower, and custom vinyl listening nook.
                </p>
<div class="flex flex-wrap gap-space-xs pt-1">
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">pool</span> Private Plunge Pool
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">wb_twilight</span> Unobstructed Sunset
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">shower</span> Rainfall Bath
                  </span>
</div>
</div>
<!-- Bottom Action Rail with Total Breakdown -->
<div class="flex items-center justify-between pt-space-sm mt-space-xs">
<div>
<div class="font-title-md text-title-md text-primary font-bold">
                    $3,120 <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">total (4 nights)</span>
</div>
<span class="font-label-sm text-label-sm text-surface-tint flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">check_circle</span> Includes taxes &amp; spa access
                  </span>
</div>
<div class="flex items-center gap-space-xs">
<a class="px-space-md py-space-xs rounded-full text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors" href="{{ route('details', ['room' => 'Ocean View Villa']) }}">View Details</a>
<a href="{{ route('details', ['room' => 'Ocean View Villa']) }}#booking" class="px-space-lg py-space-xs rounded-full bg-primary-container text-surface-container-lowest hover:bg-primary font-label-md text-label-md shadow-md hover:shadow-lg transition-all">Select Room</a>
</div>
</div>
</div>
</div>
</article>
<!-- CARD 2: Poolside Garden Suite -->
<article data-category="veranda" data-price="{{ config('rooms.Poolside Garden Suite.price') }}" data-bedding="king,daybed" data-attributes="pool,balcony" class="room-card group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="grid grid-cols-1 md:grid-cols-12">
<!-- Photography (5 cols) -->
<div class="relative md:col-span-5 h-72 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Architectural resort ground-floor suite featuring stone patio opening directly to lush tropical ferns and an emerald swimming reflection pool. Minimalist beige plaster walls, woven rattan lounge chairs, floor-to-ceiling sliding panels, soft diffused morning sunlight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJvshNMEpR46QEao8Q1FjQDfi7bOScHmfUZkuv7SzUOZvUNOzlqAYLF4QX8MW-blHaHKf3Mz_fdhpAr0j22U19oCuJ7GoYTLuVnCZKX42kW6053_PR94mh6Qv2f1EtbpeenOQ5rOLF7Ll0fEJZ4LC8AdKIExT69Xc0x3U34Ep1b3EtnwNQr4I4RqbiPewqAL86YNATI5R83U34LD_njJ8_6Cjegf9cIhgLLcobzJHd3WQTrUZVn0i6gw">
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold shadow-sm">
                  Direct Pool Access
                </span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-inverse-surface/75 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">photo_camera</span>
<span>6 Photos</span>
</div>
</div>
<!-- Detail & Rates (7 cols) -->
<div class="p-space-lg md:col-span-7 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-start justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Resort Wing Suite</span>
<h3 class="font-headline-md text-headline-md text-primary mt-0.5 group-hover:text-surface-tint transition-colors">
                      Poolside Garden Suite
                    </h3>
</div>
<div class="text-right">
<span class="font-currency-lg text-currency-lg text-primary block leading-none">$520</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
</div>
<!-- Room Specifications Strip -->
<div class="grid grid-cols-3 gap-2 py-space-sm my-space-xs rounded-lg bg-surface-container-low px-space-sm">
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">group</span>
<span>2-{{ config('rooms.Poolside Garden Suite.capacity') }} Guests</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">bed</span>
<span>1 King + 1 Daybed</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">square_foot</span>
<span>65 m²</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-sm">
                  Spacious open-concept interior steps away from the tranquil adult-only thermal pool, boasting a deep Japanese Hinoki soaking tub and secluded garden patio.
                </p>
<div class="flex flex-wrap gap-space-xs pt-1">
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">hot_tub</span> Hinoki Tub
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">deck</span> Private Patio
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">nest_thermostat</span> Climate Sanctuary
                  </span>
</div>
</div>
<!-- Bottom Action Rail -->
<div class="flex items-center justify-between pt-space-sm mt-space-xs">
<div>
<div class="font-title-md text-title-md text-primary font-bold">
                    $2,080 <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">total (4 nights)</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Includes taxes &amp; gratuities</span>
</div>
<div class="flex items-center gap-space-xs">
<a class="px-space-md py-space-xs rounded-full text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors" href="{{ route('details', ['room' => 'Poolside Garden Suite']) }}">View Details</a>
<a href="{{ route('details', ['room' => 'Poolside Garden Suite']) }}#booking" class="px-space-lg py-space-xs rounded-full bg-surface-container-high text-primary hover:bg-primary-container hover:text-surface-container-lowest font-label-md text-label-md transition-all">Select Room</a>
</div>
</div>
</div>
</div>
</article>
<!-- CARD 3: Garden Deluxe Room -->
<article data-category="deluxe" data-price="{{ config('rooms.Garden Deluxe Room.price') }}" data-bedding="king,twin" data-attributes="bathtub,kitchenette" class="room-card group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="grid grid-cols-1 md:grid-cols-12">
<!-- Photography (5 cols) -->
<div class="relative md:col-span-5 h-72 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Boutique modern hotel room overlooking an organic botanical herb garden. White sculpted headboard, tailored sage-green textiles, private covered balcony with teak chairs, and marble-clad bathroom visible through reeded glass partitions. High architectural elegance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjY5HBGMVCQcbAneBzrFp7jAQ4G0mw983RMRBjr4TD4VSgH-2UbJNJ5_CS9iJjvJLmLk19_vSlH0ZiOuTm18-HykfNC2fnrYYt1f3tjr9HErJdUivaNuiPy6XVNKEfNxGBoLSFe08dK7aNyW1jkq7pvC0ZoOvd-tDEsP-yS1HQywDbfmvZR_JaH6XTVd4ewkUToQIJajRZsha88LdHXXR8LSQVzgZDnwd9yp8zO2LoJeVncEYf5YQ68g">
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold shadow-sm">
                  Best Value
                </span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-inverse-surface/75 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">photo_camera</span>
<span>5 Photos</span>
</div>
</div>
<!-- Detail & Rates (7 cols) -->
<div class="p-space-lg md:col-span-7 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-start justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Estate Residence</span>
<h3 class="font-headline-md text-headline-md text-primary mt-0.5 group-hover:text-surface-tint transition-colors">
                      Garden Deluxe Room
                    </h3>
</div>
<div class="text-right">
<span class="font-currency-lg text-currency-lg text-primary block leading-none">$380</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
</div>
<!-- Room Specifications Strip -->
<div class="grid grid-cols-3 gap-2 py-space-sm my-space-xs rounded-lg bg-surface-container-low px-space-sm">
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">group</span>
<span>2 Guests</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">king_bed</span>
<span>1 King or 2 Queens</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">square_foot</span>
<span>48 m²</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-sm">
                  Embraced by towering coastal pines and curated flora. Includes an expansive marble ensuite with dual vanity and private reading balcony overlooking the lower courtyard.
                </p>
<div class="flex flex-wrap gap-space-xs pt-1">
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">forest</span> Botanical View
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">balcony</span> Balcony
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">coffee</span> Espresso Atelier
                  </span>
</div>
</div>
<!-- Bottom Action Rail -->
<div class="flex items-center justify-between pt-space-sm mt-space-xs">
<div>
<div class="font-title-md text-title-md text-primary font-bold">
                    $1,520 <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">total (4 nights)</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Includes daily breakfast</span>
</div>
<div class="flex items-center gap-space-xs">
<a class="px-space-md py-space-xs rounded-full text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors" href="{{ route('details', ['room' => 'Garden Deluxe Room']) }}">View Details</a>
<a href="{{ route('details', ['room' => 'Garden Deluxe Room']) }}#booking" class="px-space-lg py-space-xs rounded-full bg-surface-container-high text-primary hover:bg-primary-container hover:text-surface-container-lowest font-label-md text-label-md transition-all">Select Room</a>
</div>
</div>
</div>
</div>
</article>
<!-- CARD 4: Private Cliffside Pool Villa (Ultra Luxury) -->
<article data-category="standalone" data-price="{{ config('rooms.Private Cliffside Pool Villa.price') }}" data-bedding="king" data-attributes="pool,butler,balcony" class="room-card group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
<div class="grid grid-cols-1 md:grid-cols-12">
<!-- Photography (5 cols) -->
<div class="relative md:col-span-5 h-72 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Dramatic architectural cliffside luxury villa overlooking a rugged coastal ocean seascape. Cantilevered wooden deck features a private glass-edged infinity pool jutting into the sunset sky. Warm architectural lighting, limestone fireplace, and refined outdoor dining setting under cedar pergolas." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC49cXV0pPjjzc1LHjkI6WzJH1UmM74p3D0r0gshE-M5WC-QM0gdqMGsPo6jkwW1EqYpChpN_5PkmPvgQJbmszsGu-IkDglxpEGozEuv8YuLivaM-XIxRYOJ8VRxyW3vCT3mzRB99OnkfYdUWh81owpdupVlFNO7jALsK16ubAjndAEoA6AcEtfV3jPUyuFx_EV_nFEulwpZ7xk4loWe7BUDrAF1YS_lI1NOf0Zf9MlxkZJAFdr__FkXQ">
<div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-container text-surface-container-lowest font-label-sm text-label-sm font-semibold shadow-sm">
<span class="material-symbols-outlined text-[14px] text-secondary-fixed">star</span>
                  Presidential Tier
                </span>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold shadow-sm">
                  Exclusive: 1 Left
                </span>
</div>
<div class="absolute bottom-3 right-3 px-2 py-1 rounded-lg bg-inverse-surface/75 backdrop-blur-sm text-inverse-on-surface font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">photo_camera</span>
<span>12 Photos</span>
</div>
</div>
<!-- Detail & Rates (7 cols) -->
<div class="p-space-lg md:col-span-7 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-start justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Private Compound</span>
<h3 class="font-headline-md text-headline-md text-primary mt-0.5 group-hover:text-surface-tint transition-colors">
                      Private Cliffside Pool Villa
                    </h3>
</div>
<div class="text-right">
<span class="font-currency-lg text-currency-lg text-primary block leading-none">$1,150</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
</div>
<!-- Room Specifications Strip -->
<div class="grid grid-cols-3 gap-2 py-space-sm my-space-xs rounded-lg bg-surface-container-low px-space-sm">
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">group</span>
<span>4 Guests</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">bedroom_parent</span>
<span>2 King Suites</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface font-body-sm text-body-sm">
<span class="material-symbols-outlined text-secondary text-[18px]">square_foot</span>
<span>140 m²</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mb-space-sm">
                  The ultimate retreat. Suspended 300 meters above the Pacific with private infinity-edge heated pool, 24-hour dedicated butler, Sommelier wine reserve, and fire pit terrace.
                </p>
<div class="flex flex-wrap gap-space-xs pt-1">
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">pool</span> Private Infinity Pool
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">concierge</span> Dedicated Butler
                  </span>
<span class="inline-flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm bg-surface-container px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[14px] text-surface-tint">wine_bar</span> Private Cellar
                  </span>
</div>
</div>
<!-- Bottom Action Rail -->
<div class="flex items-center justify-between pt-space-sm mt-space-xs">
<div>
<div class="font-title-md text-title-md text-primary font-bold">
                    $4,600 <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">total (4 nights)</span>
</div>
<span class="font-label-sm text-label-sm text-surface-tint flex items-center gap-0.5">
<span class="material-symbols-outlined text-[14px]">stars</span> Valet Chauffeur + All Amenities
                  </span>
</div>
<div class="flex items-center gap-space-xs">
<a class="px-space-md py-space-xs rounded-full text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors" href="{{ route('details', ['room' => 'Private Cliffside Pool Villa']) }}">View Details</a>
<a href="{{ route('details', ['room' => 'Private Cliffside Pool Villa']) }}#booking" class="px-space-lg py-space-xs rounded-full bg-primary-container text-surface-container-lowest hover:bg-primary font-label-md text-label-md shadow-md hover:shadow-lg transition-all">Select Room</a>
</div>
</div>
</div>
</div>
</article>
<!-- Accommodations Comparison Visual Tray -->
<section class="mt-space-2xl bg-surface-container-low rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between mb-space-md">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Comparative Perspective</span>
<h3 class="font-headline-sm text-headline-sm text-primary">Sanctuary Attributes at a Glance</h3>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant hidden md:inline">Showing 4 of 4 selected residences</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left font-body-sm text-body-sm">
<thead>
<tr class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-2.5 px-3">Room Type</th>
<th class="py-2.5 px-3">Surface</th>
<th class="py-2.5 px-3">Bedding</th>
<th class="py-2.5 px-3">Pool Type</th>
<th class="py-2.5 px-3 text-right">Nightly</th>
</tr>
</thead>
<tbody class="text-on-surface">
<tr class="hover:bg-surface-container-highest/30 transition-colors">
<td class="py-3 px-3 font-semibold text-primary">Ocean View Villa</td>
<td class="py-3 px-3 text-on-surface-variant">85 m²</td>
<td class="py-3 px-3 text-on-surface-variant">1 King Bed</td>
<td class="py-3 px-3 text-surface-tint font-medium">Private Plunge</td>
<td class="py-3 px-3 text-right font-title-md text-title-md text-primary font-bold">$780</td>
</tr>
<tr class="hover:bg-surface-container-highest/30 transition-colors">
<td class="py-3 px-3 font-semibold text-primary">Poolside Garden Suite</td>
<td class="py-3 px-3 text-on-surface-variant">65 m²</td>
<td class="py-3 px-3 text-on-surface-variant">1 King + Daybed</td>
<td class="py-3 px-3 text-on-surface-variant">Direct Access</td>
<td class="py-3 px-3 text-right font-title-md text-title-md text-primary font-bold">$520</td>
</tr>
<tr class="hover:bg-surface-container-highest/30 transition-colors">
<td class="py-3 px-3 font-semibold text-primary">Garden Deluxe Room</td>
<td class="py-3 px-3 text-on-surface-variant">48 m²</td>
<td class="py-3 px-3 text-on-surface-variant">1 King or 2 Queens</td>
<td class="py-3 px-3 text-on-surface-variant">Thermal Bath Access</td>
<td class="py-3 px-3 text-right font-title-md text-title-md text-primary font-bold">$380</td>
</tr>
<tr class="hover:bg-surface-container-highest/30 transition-colors">
<td class="py-3 px-3 font-semibold text-primary">Private Cliffside Pool Villa</td>
<td class="py-3 px-3 text-on-surface-variant">140 m²</td>
<td class="py-3 px-3 text-on-surface-variant">2 King Suites</td>
<td class="py-3 px-3 text-surface-tint font-medium">Private Infinity Pool</td>
<td class="py-3 px-3 text-right font-title-md text-title-md text-primary font-bold">$1,150</td>
</tr>
</tbody>
</table>
</div>
</section>
</main>
</div>
</div>
<!-- Interactive Client-side Scripting for UI Micro-States -->
<script>
    (function() {
      // Micro-interaction for Select buttons
      const selectButtons = [];
      selectButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          const card = this.closest('article');
          const title = card ? card.querySelector('h3').innerText : 'Room';
          
          // Temporary UI Feedback
          const origText = this.innerText;
          this.innerHTML = '<span class="material-symbols-outlined text-[16px] animate-spin">progress_activity</span> Selecting...';
          setTimeout(() => {
            this.innerHTML = '<span class="material-symbols-outlined text-[16px]">check</span> Selected';
            this.classList.remove('bg-surface-container-high', 'text-primary');
            this.classList.add('bg-primary', 'text-surface-container-lowest');
          }, 450);
        });
      });

      // Modify Stay button trigger
      const modifyBtn = document.getElementById('modify-search-btn');
      if (modifyBtn) {
        modifyBtn.addEventListener('click', () => {
          window.location.href = '/availability';
        });
      }
    })();
  </script>
</div></main><footer class="w-full bg-surface-container-low text-on-surface mt-space-3xl"><div class="max-w-container-max mx-auto px-gutter-desktop pt-space-3xl pb-space-2xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl"><div class="lg:col-span-2 space-y-space-md pr-space-xl"><div class="flex items-center gap-space-xs"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><p class="font-body-md text-body-md text-on-surface-variant max-w-md">An architectural sanctuary celebrating quiet hospitality, coastal pine landscapes, and curated alpine wellness rituals.</p><div class="pt-space-xs space-y-space-2xs text-on-surface-variant font-body-sm text-body-sm"><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">pin_drop</span> 4400 Whispering Pines Way, Carmel-by-the-Sea, CA 93923</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">call</span> +1 (831) 555-0198 • Concierge Direct</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">mail</span> concierge@resortflow.internal</p></div></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary &amp; Stays</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Coastal Pavilions</a></li><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Forest Canopy Suites</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">The Stone Thermal Baths</a></li><li><a class="hover:text-primary transition-colors" data-path="experiences" href="{{ route('home') }}#experiences">Private Wine Library</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">Artisanal Dining Atelier</a></li></ul></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Guest Privileges</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">Guest Itinerary Portal</a></li><li><a class="hover:text-primary transition-colors" data-path="book-stay" href="{{ route('availability') }}">Tailored Stay Requests</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Chauffeur &amp; Helipad Transfer</a></li><li><a class="hover:text-primary transition-colors" data-path="about" href="{{ route('home') }}#about">Sustainability Charter</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Resort Policies &amp; FAQ</a></li></ul></div><div class="space-y-space-md"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Gazette &amp; Chronicles</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Receive seasonal monographs, private reserve invitations, and architectural updates.</p><div class="flex flex-col gap-space-xs"><div class="flex items-center rounded-lg bg-surface-container-lowest px-space-sm py-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><input class="w-full bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none" placeholder="Enter your correspondence email" type="email"><button id="newsletter-submit" class="text-primary hover:text-secondary transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">arrow_forward</span></button></div><span class="font-label-sm text-label-sm text-on-surface-variant/70">Unsubscribe at your pleasure. Discretion guaranteed.</span></div><div class="inline-flex items-center gap-space-xs rounded-full bg-surface-container px-space-sm py-1"><span class="material-symbols-outlined text-secondary text-[16px]">military_tech</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Forbes Five-Star Laureate 2024</span></div></div></div><div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm"><div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-secondary-container"></span><span>© 2025 ResortFlow Hospitality Group. Architectural Quietude.</span></div><div class="flex items-center gap-space-lg font-label-sm text-label-sm"><span>Pacific Standard Time: 09:42 AM</span><span class="hidden md:inline">•</span><span>Elevation: 320m Above Carmel Bay</span></div></div></div></footer><script src="{{ asset('js/app.js') }}"></script><script>
    (function () {
      const cards = Array.from(document.querySelectorAll('.room-card'));
      const cardList = cards[0]?.parentElement;
      const roomList = document.createElement('div');
      roomList.className = 'space-y-space-lg';
      if (cardList && cards[0]) {
        cardList.insertBefore(roomList, cards[0]);
        cards.forEach(card => roomList.appendChild(card));
      }
      const sort = document.getElementById('sort-filter');
      const price = document.getElementById('price-filter');
      const priceLabel = document.getElementById('price-val');
      const categoryFilters = Array.from(document.querySelectorAll('.category-filter'));
      const preferenceFilters = Array.from(document.querySelectorAll('[data-filter-group]'));
      let category = 'all';

      function updatePriceLabel() {
        if (priceLabel && price) priceLabel.textContent = '$300 - $' + Number(price.value).toLocaleString();
      }

      function selectedValues(group) {
        return preferenceFilters
          .filter(input => input.dataset.filterGroup === group && input.checked)
          .map(input => input.dataset.filterValue);
      }

      function refreshRooms() {
        const bedding = selectedValues('bedding');
        const attributes = selectedValues('attribute');
        const maxPrice = Number(price?.value || 1500);
        const visible = cards.filter(card => {
          const cardBedding = (card.dataset.bedding || '').split(',');
          const cardAttributes = (card.dataset.attributes || '').split(',');
          const matchesBedding = !bedding.length || bedding.some(value => cardBedding.includes(value));
          const matchesAttributes = !attributes.length || attributes.every(value => cardAttributes.includes(value));
          return (category === 'all' || card.dataset.category === category)
            && Number(card.dataset.price) <= maxPrice
            && matchesBedding
            && matchesAttributes;
        });

        const ordered = [...visible].sort((a, b) => {
          const aPrice = Number(a.dataset.price);
          const bPrice = Number(b.dataset.price);
          if (sort?.value === 'price-asc') return aPrice - bPrice;
          if (sort?.value === 'price-desc' || sort?.value === 'guest-favorites') return bPrice - aPrice;
          return cards.indexOf(a) - cards.indexOf(b);
        });
        cards.forEach(card => card.hidden = !visible.includes(card));
        ordered.forEach(card => roomList.appendChild(card));

        let status = document.getElementById('filter-status');
        if (!status && cardList) {
          status = document.createElement('p');
          status.id = 'filter-status';
          status.className = 'rounded-lg bg-secondary-container/50 px-space-md py-space-sm text-on-secondary-container font-body-sm text-body-sm';
          cardList.prepend(status);
        }
        if (status) {
          status.textContent = visible.length ? `${visible.length} residence${visible.length === 1 ? '' : 's'} match your preferences.` : 'No residences match these preferences. Try adjusting a filter.';
          status.hidden = false;
        }
      }

      categoryFilters.forEach(filter => {
        filter.addEventListener('click', event => {
          event.preventDefault();
          category = filter.dataset.category || 'all';
          categoryFilters.forEach(item => {
            const active = item === filter;
            item.classList.toggle('bg-surface-container', active);
            item.classList.toggle('text-primary', active);
            item.classList.toggle('font-semibold', active);
            item.classList.toggle('bg-surface-container-low', !active);
            item.setAttribute('aria-pressed', active ? 'true' : 'false');
          });
          refreshRooms();
        });
        filter.addEventListener('keydown', event => {
          if (event.key === 'Enter' || event.key === ' ') filter.click();
        });
      });
      preferenceFilters.forEach(input => input.addEventListener('change', refreshRooms));
      sort?.addEventListener('change', refreshRooms);
      price?.addEventListener('input', () => { updatePriceLabel(); refreshRooms(); });

      document.getElementById('reset-filters')?.addEventListener('click', function () {
        category = 'all';
        sort.value = 'recommended';
        if (price) price.value = 1500;
        preferenceFilters.forEach(input => input.checked = false);
        categoryFilters[0]?.click();
        updatePriceLabel();
        refreshRooms();
      });

      updatePriceLabel();
      refreshRooms();
    })();

    document.getElementById('newsletter-submit')?.addEventListener('click', function () {
        const email = this.closest('div').querySelector('input[type="email"]');
        if (email?.checkValidity()) alert('Thank you! We will keep you updated.');
        else email?.reportValidity();
    });
</script></body></html>
