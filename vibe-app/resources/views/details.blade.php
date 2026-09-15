<!DOCTYPE html><html lang="en"><head><title>{{ config('app.name', 'ResortFlow') }} · Details</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fddeb2", "surface-tint": "#456553", "secondary-fixed": "#fddeb2", "on-tertiary-fixed-variant": "#574500", "tertiary-fixed-dim": "#e9c349", "on-error-container": "#93000a", "inverse-on-surface": "#edf2ed", "on-tertiary-container": "#4e3d00", "tertiary-fixed": "#ffe088", "on-secondary": "#ffffff", "tertiary-container": "#cba72f", "error-container": "#ffdad6", "tertiary": "#735c00", "primary-container": "#1b3b2b", "surface-container": "#ebefea", "secondary-fixed-dim": "#e0c298", "inverse-surface": "#2c322e", "background": "#f6fbf5", "on-primary-container": "#83a590", "secondary": "#715b38", "surface-container-low": "#f0f5f0", "surface-variant": "#dfe4df", "on-surface-variant": "#424843", "on-primary-fixed": "#002113", "surface-container-lowest": "#ffffff", "surface-container-highest": "#dfe4df", "on-primary-fixed-variant": "#2d4d3c", "primary-fixed": "#c7ebd4", "primary-fixed-dim": "#abcfb8", "on-primary": "#ffffff", "outline": "#727973", "outline-variant": "#c1c8c2", "on-surface": "#181d1a", "on-tertiary-fixed": "#241a00", "surface-bright": "#f6fbf5", "error": "#ba1a1a", "on-secondary-container": "#78613e", "on-background": "#181d1a", "primary": "#032517", "on-secondary-fixed": "#281900", "surface": "#f6fbf5", "surface-dim": "#d7dbd6", "surface-container-high": "#e5e9e4", "inverse-primary": "#abcfb8", "on-secondary-fixed-variant": "#584323", "on-tertiary": "#ffffff", "on-error": "#ffffff" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-2xs": "0.25rem", "space-2xl": "3rem", "space-md": "1rem", "space-xs": "0.5rem", "gutter-mobile": "1rem", "gutter-desktop": "2rem", "space-4xl": "6rem", "space-xl": "2rem", "container-max": "1440px", "gutter-tablet": "1.5rem", "space-lg": "1.5rem", "space-sm": "0.75rem", "space-3xl": "4rem" }, "fontFamily": { "label-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "title-lg": [ "Plus Jakarta Sans" ], "title-md": [ "Plus Jakarta Sans" ], "headline-lg": [ "Playfair Display" ], "currency-lg": [ "Plus Jakarta Sans" ], "headline-lg-mobile": [ "Playfair Display" ], "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "headline-md": [ "Playfair Display" ], "display-xl": [ "Playfair Display" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Playfair Display" ], "display-xl-mobile": [ "Playfair Display" ] }, "fontSize": { "label-md": [ "13px", { "lineHeight": "18px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" } ], "title-lg": [ "18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "title-md": [ "16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "600" } ], "headline-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "500" } ], "currency-lg": [ "24px", { "lineHeight": "30px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "body-lg": [ "16px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ], "headline-md": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "display-xl": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" } ], "body-sm": [ "12px", { "lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "400" } ], "headline-sm": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ], "display-xl-mobile": [ "38px", { "lineHeight": "46px", "letterSpacing": "-0.01em", "fontWeight": "600" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><header class="fixed top-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="bg-primary-container text-on-primary-container px-space-md py-space-xs"><div class="max-w-container-max mx-auto px-gutter-desktop flex flex-wrap items-center justify-between gap-space-xs"><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary-fixed text-[16px]">info</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-container-lowest font-medium">Demo Environment</span><span class="hidden md:inline font-body-sm text-body-sm text-on-primary-container/90">— No real payments or guest reservations are processed. Portfolio Showcase.</span></div><div class="flex items-center gap-space-sm"><div class="inline-flex items-center bg-primary/40 rounded-full p-0.5"><span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Guest Portal</span><a class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full text-on-primary-container hover:text-surface-container-lowest transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact">Staff Suite</a></div></div></div></div><div class="h-20 bg-surface/90 backdrop-blur-xl"><div class="h-20 max-w-container-max mx-auto px-gutter-desktop flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-sm"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary font-title-md font-semibold after:scale-x-100"><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="home" href="{{ route('home') }}">Home</a><a aria-current="page" class="transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:transition-transform text-primary font-title-md font-semibold after:scale-x-100" data-path="stay" href="{{ route('stay') }}">Stay</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="amenities" href="{{ route('home') }}#amenities">Amenities</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="experiences" href="{{ route('home') }}#experiences">Experiences</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="gallery" href="{{ route('home') }}#gallery">Gallery</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="about" href="{{ route('home') }}#about">About</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="contact" href="{{ route('home') }}#contact">Contact</a></nav><div class="flex items-center gap-space-md"><a class="hidden xl:flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Staff Admin</a><div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile" class="w-8 h-8 rounded-full object-cover shadow-[0_1px_4px_rgba(0,0,0,0.08)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjSHtXOB-ilyK-dHVZP07RT4sENR5yAt84ZsmAhhxPbojWzuE15zMXsUJ9v_LhehisMVtVJBpDlyHfiBLooaeuTdTnHSLRkDtaP6jOxlMYZnPtd7k9SUYpYv9JLzcfHn0kvubnoBdNYSmzaXEsZWsWOn2swSdtCNpvT0sPlvyWbOClhiJWgLu745-Jbht8kBj_5BPBm11VfgoJxd1NMWmfBRQB3xsUhc_Esosj2LDp8-2gIQWBK9v8_A"><a class="hidden sm:inline font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">My Bookings</a></div><a class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors shadow-[0_2px_8px_rgba(27,59,43,0.15)]" data-path="book-stay" href="{{ route('home', ['room' => $room]) }}#booking">Book Your Stay</a></div></div></div></header><main class="w-full pt-20 bg-surface"><div class="flex flex-col w-full">
<!-- Subtle Ambient Glow Element -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none"></div>
<div class="absolute top-96 -right-32 w-80 h-80 rounded-full bg-primary-fixed/15 blur-3xl pointer-events-none"></div>
<div class="max-w-container-max mx-auto px-gutter-mobile md:px-gutter-desktop py-space-md">
<!-- Breadcrumb Navigation -->
<nav class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-space-sm">
<a class="hover:text-primary transition-colors" data-path="home" href="{{ route('home') }}">Home</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="font-semibold text-emerald-800 hover:text-emerald-950 transition-colors" data-path="stay" href="{{ route('stay') }}">← Back to all rooms</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-bold">{{ $room }}</span>
</nav>
<!-- Room Title & Badges Bar -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm pb-space-lg">
<div class="space-y-space-2xs">
<div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
            Signature Oceanfront Collection
          </div>
<h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">{{ $room }}</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Carmel Sanctuary Pavilion • Whispering Pines Coastal Ridge</p>
</div>
<div class="flex flex-wrap items-center gap-space-md">
<div class="flex items-center gap-space-xs bg-surface-container-lowest px-space-md py-space-xs rounded-xl shadow-sm">
<div class="flex items-center text-tertiary">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-title-md text-title-md text-primary ml-1 font-bold">4.95</span>
</div>
<span class="text-outline text-[12px]">•</span>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary underline decoration-outline-variant" href="#reviews">128 guest reviews</a>
<span class="hidden sm:inline-flex items-center gap-1 font-label-sm text-label-sm bg-secondary-container/50 text-on-secondary-container px-space-xs py-0.5 rounded-full font-semibold ml-space-xs">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
              Award of Excellence
            </span>
</div>
<div class="flex items-center gap-space-xs">
<button class="p-2.5 rounded-full bg-surface-container-lowest text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors shadow-sm" id="saveBtn" onclick="toggleSave()" title="Save to wish list">
<span class="material-symbols-outlined text-[20px]" id="saveIcon">favorite_border</span>
</button>
<button class="p-2.5 rounded-full bg-surface-container-lowest text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors shadow-sm" onclick="shareVilla()" title="Share sanctuary">
<span class="material-symbols-outlined text-[20px]">ios_share</span>
</button>
</div>
</div>
</div>
<!-- Architectural Image Showcase Gallery -->
<section class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-space-xs md:gap-space-sm h-[420px] md:h-[580px] rounded-3xl overflow-hidden shadow-md relative mb-space-2xl">
<!-- Hero Panoramic Main -->
<div class="md:col-span-2 md:row-span-2 relative group overflow-hidden cursor-pointer">
<img alt="Ocean View Villa panoramic perspective" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Wide panoramic architectural photography of an ultra luxury timber and glass villa perched over turquoise coastal waters surrounded by lush California coastal pine and swaying tropical palms under golden afternoon sunlight with ocean waves softly breaking below" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAu5F_UxIYn2PrNRJhYy8Ci4Y_yiVKbolG7oVWR8v-tvpDdT92WqL0OYR0b9zq4GUyO_5YQCB-MZrapvgeoqvX3aRT0SqCkLqe9IDN1Bh6ZFatuOc_AVa7S_w9q0JtKw_Pb89tt5LASmEaaZnaklkTj0By9kG7imO2Ng6EQZ1-a1p_tiE7_7UO7LFeeCOeczytT8SGs3dx4jIEGEQPZ3XwaycToZkKGPP9UYnpKetUuAd26ObRVfNo3pg">
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-40 group-hover:opacity-60 transition-opacity"></div>
<div class="absolute bottom-4 left-4 text-surface-container-lowest font-label-sm text-label-sm px-3 py-1.5 rounded-full bg-primary/70 backdrop-blur-md flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px]">verified</span>
            Direct Ocean Panorama • Pavilion 04
          </div>
</div>
<!-- Thumbnail 1: Master Bedroom -->
<div class="hidden md:block relative group overflow-hidden cursor-pointer">
<img alt="Master Bedroom Suite" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="High-end editorial photo of a master bedroom with a teak king canopy bed, crisp organic natural linen sheets, minimalist woven rattan textures, and floor-to-ceiling sliding glass doors opening to seaside mist" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9mblu7ogMfQKSrRJMXWDRyRIjRt3akOOLZIcIb6N3srWn9k6ueF8F5-7ZXlcxBt6lYA_lXru6XNoIbL_FxTzWy8MFPTQE57obSmturnQIYv24iPZAQX_s66MhOzz8IQAL4JNIrva5dwNsmY4NXAb4E8xZrBtR_Up1j9qdDQZP_JMfSzDRj79uAOXXMb0LfOK_Eq9FsDe8a0TuEPOZ6u0JGUZ67-IhcByjNdICp_BKi7HJZpxBMyN28A">
<div class="absolute bottom-2.5 left-2.5 bg-inverse-surface/60 text-inverse-on-surface backdrop-blur-sm font-label-sm text-label-sm px-2.5 py-1 rounded-md">
            Master King Bed
          </div>
</div>
<!-- Thumbnail 2: Terrace & Plunge Pool -->
<div class="hidden md:block relative group overflow-hidden cursor-pointer">
<img alt="Private Terrace and Plunge Pool" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Private sun-drenched cedar terrace featuring an integrated cobalt blue plunge pool, sleek natural stone sun loungers, and expansive Pacific Ocean views during gentle twilight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn15_uTEDMOhIIpZGmWR9f6noQ-x8eQ5rYfHQohjU8hDPeoTtFz7ZJaiRvy8uZmrNtcwpNTWVIbtiODssxfM6YBGgaE-I96Zf21gIa0ek1_y3WNo39tcgNKihBq8xgA6LRpCjG0-P-vRb5SRmGmgXIEHXypwQCRrbxnLvmR7cjZJdVZy1nNUibFdoNE5T3Qcxh2L2ckjya28pYp-d0KoykxATB1ohQXpRxHlb0upJ39VfYNZiFelcTPQ">
<div class="absolute bottom-2.5 left-2.5 bg-inverse-surface/60 text-inverse-on-surface backdrop-blur-sm font-label-sm text-label-sm px-2.5 py-1 rounded-md">
            Plunge Pool &amp; Deck
          </div>
</div>
<!-- Thumbnail 3: Terrazzo Bathroom -->
<div class="hidden md:block relative group overflow-hidden cursor-pointer">
<img alt="Terrazzo Soaking Tub" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Monolithic terrazzo stone master bathroom with deep matte white freestanding soaking tub, raw brass hardware, skylight illumination, and leafy coastal fern botanical garden backdrop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5KJiSF0yjq7uy-lE0xQhhKZxQf0pyfueupdsw3Fq2dbtbp5g2HKtycLeS-lVVEt5ZsJeJj9GgKrodu5TRDiUJscEb1rJ9F2GBun8IDwi_uUg9Vpz7_7GcHdrARdkOQIA4ao55mZpJE3ft-s7Pc2BSDXewPn56a49aUO6EgJpMGyn5LXwPOomLY6gUA-h4MIGlcPphTYjbtECJZUJYohpb9egTRGs3DIFkPiGTABMrb_ccDOv6Cyg-Og">
<div class="absolute bottom-2.5 left-2.5 bg-inverse-surface/60 text-inverse-on-surface backdrop-blur-sm font-label-sm text-label-sm px-2.5 py-1 rounded-md">
            Stone Spa Tub
          </div>
</div>
<!-- Thumbnail 4: Outdoor Sunset Lounge -->
<div class="hidden md:block relative group overflow-hidden cursor-pointer">
<img alt="Outdoor Sunset Pavilion" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Cozy outdoor sunken lounge with architectural fire pit, plush olive-green weather cushions, and panoramic Pacific sunset with rose-gold light bouncing off teak decking" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn2Lq-MmjYk1jl-d-Fel-xfEoc-vWE8JN_X2Pz7Q1-RfTiy6VG9NwlcFy_zYY_snMV9kBOiA58EPgAkYzl8w1gRSxcHfaLhCslu0HZx2fUSFa0TbqMnB9caNKgGCMlZrwfZxKcrjTBHSHzcJQchWsF9_f_95O38yqbhvFcKziLKezQRocisM_YC7uotBsN1Lw-jwJ-aygwW6D2T6WHtK5hu-gMrJqCu4ozj2c9vcDSoGULlb3fwKWTZQ">
<div class="absolute bottom-2.5 left-2.5 bg-inverse-surface/60 text-inverse-on-surface backdrop-blur-sm font-label-sm text-label-sm px-2.5 py-1 rounded-md">
            Sunset Lounge
          </div>
</div>
<!-- Floating "View All Photos" Button -->
<button class="absolute bottom-4 right-4 z-10 flex items-center gap-space-xs bg-surface-container-lowest/95 hover:bg-surface-container-lowest text-primary font-label-md text-label-md px-space-md py-space-xs rounded-full shadow-lg backdrop-blur-md transition-all duration-200 hover:scale-105" onclick="openGalleryModal()">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
<span>View All 24 Photos</span>
</button>
</section>
<!-- Main Two-Column Architectural Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl lg:gap-space-2xl items-start">
<!-- Left Column: Rich Editorial Suite Story & Specs -->
<div class="lg:col-span-8 space-y-space-2xl">
<!-- Room Key Specs Ribbon -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-xs bg-surface-container-low p-space-sm rounded-2xl">
<div class="flex items-center gap-space-xs p-space-xs">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">square_foot</span>
</div>
<div class="leading-tight">
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Spatial Plan</div>
<div class="font-title-md text-title-md text-on-surface font-semibold">85 m² / 915 ft²</div>
</div>
</div>
<div class="flex items-center gap-space-xs p-space-xs">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">group</span>
</div>
<div class="leading-tight">
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Capacity</div>
<div class="font-title-md text-title-md text-on-surface font-semibold">Up to 3 Guests</div>
</div>
</div>
<div class="flex items-center gap-space-xs p-space-xs">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">bed</span>
</div>
<div class="leading-tight">
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Bedding</div>
<div class="font-title-md text-title-md text-on-surface font-semibold">1 King + Daybed</div>
</div>
</div>
<div class="flex items-center gap-space-xs p-space-xs">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">water</span>
</div>
<div class="leading-tight">
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Orientation</div>
<div class="font-title-md text-title-md text-on-surface font-semibold">Direct Ocean</div>
</div>
</div>
</div>
<!-- Editorial Room Description -->
<div class="space-y-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Spatial Narrative</span>
<span class="h-0.5 w-12 bg-secondary-container"></span>
</div>
<h2 class="font-headline-md text-headline-md text-primary">Tactile Modernity Meets Oceanic Serenity</h2>
<div class="space-y-space-sm font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
<p>
                Perched on the prime seaward promontory of the resort, the <strong class="text-primary font-semibold">Ocean View Villa</strong> invites uninterrupted immersion into coastal light and quiet rhythms. Conceived by master craftsmen using sustainably harvested teak, native limestone, and warm textured linen, each contour mirrors the windswept headlands outside.
              </p>
<p>
                Effortless floor-to-ceiling acoustic glass sliders dissolve the barrier between your serene living sanctuary and the Pacific breeze. Wake beneath an artisanal four-poster canopy bed to the soft cadence of surf, linger on your private cantilevered timber deck with fresh morning pour-over, and soak in an oversized monolithic terrazzo tub as the sun recedes below the horizon.
              </p>
</div>
</div>
<!-- Categorized Amenities Matrix -->
<div class="space-y-space-lg bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm">
<div class="flex items-center justify-between pb-space-xs">
<div>
<h3 class="font-headline-sm text-headline-sm text-primary">Villa Amenities &amp; Rituals</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Thoughtfully curated comforts designed for unhurried restorative living.</p>
</div>
<span class="material-symbols-outlined text-secondary text-[28px]">spa</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<!-- Category 1: Comfort & Space -->
<div class="space-y-space-sm p-space-md rounded-2xl bg-surface-container-low">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-[20px] text-secondary">king_bed</span>
<h4 class="font-title-md text-title-md font-semibold">Comfort &amp; Space</h4>
</div>
<ul class="space-y-space-xs font-body-md text-body-md text-on-surface-variant">
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>King pillow-top organic mattress</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>400-thread Egyptian cotton linen</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Whisper-quiet dual climate control A/C</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Automated blackout linen drapery</span>
</li>
</ul>
</div>
<!-- Category 2: Bathroom & Wellness -->
<div class="space-y-space-sm p-space-md rounded-2xl bg-surface-container-low">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-[20px] text-secondary">bathtub</span>
<h4 class="font-title-md text-title-md font-semibold">Bathroom &amp; Wellness</h4>
</div>
<ul class="space-y-space-xs font-body-md text-body-md text-on-surface-variant">
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Deep freestanding terrazzo soaking tub</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Dual indoor &amp; al-fresco rain showers</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Organic botanical cedar &amp; cypress toiletries</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Heavyweight waffle-knit bathrobes &amp; slippers</span>
</li>
</ul>
</div>
<!-- Category 3: Connectivity & Tech -->
<div class="space-y-space-sm p-space-md rounded-2xl bg-surface-container-low">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-[20px] text-secondary">wifi</span>
<h4 class="font-title-md text-title-md font-semibold">Connectivity &amp; Media</h4>
</div>
<ul class="space-y-space-xs font-body-md text-body-md text-on-surface-variant">
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Ultra high-speed Wi-Fi 6 (300 Mbps)</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>55" 4K OLED Smart TV with casting suite</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Custom brass Marshall Bluetooth sound system</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Bedside USB-C fast charging stations</span>
</li>
</ul>
</div>
<!-- Category 4: Refreshments & Cellar -->
<div class="space-y-space-sm p-space-md rounded-2xl bg-surface-container-low">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-[20px] text-secondary">coffee</span>
<h4 class="font-title-md text-title-md font-semibold">Refreshments &amp; Cellar</h4>
</div>
<ul class="space-y-space-xs font-body-md text-body-md text-on-surface-variant">
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Nespresso Creatista with specialty roast pods</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Artisanal rare herbal loose-leaf tea atelier</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Fully curated artisanal gourmet minibar</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Dual-zone climate wine cellar cooler</span>
</li>
</ul>
</div>
</div>
</div>
<!-- Included In Every Stay: Privileges Card -->
<div class="bg-primary-container text-on-primary-container p-space-xl rounded-3xl shadow-sm relative overflow-hidden">
<div class="absolute right-0 top-0 w-64 h-64 bg-surface-tint/20 rounded-full blur-2xl pointer-events-none"></div>
<div class="flex items-center gap-space-xs text-secondary-fixed mb-space-xs">
<span class="material-symbols-outlined text-[22px]">auto_awesome</span>
<span class="font-label-sm text-label-sm uppercase tracking-widest font-bold">Complimentary Privileges</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-surface-container-lowest mb-space-md">Included in Every Stay</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md relative z-10">
<div class="flex items-start gap-space-sm bg-primary/40 p-space-sm rounded-xl">
<span class="material-symbols-outlined text-secondary-fixed text-[24px] mt-0.5">restaurant</span>
<div>
<h5 class="font-title-md text-title-md text-surface-container-lowest font-medium">Daily À la Carte Breakfast</h5>
<p class="font-body-sm text-body-sm text-on-primary-container/80">Farm-to-table breakfast served in your pavilion or at Coastal Hearth.</p>
</div>
</div>
<div class="flex items-start gap-space-sm bg-primary/40 p-space-sm rounded-xl">
<span class="material-symbols-outlined text-secondary-fixed text-[24px] mt-0.5">self_improvement</span>
<div>
<h5 class="font-title-md text-title-md text-surface-container-lowest font-medium">Sunset Ocean Yoga Sessions</h5>
<p class="font-body-sm text-body-sm text-on-primary-container/80">Daily twilight meditation and gentle restorative flow on the bluff deck.</p>
</div>
</div>
<div class="flex items-start gap-space-sm bg-primary/40 p-space-sm rounded-xl">
<span class="material-symbols-outlined text-secondary-fixed text-[24px] mt-0.5">kayaking</span>
<div>
<h5 class="font-title-md text-title-md text-surface-container-lowest font-medium">Kayaks &amp; Paddleboards</h5>
<p class="font-body-sm text-body-sm text-on-primary-container/80">Private beach cove access with complimentary ocean watercraft gear.</p>
</div>
</div>
<div class="flex items-start gap-space-sm bg-primary/40 p-space-sm rounded-xl">
<span class="material-symbols-outlined text-secondary-fixed text-[24px] mt-0.5">nutrition</span>
<div>
<h5 class="font-title-md text-title-md text-surface-container-lowest font-medium">Welcome Tropical Fruit Bowl</h5>
<p class="font-body-sm text-body-sm text-on-primary-container/80">Hand-selected seasonal exotic fruits &amp; chilled sparkling spring water.</p>
</div>
</div>
</div>
</div>
<!-- House Rules & Policies -->
<div class="space-y-space-md p-space-lg rounded-2xl bg-surface-container-low">
<h4 class="font-title-lg text-title-lg text-primary font-semibold">Sanctuary Policies &amp; Guidelines</h4>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-space-md font-body-md text-body-md text-on-surface-variant">
<div>
<span class="font-label-sm text-label-sm uppercase text-on-surface font-semibold block">Check-in</span>
<span>3:00 PM • Early upon request</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase text-on-surface font-semibold block">Check-out</span>
<span>11:00 AM • Late valet available</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase text-on-surface font-semibold block">Smoke-Free</span>
<span>100% Non-smoking pavilion</span>
</div>
<div>
<span class="font-label-sm text-label-sm uppercase text-on-surface font-semibold block">Flex Policy</span>
<span>Full refund 48h prior to arrival</span>
</div>
</div>
</div>
</div>
<!-- Right Column: Sticky Reservation Engine Card -->
<div class="lg:col-span-4 lg:sticky lg:top-28">
<div class="bg-surface-container-lowest p-space-lg md:p-space-xl rounded-3xl shadow-xl space-y-space-md relative">
<!-- Rate Header -->
<div class="flex items-baseline justify-between pb-space-xs">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block">Standard Rate</span>
<div class="flex items-baseline gap-1">
<span class="font-currency-lg text-currency-lg text-primary font-bold tracking-tight">$780</span>
<span class="font-body-md text-body-md text-on-surface-variant">/ night</span>
</div>
</div>
<div class="text-right">
<span class="inline-flex items-center px-2 py-0.5 rounded-full font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed font-semibold">
                  Guaranteed Best Direct Rate
                </span>
</div>
</div>
<!-- Booking Parameters Selector Box -->
<div id="booking" class="scroll-mt-36 bg-surface-container-low rounded-2xl p-space-sm space-y-space-xs">
<!-- Dates Picker -->
<button id="detailsDateTrigger" type="button" class="w-full bg-surface-container-lowest p-space-xs rounded-xl text-left cursor-pointer hover:bg-surface-bright transition-colors">
<div class="flex items-center justify-between text-on-surface-variant mb-1"><span class="font-label-sm text-label-sm uppercase font-semibold text-primary">Selected Dates</span><span id="detailsDateHint" class="font-label-sm text-label-sm text-secondary font-semibold">Choose dates</span></div>
<div class="flex items-center gap-space-xs font-title-md text-title-md text-primary font-medium"><span class="material-symbols-outlined text-[18px] text-secondary">calendar_today</span><span id="detailsDateLabel">Select check-in and check-out</span><span class="text-outline-variant">→</span></div>
</button><!-- Guests Picker -->
<div class="bg-surface-container-lowest p-space-xs rounded-xl flex items-center justify-between">
<div><span class="font-label-sm text-label-sm uppercase font-semibold text-primary block mb-0.5">Guests</span><span id="detailsGuestLabel" class="font-title-md text-title-md text-primary font-medium">Choose guest count</span></div>
<button id="detailsGuestTrigger" type="button" class="text-secondary hover:text-primary p-1" aria-label="Edit guests"><span class="material-symbols-outlined text-[20px]">edit</span></button>
</div><!-- Price Breakdown Calculation Grid -->
<div id="detailsExperienceList" class="hidden rounded-xl bg-amber-50 p-3 text-sm text-emerald-950"><p class="font-bold">Added experiences</p><ul class="mt-1 space-y-2"></ul><a class="mt-3 inline-block font-semibold text-emerald-800 underline" href="{{ route('home', ['room' => $room]) }}#experiences">+ Add another experience</a></div>
<div class="space-y-space-xs font-body-md text-body-md text-on-surface-variant pt-space-xs">
<div class="flex items-center justify-between">
<span id="detailsNightLine">4 nights × ${{ number_format(config('rooms.'.$room.'.price', 780)) }}</span>
<span id="detailsRoomTotal" class="text-on-surface font-medium">$3,120</span>
</div>
<div class="flex items-center justify-between">
<span class="flex items-center gap-1">
                  Resort Service &amp; Wellness Fee
                  <span class="material-symbols-outlined text-[15px] text-outline cursor-help" title="Includes high-speed Wi-Fi, bluff yoga, hydrotherapy pools, and valet.">info</span>
</span>
<span class="text-on-surface font-medium">$160</span>
</div>
<div class="flex items-center justify-between">
<span>Estimated Taxes (10%)</span>
<span id="detailsTaxTotal" class="text-on-surface font-medium">$328</span>
</div>
<!-- Subtle Decorative Divider -->
<div class="h-px bg-surface-container my-space-xs"></div>
<div class="flex items-baseline justify-between pt-space-2xs">
<div>
<span class="font-title-lg text-title-lg text-primary font-bold">Total Estimated</span>
<span class="block font-body-sm text-body-sm text-on-surface-variant">All taxes &amp; fees accounted for</span>
</div>
<div class="text-right">
<span id="detailsGrandTotal" class="font-currency-lg text-currency-lg text-primary font-bold">$3,608</span>
</div>
</div>
</div>
<div id="detailsDateModal" class="fixed inset-0 z-[70] hidden items-center justify-center bg-primary/60 p-4" role="dialog" aria-modal="true" aria-labelledby="detailsDateModalTitle">
  <div class="w-full max-w-md rounded-2xl bg-surface-container-lowest p-6 shadow-2xl">
    <div class="mb-4 flex items-center justify-between"><h2 id="detailsDateModalTitle" class="font-headline-md text-headline-md text-primary">Choose your dates</h2><button type="button" data-close-details-modal class="rounded-full px-3 py-1 text-2xl text-on-surface-variant hover:bg-surface-container">×</button></div>
    <div class="grid gap-4 sm:grid-cols-2"><label class="text-sm font-semibold text-primary">Check-in<input id="modalCheckIn" type="date" min="{{ now()->format('Y-m-d') }}" class="mt-1 w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3"></label><label class="text-sm font-semibold text-primary">Check-out<input id="modalCheckOut" type="date" min="{{ now()->addDay()->format('Y-m-d') }}" class="mt-1 w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3"></label></div>
    <p id="detailsDateError" class="mt-3 hidden text-sm font-semibold text-red-700">Please choose a valid check-out date after check-in.</p><button id="saveDetailsDates" type="button" class="mt-5 w-full rounded-xl bg-primary-container px-5 py-3 font-label-md text-label-md font-bold text-surface-container-lowest hover:bg-primary">Save dates</button>
  </div>
</div>
<div id="detailsGuestModal" class="fixed inset-0 z-[70] hidden items-center justify-center bg-primary/60 p-4" role="dialog" aria-modal="true" aria-labelledby="detailsGuestModalTitle">
  <div class="w-full max-w-md rounded-2xl bg-surface-container-lowest p-6 shadow-2xl"><div class="mb-4 flex items-center justify-between"><h2 id="detailsGuestModalTitle" class="font-headline-md text-headline-md text-primary">Choose guest count</h2><button type="button" data-close-details-modal class="rounded-full px-3 py-1 text-2xl text-on-surface-variant hover:bg-surface-container">×</button></div>
    <div class="space-y-3"><div class="flex items-center justify-between rounded-xl bg-surface-container-low p-4"><span><strong>Adults</strong><small class="block text-on-surface-variant">Ages 13+</small></span><div class="flex items-center gap-4"><button id="modalAdultsDec" type="button" class="h-9 w-9 rounded-full bg-surface-container-lowest">−</button><span id="modalAdults" class="font-bold">2</span><button id="modalAdultsInc" type="button" class="h-9 w-9 rounded-full bg-surface-container-lowest">+</button></div></div><div class="flex items-center justify-between rounded-xl bg-surface-container-low p-4"><span><strong>Children</strong><small class="block text-on-surface-variant">Ages 0–12</small></span><div class="flex items-center gap-4"><button id="modalChildrenDec" type="button" class="h-9 w-9 rounded-full bg-surface-container-lowest">−</button><span id="modalChildren" class="font-bold">0</span><button id="modalChildrenInc" type="button" class="h-9 w-9 rounded-full bg-surface-container-lowest">+</button></div></div></div>
    <p class="mt-4 rounded-xl bg-primary-fixed px-4 py-3 text-sm text-on-primary-fixed">Maximum for this room: {{ config('rooms.'.$room.'.capacity', 2) }} guests.</p><p id="detailsGuestError" class="mt-3 hidden text-sm font-semibold text-red-700">This room cannot accommodate more guests.</p><button id="saveDetailsGuests" type="button" class="mt-5 w-full rounded-xl bg-primary-container px-5 py-3 font-label-md text-label-md font-bold text-surface-container-lowest hover:bg-primary">Save guest count</button>
  </div>
</div>
<!-- Reservation CTAs -->
<div class="space-y-space-xs pt-space-xs">
<form id="roomReservationForm" action="{{ route('booking.start') }}" method="POST">
@csrf
<input type="hidden" name="room" value="{{ $room }}"><input type="hidden" name="check_in" id="detailsCheckIn"><input type="hidden" name="check_out" id="detailsCheckOut"><input type="hidden" name="guests" id="detailsGuests"><input type="hidden" name="experiences" id="detailsExperiences">
<button class="w-full flex items-center justify-center gap-space-xs bg-primary-container hover:bg-primary text-surface-container-lowest font-label-md text-label-md py-3.5 px-space-lg rounded-xl shadow-md hover:shadow-lg transition-all duration-200" type="submit">
<span class="material-symbols-outlined text-[20px]">key</span>
<span>Reserve This Room</span>
</button></form>
<p class="text-center font-body-sm text-body-sm text-on-surface-variant/80">
                You won't be charged yet. Demo Environment.
              </p>
</div>
<!-- Trust Badge Element -->
<div class="bg-surface-container-low/60 rounded-xl p-space-xs flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">lock</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">
                Discreet 256-bit encrypted reservation portal.
              </span>
</div>
</div>
</div>
</div>
<!-- Similar Recommended Rooms Section -->
<section class="mt-space-4xl pt-space-2xl">
<div class="flex flex-col sm:flex-row sm:items-end justify-between mb-space-xl">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Alternative Sanctuaries</span>
<h2 class="font-headline-md text-headline-md text-primary">Similar Recommended Accommodations</h2>
</div>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors mt-space-xs sm:mt-0" data-path="stay" href="{{ route('stay') }}">
<span>Explore full collection</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-xl">
<!-- Recommended Room 1 -->
<div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col">
<div class="relative h-64 overflow-hidden">
<img alt="Poolside Garden Suite" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Modern luxury poolside garden suite bathed in morning mist with private plunge hot tub framed by mature Japanese maples, wild jasmine, and slate stepping stones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBo8wQoEwOgbrVNbmMFp6m-QCzZKeZE-PnbQSLdutlkcGJKhSfFmHppOZcI3oQLS8TOBd3uwX68FtKm_142qzKzBjPvsy2D25X3TUZSibg9LF1979hx8zJhNTaKWtf8H8gvbDljrvoeD0s5RgHSwlQ5QdMX_hs2Gdq0yiO94j8VZHfDrGQ267JB3W9JfvRhw0xN_NMHuB8ccRTNlzOJPmqtQB3NCrjr5VXrtgi-eBFoWByto6G_wwhEfQ">
<div class="absolute top-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1 rounded-full font-label-sm text-label-sm text-primary font-semibold">
                Garden &amp; Hydrotherapy
              </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-1">
<span>Suite 12 • Lower Meadow</span>
<span class="flex items-center text-tertiary"><span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span> 4.92</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors">Poolside Garden Suite</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 line-clamp-2">
                  Lush botanical enclave featuring private hot springs soaking terrace, outdoor daybed canopy, and direct walkway to stone thermal pools.
                </p>
</div>
<div class="flex items-center justify-between pt-space-sm">
<div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$640</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
<a class="inline-flex items-center gap-1 font-label-md text-label-md px-space-md py-2 rounded-full bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest transition-colors" data-path="stay" href="{{ route('stay') }}">
<span>View Details</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</div>
<!-- Recommended Room 2 -->
<div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col">
<div class="relative h-64 overflow-hidden">
<img alt="Private Cliffside Pool Villa" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="Spectacular ultra exclusive luxury private cliffside villa with cantilevered glass infinity pool jutting out over dramatic ocean breakers and coastal cliffs with outdoor fireplace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAXGnKqDfL5ihzZlONq1jj9yWbcLRmPSoLqv5DxbH0I6C7CNgEheNuUDE5N3SQkdf6ZjuYoJBy8yBy1kIZ-HiPV-BVF2pZCa1P4VyTTj4wIG8sQgVipvAQvIUSsXkyE_VYR8QFjoh0Ee3bcGQ7MEu7rorCjoiFXxNXB_Wbh74b8P-6H0GuYIrcwwYiN9MgmqLeNaAEHgu7AMXdqk-GVYkRWbpFaH_yC4wChvgwcSCQIcnJ9iE2JgahYg">
<div class="absolute top-3 right-3 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-sm text-label-sm font-semibold">
                Grand Reserve
              </div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between space-y-space-md">
<div>
<div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider mb-1">
<span>Pavilion 01 • Ocean Ridge</span>
<span class="flex items-center text-tertiary"><span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span> 4.99</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors">Private Cliffside Pool Villa</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 line-clamp-2">
                  Our most secluded pavilion with full infinity pool suspended above dramatic surf, dedicated private chef pantry, and curated art collection.
                </p>
</div>
<div class="flex items-center justify-between pt-space-sm">
<div>
<span class="font-currency-lg text-currency-lg text-primary font-bold">$1,250</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ night</span>
</div>
<a class="inline-flex items-center gap-1 font-label-md text-label-md px-space-md py-2 rounded-full bg-surface-container text-primary hover:bg-primary hover:text-surface-container-lowest transition-colors" data-path="stay" href="{{ route('stay') }}">
<span>View Details</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- Interactive Client-side Scripting -->
<script>
    function toggleSave() {
      const icon = document.getElementById('saveIcon');
      if (icon.innerText === 'favorite_border') {
        icon.innerText = 'favorite';
        icon.classList.add('text-error');
        icon.style.fontVariationSettings = "'FILL' 1";
      } else {
        icon.innerText = 'favorite_border';
        icon.classList.remove('text-error');
        icon.style.fontVariationSettings = "'FILL' 0";
      }
    }

    function shareVilla() {
      if (navigator.share) {
        navigator.share({
          title: 'Ocean View Villa - ResortFlow Sanctuary',
          text: 'Explore the Ocean View Villa at ResortFlow, Carmel-by-the-Sea.',
          url: window.location.href
        }).catch(() => {});
      } else {
        alert('Ocean View Villa link copied to clipboard.');
      }
    }

    function openGalleryModal() {
      alert('Viewing all 24 curated photographs of Ocean View Villa.');
    }
    document.addEventListener('DOMContentLoaded', function () {
      const dateModal = document.getElementById('detailsDateModal');
      const guestModal = document.getElementById('detailsGuestModal');
      const modalIn = document.getElementById('modalCheckIn'), modalOut = document.getElementById('modalCheckOut');
      const roomCapacity = {{ config('rooms.'.$room.'.capacity', 2) }};
      let modalAdults = 2, modalChildren = 0;
      const selectedExperiences = JSON.parse(localStorage.getItem('resortflow_experiences') || '[]');
      const money = (value) => '$' + Math.round(value).toLocaleString('en-US');
      function openModal(modal) { modal.classList.remove('hidden'); modal.classList.add('flex'); }
      function closeModals() { [dateModal, guestModal].forEach(m => { m.classList.add('hidden'); m.classList.remove('flex'); }); }
      function syncSummary() {
        if (modalIn.value && modalOut.value) {
          const inDate = new Date(`${modalIn.value}T12:00:00`), outDate = new Date(`${modalOut.value}T12:00:00`);
          const nights = Math.max(0, Math.round((outDate - inDate) / 86400000));
          document.getElementById('detailsDateLabel').textContent = `${inDate.toLocaleDateString(undefined, {month:'short', day:'numeric', year:'numeric'})} → ${outDate.toLocaleDateString(undefined, {month:'short', day:'numeric', year:'numeric'})}`;
          document.getElementById('detailsDateHint').textContent = `${nights} night${nights === 1 ? '' : 's'}`;
          document.getElementById('detailsNightLine').textContent = `${nights} night${nights === 1 ? '' : 's'} × ${{ number_format(config('rooms.'.$room.'.price', 780)) }}`;
          const roomTotal = nights * {{ config('rooms.'.$room.'.price', 780) }}, fee = 40 * nights, tax = Math.round((roomTotal + fee) * .1), total = roomTotal + fee + tax;
          document.getElementById('detailsRoomTotal').textContent = money(roomTotal); document.getElementById('detailsTaxTotal').textContent = money(tax); document.getElementById('detailsGrandTotal').textContent = money(total);
        }
        document.getElementById('detailsGuestLabel').textContent = `${modalAdults} Adult${modalAdults === 1 ? '' : 's'}${modalChildren ? `, ${modalChildren} Child${modalChildren === 1 ? '' : 'ren'}` : ''}`;
        document.getElementById('detailsCheckIn').value = modalIn.value; document.getElementById('detailsCheckOut').value = modalOut.value; document.getElementById('detailsGuests').value = modalAdults + modalChildren;
        document.getElementById('detailsExperiences').value = JSON.stringify(selectedExperiences);
        const experienceBox = document.getElementById('detailsExperienceList');
        experienceBox.classList.toggle('hidden', selectedExperiences.length === 0);
        experienceBox.querySelector('ul').innerHTML = selectedExperiences.map(name => `<li class="flex items-center justify-between gap-3"><span>• ${name}</span><button type="button" class="details-remove-experience rounded-full px-2 py-1 text-xs font-bold text-red-700 hover:bg-red-100" data-remove-experience="${name}">Remove</button></li>`).join('');
        experienceBox.querySelectorAll('.details-remove-experience').forEach(button => button.onclick = () => { const index = selectedExperiences.indexOf(button.dataset.removeExperience); if (index >= 0) selectedExperiences.splice(index, 1); localStorage.setItem('resortflow_experiences', JSON.stringify(selectedExperiences)); syncSummary(); });
      }
      document.getElementById('detailsDateTrigger').onclick = () => { modalIn.value ||= new Date(Date.now() + 86400000).toISOString().slice(0,10); modalOut.value ||= new Date(Date.now() + 5*86400000).toISOString().slice(0,10); openModal(dateModal); };
      document.getElementById('detailsGuestTrigger').onclick = () => openModal(guestModal);
      document.querySelectorAll('[data-close-details-modal]').forEach(button => button.onclick = closeModals);
      document.getElementById('saveDetailsDates').onclick = () => { const error = document.getElementById('detailsDateError'); const valid = modalIn.value && modalOut.value > modalIn.value; error.classList.toggle('hidden', valid); if (valid) { syncSummary(); closeModals(); } };
      function renderGuests() { document.getElementById('modalAdults').textContent = modalAdults; document.getElementById('modalChildren').textContent = modalChildren; document.getElementById('detailsGuestError').classList.toggle('hidden', modalAdults + modalChildren <= roomCapacity); }
      document.getElementById('modalAdultsDec').onclick = () => { modalAdults = Math.max(1, modalAdults - 1); renderGuests(); };
      document.getElementById('modalAdultsInc').onclick = () => { if (modalAdults + modalChildren < roomCapacity) modalAdults++; renderGuests(); };
      document.getElementById('modalChildrenDec').onclick = () => { modalChildren = Math.max(0, modalChildren - 1); renderGuests(); };
      document.getElementById('modalChildrenInc').onclick = () => { if (modalAdults + modalChildren < roomCapacity) modalChildren++; renderGuests(); };
      document.getElementById('saveDetailsGuests').onclick = () => { if (modalAdults + modalChildren <= roomCapacity) { syncSummary(); closeModals(); } };
      document.getElementById('roomReservationForm').onsubmit = (event) => { if (!modalIn.value || !modalOut.value || modalOut.value <= modalIn.value) { event.preventDefault(); openModal(dateModal); } else if (modalAdults + modalChildren > roomCapacity) { event.preventDefault(); openModal(guestModal); } };
      syncSummary(); renderGuests();
    });
  </script>
</div></main><footer class="w-full bg-surface-container-low text-on-surface mt-space-3xl"><div class="max-w-container-max mx-auto px-gutter-desktop pt-space-3xl pb-space-2xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl"><div class="lg:col-span-2 space-y-space-md pr-space-xl"><div class="flex items-center gap-space-xs"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><p class="font-body-md text-body-md text-on-surface-variant max-w-md">An architectural sanctuary celebrating quiet hospitality, coastal pine landscapes, and curated alpine wellness rituals.</p><div class="pt-space-xs space-y-space-2xs text-on-surface-variant font-body-sm text-body-sm"><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">pin_drop</span> 4400 Whispering Pines Way, Carmel-by-the-Sea, CA 93923</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">call</span> +1 (831) 555-0198 • Concierge Direct</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">mail</span> concierge@resortflow.internal</p></div></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary &amp; Stays</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Coastal Pavilions</a></li><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Forest Canopy Suites</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">The Stone Thermal Baths</a></li><li><a class="hover:text-primary transition-colors" data-path="experiences" href="{{ route('home') }}#experiences">Private Wine Library</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">Artisanal Dining Atelier</a></li></ul></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Guest Privileges</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">Guest Itinerary Portal</a></li><li><a class="hover:text-primary transition-colors" data-path="book-stay" href="{{ route('home', ['room' => $room]) }}#booking">Tailored Stay Requests</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Chauffeur &amp; Helipad Transfer</a></li><li><a class="hover:text-primary transition-colors" data-path="about" href="{{ route('home') }}#about">Sustainability Charter</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Resort Policies &amp; FAQ</a></li></ul></div><div class="space-y-space-md"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Gazette &amp; Chronicles</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Receive seasonal monographs, private reserve invitations, and architectural updates.</p><div class="flex flex-col gap-space-xs"><div class="flex items-center rounded-lg bg-surface-container-lowest px-space-sm py-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><input class="w-full bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none" placeholder="Enter your correspondence email" type="email"><button class="text-primary hover:text-secondary transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">arrow_forward</span></button></div><span class="font-label-sm text-label-sm text-on-surface-variant/70">Unsubscribe at your pleasure. Discretion guaranteed.</span></div><div class="inline-flex items-center gap-space-xs rounded-full bg-surface-container px-space-sm py-1"><span class="material-symbols-outlined text-secondary text-[16px]">military_tech</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Forbes Five-Star Laureate 2024</span></div></div></div><div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm"><div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-secondary-container"></span><span>© 2025 ResortFlow Hospitality Group. Architectural Quietude.</span></div><div class="flex items-center gap-space-lg font-label-sm text-label-sm"><span>Pacific Standard Time: 09:42 AM</span><span class="hidden md:inline">•</span><span>Elevation: 320m Above Carmel Bay</span></div></div></div></footer><script src="{{ asset('js/app.js') }}"></script></body></html>
