<!DOCTYPE html><html lang="en"><head><title>{{ config('app.name', 'ResortFlow') }} · Check Availability</title><link rel="stylesheet" href="{{ asset('css/app.css') }}"><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><link href="https://fonts.googleapis.com" rel="preconnect"><link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"><link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { "colors": { "secondary-container": "#fddeb2", "surface-tint": "#456553", "secondary-fixed": "#fddeb2", "on-tertiary-fixed-variant": "#574500", "tertiary-fixed-dim": "#e9c349", "on-error-container": "#93000a", "inverse-on-surface": "#edf2ed", "on-tertiary-container": "#4e3d00", "tertiary-fixed": "#ffe088", "on-secondary": "#ffffff", "tertiary-container": "#cba72f", "error-container": "#ffdad6", "tertiary": "#735c00", "primary-container": "#1b3b2b", "surface-container": "#ebefea", "secondary-fixed-dim": "#e0c298", "inverse-surface": "#2c322e", "background": "#f6fbf5", "on-primary-container": "#83a590", "secondary": "#715b38", "surface-container-low": "#f0f5f0", "surface-variant": "#dfe4df", "on-surface-variant": "#424843", "on-primary-fixed": "#002113", "surface-container-lowest": "#ffffff", "surface-container-highest": "#dfe4df", "on-primary-fixed-variant": "#2d4d3c", "primary-fixed": "#c7ebd4", "primary-fixed-dim": "#abcfb8", "on-primary": "#ffffff", "outline": "#727973", "outline-variant": "#c1c8c2", "on-surface": "#181d1a", "on-tertiary-fixed": "#241a00", "surface-bright": "#f6fbf5", "error": "#ba1a1a", "on-secondary-container": "#78613e", "on-background": "#181d1a", "primary": "#032517", "on-secondary-fixed": "#281900", "surface": "#f6fbf5", "surface-dim": "#d7dbd6", "surface-container-high": "#e5e9e4", "inverse-primary": "#abcfb8", "on-secondary-fixed-variant": "#584323", "on-tertiary": "#ffffff", "on-error": "#ffffff" }, "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, "spacing": { "space-2xs": "0.25rem", "space-2xl": "3rem", "space-md": "1rem", "space-xs": "0.5rem", "gutter-mobile": "1rem", "gutter-desktop": "2rem", "space-4xl": "6rem", "space-xl": "2rem", "container-max": "1440px", "gutter-tablet": "1.5rem", "space-lg": "1.5rem", "space-sm": "0.75rem", "space-3xl": "4rem" }, "fontFamily": { "label-md": [ "Plus Jakarta Sans" ], "body-md": [ "Plus Jakarta Sans" ], "title-lg": [ "Plus Jakarta Sans" ], "title-md": [ "Plus Jakarta Sans" ], "headline-lg": [ "Playfair Display" ], "currency-lg": [ "Plus Jakarta Sans" ], "headline-lg-mobile": [ "Playfair Display" ], "body-lg": [ "Plus Jakarta Sans" ], "label-sm": [ "Plus Jakarta Sans" ], "headline-md": [ "Playfair Display" ], "display-xl": [ "Playfair Display" ], "body-sm": [ "Plus Jakarta Sans" ], "headline-sm": [ "Playfair Display" ], "display-xl-mobile": [ "Playfair Display" ] }, "fontSize": { "label-md": [ "13px", { "lineHeight": "18px", "letterSpacing": "0.02em", "fontWeight": "600" } ], "body-md": [ "14px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" } ], "title-lg": [ "18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" } ], "title-md": [ "16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "600" } ], "headline-lg": [ "40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "500" } ], "currency-lg": [ "24px", { "lineHeight": "30px", "letterSpacing": "-0.02em", "fontWeight": "700" } ], "headline-lg-mobile": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "body-lg": [ "16px", { "lineHeight": "26px", "letterSpacing": "0em", "fontWeight": "400" } ], "label-sm": [ "11px", { "lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700" } ], "headline-md": [ "28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "500" } ], "display-xl": [ "56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" } ], "body-sm": [ "12px", { "lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "400" } ], "headline-sm": [ "22px", { "lineHeight": "30px", "letterSpacing": "0em", "fontWeight": "500" } ], "display-xl-mobile": [ "38px", { "lineHeight": "46px", "letterSpacing": "-0.01em", "fontWeight": "600" } ] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><header class="fixed top-0 w-full z-50 shadow-[0_1px_8px_rgba(0,0,0,0.04)]"><div class="bg-primary-container text-on-primary-container px-space-md py-space-xs"><div class="max-w-container-max mx-auto px-gutter-desktop flex flex-wrap items-center justify-between gap-space-xs"><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary-fixed text-[16px]">info</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-surface-container-lowest font-medium">Demo Environment</span><span class="hidden md:inline font-body-sm text-body-sm text-on-primary-container/90">— No real payments or guest reservations are processed. Portfolio Showcase.</span></div><div class="flex items-center gap-space-sm"><div class="inline-flex items-center bg-primary/40 rounded-full p-0.5"><span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Guest Portal</span><a class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full text-on-primary-container hover:text-surface-container-lowest transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact">Staff Suite</a></div></div></div></div><div class="h-20 bg-surface/90 backdrop-blur-xl"><div class="h-20 max-w-container-max mx-auto px-gutter-desktop flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-sm"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary font-title-md font-semibold after:scale-x-100"><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="home" href="{{ route('home') }}">Home</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="stay" href="{{ route('stay') }}">Stay</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="amenities" href="{{ route('home') }}#amenities">Amenities</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="experiences" href="{{ route('home') }}#experiences">Experiences</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="gallery" href="{{ route('home') }}#gallery">Gallery</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="about" href="{{ route('home') }}#about">About</a><a class="font-title-md text-title-md text-on-surface-variant hover:text-primary transition-colors relative py-1 after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-secondary after:scale-x-0 after:transition-transform" data-path="contact" href="{{ route('home') }}#contact">Contact</a></nav><div class="flex items-center gap-space-md"><a class="hidden xl:flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-primary transition-colors" data-path="admin-suite" href="{{ route('home') }}#contact"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Staff Admin</a><div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile" class="w-8 h-8 rounded-full object-cover shadow-[0_1px_4px_rgba(0,0,0,0.08)]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjSHtXOB-ilyK-dHVZP07RT4sENR5yAt84ZsmAhhxPbojWzuE15zMXsUJ9v_LhehisMVtVJBpDlyHfiBLooaeuTdTnHSLRkDtaP6jOxlMYZnPtd7k9SUYpYv9JLzcfHn0kvubnoBdNYSmzaXEsZWsWOn2swSdtCNpvT0sPlvyWbOClhiJWgLu745-Jbht8kBj_5BPBm11VfgoJxd1NMWmfBRQB3xsUhc_Esosj2LDp8-2gIQWBK9v8_A"><a class="hidden sm:inline font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">My Bookings</a></div><a class="inline-flex items-center justify-center bg-primary-container text-surface-container-lowest font-label-md text-label-md px-space-lg py-space-xs rounded-full hover:bg-primary transition-colors shadow-[0_2px_8px_rgba(27,59,43,0.15)]" data-path="book-stay" href="{{ route('availability') }}">Book Your Stay</a></div></div></div></header><main class="w-full pt-20 bg-surface"><div class="flex flex-col w-full">
<!-- Top Atmospheric Ambient Glow -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[980px] h-[360px] bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>
<!-- Editorial Header Section -->
<div class="max-w-container-max mx-auto px-gutter-mobile md:px-gutter-tablet lg:px-gutter-desktop pt-space-xl pb-space-lg relative z-10">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="max-w-3xl space-y-space-xs">
<div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-surface-container text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
<span class="font-label-sm text-label-sm tracking-widest uppercase font-semibold">Bespoke Reservation Concierge</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Check Room Availability &amp; Dates</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
            Select your desired travel window and party size to discover available boutique villas and suites.
          </p>
</div>
<!-- Real-time Guarantee Pill -->
<div class="flex items-center gap-space-xs px-space-md py-space-xs rounded-xl bg-surface-container-lowest shadow-sm text-on-surface">
<span class="material-symbols-outlined text-secondary text-[22px]" style="font-variation-settings: 'FILL' 1;">verified</span>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Live Inventory</span>
<span class="font-title-md text-title-md text-primary font-semibold">Autumn Season 2025</span>
</div>
</div>
</div>
</div>
</div>
<!-- Main Booking & Availability Engine Container -->
<div class="max-w-container-max mx-auto px-gutter-mobile md:px-gutter-tablet lg:px-gutter-desktop w-full pb-space-3xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- Primary Availability Panel (Left / Main Column) -->
<div class="lg:col-span-8 flex flex-col gap-space-xl">
<!-- Interactive Date Range & Configuration Matrix Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-md p-space-lg md:p-space-xl space-y-space-xl relative overflow-hidden">
<!-- Top Bar: Stay Duration Badge & Validation Chip -->
<div class="flex flex-wrap items-center justify-between gap-space-sm pb-space-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">calendar_month</span>
<span class="font-title-md text-title-md text-primary font-bold">1. Select Travel Span</span>
</div>
<div class="inline-flex items-center gap-2 px-space-md py-1 rounded-full bg-secondary-container text-on-secondary-container">
<span class="material-symbols-outlined text-[18px]">bedtime</span>
<span class="font-label-md text-label-md font-semibold" id="nightsCalcBadge">4 Nights Selected</span>
</div>
</div>
<!-- Dual Calendar / Interactive Selection Rail -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Check-In Selector Trigger -->
<div data-date-target="check_in" class="flex flex-col p-space-md rounded-xl bg-surface-container-low transition-all cursor-pointer shadow-sm hover:shadow-md group">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Arrival Window</span>
<span class="material-symbols-outlined text-primary text-[18px] group-hover:translate-x-0.5 transition-transform">login</span>
</div>
<div class="mt-space-xs flex items-baseline gap-space-xs">
<span id="arrivalDay" class="font-display-xl-mobile text-display-xl-mobile text-primary font-semibold">16</span>
<div class="flex flex-col">
<span id="arrivalMonth" class="font-title-md text-title-md text-primary font-medium">October 2025</span>
<span id="arrivalWeekday" class="font-body-sm text-body-sm text-on-surface-variant font-medium">Thursday • From 3:00 PM</span>
</div>
</div>
</div>
<!-- Check-Out Selector Trigger -->
<div data-date-target="check_out" class="flex flex-col p-space-md rounded-xl bg-surface-container-low transition-all cursor-pointer shadow-sm hover:shadow-md group">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Departure Window</span>
<span class="material-symbols-outlined text-primary text-[18px] group-hover:translate-x-0.5 transition-transform">logout</span>
</div>
<div class="mt-space-xs flex items-baseline gap-space-xs">
<span id="departureDay" class="font-display-xl-mobile text-display-xl-mobile text-primary font-semibold">20</span>
<div class="flex flex-col">
<span id="departureMonth" class="font-title-md text-title-md text-primary font-medium">October 2025</span>
<span id="departureWeekday" class="font-body-sm text-body-sm text-on-surface-variant font-medium">Monday • Until 11:00 AM</span>
</div>
</div>
</div>
</div>
<style>
  [data-calendar-day].calendar-selected { transition: background-color .15s ease, transform .15s ease, box-shadow .15s ease; }
  [data-calendar-day].calendar-selected:hover { background-color: #735c00 !important; color: #ffffff !important; transform: translateY(-2px); box-shadow: 0 0 0 2px #fddeb2, 0 6px 14px rgba(3, 37, 23, .3) !important; }
  [data-calendar-day].calendar-pending { background-color: #cba72f !important; color: #241a00 !important; font-weight: 700; box-shadow: 0 0 0 2px #fddeb2, 0 4px 10px rgba(115, 92, 0, .25); transition: background-color .15s ease, transform .15s ease, box-shadow .15s ease; }
  [data-calendar-day].calendar-pending:hover { background-color: #735c00 !important; color: #ffffff !important; transform: translateY(-2px); }
</style>
<!-- Architectural Visual Calendar Matrix Preview -->
<div class="rounded-xl bg-surface-container-low/60 p-space-md">
<div class="flex items-center justify-between mb-space-sm px-space-xs">
<span id="calendarTitle" class="font-title-md text-title-md text-primary font-semibold">Carmel Sanctuary Calendar</span>
<div class="flex items-center gap-space-xs">
<button class="w-8 h-8 rounded-full flex items-center justify-center bg-surface-container-lowest text-on-surface hover:bg-primary hover:text-on-primary transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-full flex items-center justify-center bg-surface-container-lowest text-on-surface hover:bg-primary hover:text-on-primary transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
<!-- Day Header -->
<div class="grid grid-cols-7 text-center font-label-sm text-label-sm text-on-surface-variant font-semibold pb-space-xs">
<span>SUN</span><span>MON</span><span>TUE</span><span>WED</span><span>THU</span><span>FRI</span><span>SAT</span>
</div>
<!-- Calendar Days Row Strip Mockup with Connected Span -->
<div class="grid grid-cols-7 gap-1 text-center font-body-sm text-body-sm">
<!-- Week 2-3 slice around Oct 12-25 -->
<div data-calendar-day="12" class="py-2.5 rounded-lg text-on-surface-variant/40">12</div>
<div data-calendar-day="13" class="py-2.5 rounded-lg text-on-surface-variant/40">13</div>
<div data-calendar-day="14" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">14</div>
<div data-calendar-day="15" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">15</div>
<!-- Active Range: Oct 16 Check-in -->
<div data-calendar-day="16" class="py-2.5 rounded-l-xl bg-primary text-on-primary font-semibold relative shadow-sm cursor-pointer">
                16
                <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-secondary-fixed"></span>
</div>
<!-- In-Range Days -->
<div data-calendar-day="17" class="py-2.5 bg-secondary-container/40 text-on-surface font-medium cursor-pointer">17</div>
<div data-calendar-day="18" class="py-2.5 bg-secondary-container/40 text-on-surface font-medium cursor-pointer">18</div>
<div data-calendar-day="19" class="py-2.5 bg-secondary-container/40 text-on-surface font-medium cursor-pointer">19</div>
<!-- Active Range: Oct 20 Check-out -->
<div data-calendar-day="20" class="py-2.5 rounded-r-xl bg-primary text-on-primary font-semibold relative shadow-sm cursor-pointer">
                20
                <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-secondary-fixed"></span>
</div>
<div data-calendar-day="21" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">21</div>
<div data-calendar-day="22" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">22</div>
<div data-calendar-day="23" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">23</div>
<div data-calendar-day="24" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">24</div>
<div data-calendar-day="25" class="py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container cursor-pointer transition-colors">25</div>
</div>
</div>
<!-- Section 2: Party Size & Accommodation Allocation -->
<div class="space-y-space-md">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">group</span>
<span class="font-title-md text-title-md text-primary font-bold">2. Guest Configuration &amp; Accommodations</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- Adults Counter Module -->
<div class="flex flex-col justify-between p-space-md rounded-xl bg-surface-container-low shadow-sm">
<div>
<span class="font-title-md text-title-md text-primary font-semibold block">Adults</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ages 13 and above</span>
</div>
<div class="flex items-center justify-between mt-space-md">
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="adultsDec" type="button">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
<span class="font-currency-lg text-currency-lg text-primary" id="adultsVal">2</span>
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="adultsInc" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Children Counter Module with Age Tag -->
<div class="flex flex-col justify-between p-space-md rounded-xl bg-surface-container-low shadow-sm">
<div>
<div class="flex items-center justify-between">
<span class="font-title-md text-title-md text-primary font-semibold">Children</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-semibold">Age 6</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ages 0 to 12</span>
</div>
<div class="flex items-center justify-between mt-space-md">
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="childrenDec" type="button">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
<span class="font-currency-lg text-currency-lg text-primary" id="childrenVal">1</span>
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="childrenInc" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<!-- Rooms Counter Module -->
<div class="flex flex-col justify-between p-space-md rounded-xl bg-surface-container-low shadow-sm">
<div>
<span class="font-title-md text-title-md text-primary font-semibold block">Villas / Suites</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Dedicated suites</span>
</div>
<div class="flex items-center justify-between mt-space-md">
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="roomsDec" type="button">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
<span class="font-currency-lg text-currency-lg text-primary" id="roomsVal">1 Room</span>
<button class="w-9 h-9 rounded-full bg-surface-container-lowest shadow-sm flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors" id="roomsInc" type="button">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
</div>
</div>
<!-- Capacity & Dynamic Validation Pill Alert -->
<section id="booking-preferences" class="absolute -left-[9999px] h-px w-px overflow-hidden" aria-hidden="true">
  <div class="mb-space-md"><span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Your preferences</span><h2 class="font-headline-md text-headline-md text-primary font-medium">Complete your stay selection</h2><p class="font-body-md text-body-md text-on-surface-variant">Choose your room, dates, guests, and bedding preference before searching.</p></div>
  <div class="grid gap-space-md sm:grid-cols-2 lg:grid-cols-5">
    <div class="lg:col-span-2"><label for="room" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Room</label><select id="room" name="room" required class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary">@foreach(config('rooms') as $roomName => $room)<option value="{{ $roomName }}" @selected(($selectedRoom ?? '') === $roomName)>{{ $roomName }} · up to {{ $room['capacity'] }} guests</option>@endforeach</select></div>
    <div><label for="check_in" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-in</label><input id="check_in" name="check_in" type="date" required min="{{ now()->format('Y-m-d') }}" value="{{ $search['check_in'] ?? now()->addDay()->format('Y-m-d') }}" class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"></div>
    <div><label for="check_out" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-out</label><input id="check_out" name="check_out" type="date" required min="{{ now()->addDay()->format('Y-m-d') }}" value="{{ $search['check_out'] ?? now()->addDays(5)->format('Y-m-d') }}" class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"></div>
    <div><label for="guests" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Guests</label><input id="guests" name="guests" type="number" min="1" max="10" value="{{ isset($search['adults'], $search['children']) ? (int) $search['adults'] + (int) $search['children'] : 2 }}" required class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"><p id="availability-capacity" class="mt-1 text-xs text-on-surface-variant">Maximum follows the selected room.</p></div>
    <div class="sm:col-span-2 lg:col-span-4"><label for="bedding_preference" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Bedding preference</label><select id="bedding_preference" name="bedding_preference" class="w-full rounded-xl border border-outline-variant bg-surface-container-lowest px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"><option>King bed</option><option>Twin beds</option><option>No preference</option></select></div>
    <div class="flex items-end"><button id="searchPreferencesBtn" type="button" class="w-full rounded-xl bg-primary-container px-5 py-3 font-label-md text-label-md font-bold text-surface-container-lowest transition hover:bg-primary">Search Available Rooms →</button></div>
  </div>
</section>
<div class="flex items-start sm:items-center gap-space-sm p-space-md rounded-xl bg-primary-fixed/40 text-on-primary-fixed">
<span class="material-symbols-outlined text-primary text-[22px] flex-shrink-0 mt-0.5 sm:mt-0" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between w-full gap-space-xs">
<span class="font-body-md text-body-md font-semibold text-on-primary-fixed">
                ✓ Peak season availability open. Minimum 2-night stay met.
              </span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">
                Ocean &amp; Forest Wings Available
              </span>
</div>
</div>
<!-- Search Action Bar -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs">
<button class="w-full sm:w-auto px-space-lg py-space-sm rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all text-center" id="resetBtn" type="button">
              Reset / Modify Search
            </button>
<button class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-2xl py-space-md rounded-full bg-primary-container text-surface-container-lowest font-label-md text-label-md hover:bg-primary shadow-md hover:shadow-lg transition-all" id="searchAvailableBtn" type="button">
<span>Search Available Rooms</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</button>
</div>
</div>
@if($searchError)
<div class="rounded-xl bg-red-50 px-space-md py-space-sm text-sm font-semibold text-red-800" role="alert">{{ $searchError }}</div>
@endif
@if(is_array($availableRooms))
<section id="available-results" class="scroll-mt-40 rounded-xl bg-surface-container-lowest p-space-lg shadow-md">
  <div class="mb-space-md flex flex-wrap items-end justify-between gap-space-sm">
    <div><span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Live availability</span><h2 class="font-headline-md text-headline-md text-primary font-medium">{{ count($availableRooms) }} room{{ count($availableRooms) === 1 ? '' : 's' }} match your preferences</h2></div>
    <span class="rounded-full bg-primary-fixed px-3 py-1 text-sm font-semibold text-on-primary-fixed">{{ $search['adults'] + $search['children'] }} guests · {{ $search['rooms'] }} room{{ $search['rooms'] > 1 ? 's' : '' }}</span>
  </div>
  @forelse($availableRooms as $room)
    <article class="mb-3 flex flex-col items-start justify-between gap-space-md rounded-xl bg-surface-container-low p-space-md md:flex-row md:items-center">
      <div><h3 class="font-title-lg text-title-lg font-bold text-primary">{{ $room['name'] }}</h3><p class="text-sm text-on-surface-variant">Up to {{ $room['capacity'] }} guests · ${{ number_format($room['price']) }} per night · Available for your selected dates</p></div>
      <a class="inline-flex shrink-0 items-center rounded-full bg-primary-container px-5 py-3 font-label-md text-label-md font-bold text-surface-container-lowest hover:bg-primary" href="{{ route('details', ['room' => $room['name']]) }}">View room</a>
    </article>
  @empty
    <div class="rounded-xl bg-secondary-container px-space-md py-space-md text-on-secondary-container"><strong>No rooms match this party size.</strong> Please reduce the number of guests or choose multiple rooms.</div>
  @endforelse
</section>
@endif
<!-- Quick Date Flexibility Banner (High Value) -->
<div class="relative overflow-hidden rounded-xl bg-gradient-to-r from-primary-container via-primary-container/95 to-primary text-on-primary p-space-lg md:p-space-xl shadow-md">
<div class="absolute -right-12 -bottom-12 w-64 h-64 bg-secondary-container/10 rounded-full blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-12 h-12 rounded-xl bg-secondary-container/20 flex items-center justify-center flex-shrink-0 text-secondary-fixed">
<span class="material-symbols-outlined text-[28px]">price_change</span>
</div>
<div class="space-y-1">
<div class="inline-flex items-center gap-2">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-fixed font-bold">Smart Concierge Savings</span>
</div>
<h3 class="font-title-lg text-title-lg text-surface-container-lowest font-semibold">
                  Flexible on dates? View 7-day rate calendar (+/- 3 days)
                </h3>
<p class="font-body-sm text-body-sm text-on-primary-container">
                  Adjusting check-in by one day reveals preferential weekday rates starting at <span class="text-secondary-fixed font-bold">$380/night</span>.
                </p>
</div>
</div>
<button class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md hover:bg-secondary-fixed-dim transition-colors flex-shrink-0 shadow-sm" type="button">
<span>Inspect 7-Day Matrix</span>
<span class="material-symbols-outlined text-[16px]">tune</span>
</button>
</div>
</div>
</div>
<!-- Right Column: Seasonal Highlights & Sanctuary Assurances -->
<div class="lg:col-span-4 flex flex-col gap-space-lg">
<!-- Sanctuary Visual Card -->
<div class="rounded-xl overflow-hidden shadow-md bg-surface-container-lowest">
<div class="relative h-48 w-full">
<img class="w-full h-full object-cover" data-alt="Panoramic architectural view of a luxury coastal boutique villa nestled among Carmel pine trees with floor-to-ceiling glass, warm timber millwork, and private stone dipping pool looking out toward the ocean at golden hour." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWRb8v-_7GHYqS-iZ9Sh8yFhSQFgxPb9EKmzPV0dX2XhRZ1z6tTb66A9Ip534v_6dOwz7ufQx4mFi7k_g-l1z956MpvEKA9YpKjVovohFNFdTEVX4jdrZSAmJP8ES3SNQ_ysLKrOTKfG0h_H3Nz4bFmf0i6PBhcrCgF_jwJ6pqJdhb-cRslopB60HKaGc0bk9QUoPnZCyq6AcUAIbBiFtnI8anoWu1YtUuDYKpFFMmnJf2k04c4Zd9Bw">
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent"></div>
<div class="absolute bottom-space-md left-space-md right-space-md text-surface-container-lowest">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">Selected Category</span>
<p class="font-headline-sm text-headline-sm font-medium">Forest Canopy &amp; Cliff Villas</p>
</div>
</div>
<!-- Direct Booking Guarantees Matrix -->
<div class="p-space-lg space-y-space-md">
<div class="flex items-center justify-between pb-space-xs">
<span class="font-title-md text-title-md text-primary font-bold">Booking Guarantees</span>
<span class="material-symbols-outlined text-secondary text-[20px]">shield</span>
</div>
<div class="space-y-space-sm">
<div class="flex items-start gap-space-sm p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">hotel_class</span>
</div>
<div>
<h4 class="font-title-md text-title-md text-primary font-semibold leading-snug">Guaranteed Best Direct Rates</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Reserve directly with our private concierge for verified best rates and exclusive resort credits.</p>
</div>
</div>
<div class="flex items-start gap-space-sm p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">local_bar</span>
</div>
<div>
<h4 class="font-title-md text-title-md text-primary font-semibold leading-snug">Welcome Cocktail &amp; Fruit Platter</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Artisanal farm-pressed botanical cocktails and seasonal orchard delicacies waiting in your villa.</p>
</div>
</div>
<div class="flex items-start gap-space-sm p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">event_repeat</span>
</div>
<div>
<h4 class="font-title-md text-title-md text-primary font-semibold leading-snug">Flexible 48-Hour Cancellation</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Cancel or reschedule without penalty up to 48 hours prior to scheduled arrival time.</p>
</div>
</div>
<div class="flex items-start gap-space-sm p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">wifi</span>
</div>
<div>
<h4 class="font-title-md text-title-md text-primary font-semibold leading-snug">High-Speed Resort Wi-Fi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Enterprise fiber-optic connectivity seamlessly throughout pavilions, spa, and forest paths.</p>
</div>
</div>
</div>
</div>
</div>
<!-- Timetable Concierge Snapshot Card -->
<div class="rounded-xl bg-surface-container p-space-lg space-y-space-sm">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-[20px]">schedule</span>
<span class="font-title-md text-title-md font-bold">Standard Timing Protocol</span>
</div>
<div class="grid grid-cols-2 gap-space-sm pt-space-xs">
<div class="p-space-sm rounded-lg bg-surface-container-lowest">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block font-bold">Check-In</span>
<span class="font-title-lg text-title-lg text-primary font-bold">3:00 PM</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-0.5">Early arrivals accommodated via Lounge</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-lowest">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block font-bold">Check-Out</span>
<span class="font-title-lg text-title-lg text-primary font-bold">11:00 AM</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-0.5">Late extensions granted on request</span>
</div>
</div>
</div>
</div>
</div>
<!-- Architectural FAQ Section -->
<div class="mt-space-3xl rounded-xl bg-surface-container-lowest shadow-md p-space-xl md:p-space-2xl">
<div class="max-w-2xl mb-space-xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Reservation Inquiries</span>
<h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-space-2xs">Frequently Asked Questions</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
          Essential details regarding check-in guidelines, deposits, and peaceful resort stewardship.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<!-- FAQ Item 1 -->
<div class="p-space-lg rounded-xl bg-surface-container-low/80 space-y-space-xs">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-secondary text-[20px]">payments</span>
<h3 class="font-title-md text-title-md font-bold">What are the deposit and payment terms?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
            A one-night advance deposit (room rate plus applicable taxes) is charged upon reservation confirmation. The remaining balance and incidental pre-authorization are settled smoothly during check-in.
          </p>
</div>
<!-- FAQ Item 2 -->
<div class="p-space-lg rounded-xl bg-surface-container-low/80 space-y-space-xs">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-secondary text-[20px]">more_time</span>
<h3 class="font-title-md text-title-md font-bold">Can we request early arrival or late departure?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
            Official check-in commences at 3:00 PM and check-out is at 11:00 AM. Should you arrive early, our concierge holds your luggage while you enjoy the mineral springs or the Forest Dining Pavilion.
          </p>
</div>
<!-- FAQ Item 3 -->
<div class="p-space-lg rounded-xl bg-surface-container-low/80 space-y-space-xs">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-secondary text-[20px]">policy</span>
<h3 class="font-title-md text-title-md font-bold">What is the cancellation and refund policy?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
            Individual reservations enjoy full flexibility up to 48 hours prior to your scheduled check-in window. Cancellations made inside this 48-hour period forfeit the initial one-night deposit.
          </p>
</div>
<!-- FAQ Item 4 -->
<div class="p-space-lg rounded-xl bg-surface-container-low/80 space-y-space-xs">
<div class="flex items-center gap-space-xs text-primary">
<span class="material-symbols-outlined text-secondary text-[20px]">pets</span>
<h3 class="font-title-md text-title-md font-bold">Are pets and companions welcome?</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
            Select garden ground villas accommodate well-trained canine companions up to 40 lbs with dedicated artisan pet bedding, artisanal treats, and organic grooming kits for a $120 one-time sanitation fee.
          </p>
</div>
</div>
<!-- Concierge Assistance Footer Callout -->
<div class="mt-space-xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined text-[20px]">support_agent</span>
</div>
<div>
<p class="font-title-md text-title-md text-primary font-semibold">Require private assistance or bespoke arrangements?</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Direct concierge phone: +1 (831) 555-0198 • Available 24 hours daily</p>
</div>
</div>
<a class="px-space-lg py-space-xs rounded-full bg-surface-container font-label-md text-label-md text-primary hover:bg-primary hover:text-on-primary transition-colors flex-shrink-0" data-path="contact" href="{{ route('home') }}#contact">
          Contact Reservation Host
        </a>
</div>
</div>
</div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    let adults = 2, children = 1, rooms = 1;
    const $ = (id) => document.getElementById(id);
    const checkIn = $('check_in'), checkOut = $('check_out');
    const roomSelect = $('room'), guestInput = $('guests');
    const nightsBadge = $('nightsCalcBadge');
    const arrivalCards = document.querySelectorAll('[data-date-target="check_in"], [data-date-target="check_out"]');
    const calendarMonth = new Date();
    const calendarTitle = $('calendarTitle');
    const calendarDays = document.querySelectorAll('[data-calendar-day]');

    function updateNights() {
      if (checkIn?.value) {
        const arrival = new Date(`${checkIn.value}T12:00:00`);
        $('arrivalDay').textContent = arrival.getDate(); $('arrivalMonth').textContent = arrival.toLocaleString(undefined, { month: 'long', year: 'numeric' }); $('arrivalWeekday').textContent = `${arrival.toLocaleString(undefined, { weekday: 'long' })} • From 3:00 PM`;
      }
      if (checkOut?.value) {
        const departure = new Date(`${checkOut.value}T12:00:00`);
        $('departureDay').textContent = departure.getDate(); $('departureMonth').textContent = departure.toLocaleString(undefined, { month: 'long', year: 'numeric' }); $('departureWeekday').textContent = `${departure.toLocaleString(undefined, { weekday: 'long' })} • Until 11:00 AM`;
      } else {
        $('departureDay').textContent = '—'; $('departureMonth').textContent = 'Select departure'; $('departureWeekday').textContent = 'Choose check-out date';
      }
      if (!checkIn?.value || !checkOut?.value) { nightsBadge.textContent = checkIn?.value ? 'Select check-out date' : 'Select check-in date'; updateCalendarHighlight(); return; }
      const arrival = new Date(`${checkIn.value}T12:00:00`), departure = new Date(`${checkOut.value}T12:00:00`);
      const nights = Math.round((new Date(checkOut.value) - new Date(checkIn.value)) / 86400000);
      nightsBadge.textContent = nights > 0 ? `${nights} Night${nights === 1 ? '' : 's'} Selected` : 'Choose a valid date range';
      if (nights <= 0) checkOut.setCustomValidity('Check-out must be after check-in.');
      else checkOut.setCustomValidity('');
      updateCalendarHighlight();
    }
    function syncGuests() {
      const option = roomSelect?.options[roomSelect.selectedIndex];
      const capacity = Number(option?.textContent.match(/up to (\d+) guests/)?.[1] || 10);
      if (guestInput) { guestInput.max = capacity; if (Number(guestInput.value) > capacity) guestInput.value = capacity; }
      const note = $('availability-capacity');
      if (note) note.textContent = `${option?.value || 'This room'} accommodates up to ${capacity} guests.`;
    }
    function localDateString(year, month, day) {
      return `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    }
    function setupCalendar() {
      if (calendarTitle) calendarTitle.textContent = `${calendarMonth.toLocaleString(undefined, { month: 'long' })} ${calendarMonth.getFullYear()} • Carmel Sanctuary Calendar`;
      calendarDays.forEach(dayCell => {
        const day = Number(dayCell.dataset.calendarDay);
        const value = localDateString(calendarMonth.getFullYear(), calendarMonth.getMonth(), day);
        const today = localDateString(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        dayCell.classList.toggle('cursor-pointer', value >= today);
        dayCell.classList.toggle('opacity-40', value < today);
        dayCell.setAttribute('role', 'button');
        dayCell.setAttribute('tabindex', value >= today ? '0' : '-1');
        dayCell.onclick = () => {
          if (value < today) return;
          if (!checkIn.value || (checkIn.value && checkOut.value)) { checkIn.value = value; checkOut.value = ''; }
          else if (value > checkIn.value) checkOut.value = value;
          else { checkIn.value = value; checkOut.value = ''; }
          updateNights();
        };
      });
      updateCalendarHighlight();
    }
    function updateCalendarHighlight() {
      if (!checkIn?.value || !checkOut?.value) return;
      const start = new Date(`${checkIn.value}T12:00:00`), end = new Date(`${checkOut.value}T12:00:00`);
      calendarDays.forEach(dayCell => {
        const day = Number(dayCell.dataset.calendarDay);
        const date = new Date(calendarMonth.getFullYear(), calendarMonth.getMonth(), day, 12);
        const selected = date >= start && date <= end;
        const isStart = date.getTime() === start.getTime(), isEnd = date.getTime() === end.getTime();
        dayCell.classList.remove('bg-primary', 'text-on-primary', 'text-white', 'font-semibold', 'rounded-l-xl', 'rounded-r-xl', 'bg-secondary-container/40', 'text-on-surface', 'font-medium', 'shadow-md', 'ring-2', 'ring-secondary', 'calendar-selected', 'calendar-pending');
        dayCell.style.backgroundColor = '';
        dayCell.style.color = '';
        dayCell.style.boxShadow = '';
        const pending = checkIn.value && !checkOut.value && date.getTime() === start.getTime();
        dayCell.setAttribute('aria-selected', selected || pending ? 'true' : 'false');
        if (pending) { dayCell.classList.add('calendar-pending'); dayCell.style.backgroundColor = '#cba72f'; dayCell.style.color = '#241a00'; dayCell.style.boxShadow = '0 0 0 2px #fddeb2, 0 4px 10px rgba(115, 92, 0, .25)'; }
        if (isStart || isEnd) {
          dayCell.classList.add('bg-primary', 'text-white', 'font-semibold', 'shadow-md', 'ring-2', 'ring-secondary', 'calendar-selected');
          dayCell.style.backgroundColor = '#032517';
          dayCell.style.color = '#ffffff';
          dayCell.style.boxShadow = '0 0 0 2px #735c00, 0 4px 10px rgba(3, 37, 23, 0.25)';
          dayCell.classList.add(isStart ? 'rounded-l-xl' : 'rounded-r-xl');
        } else if (selected) {
          dayCell.classList.add('bg-secondary-container/40', 'text-on-surface', 'font-medium');
        }
      });
    }
    function renderCounters() {
      $('adultsVal').textContent = adults; $('childrenVal').textContent = children;
      $('roomsVal').textContent = `${rooms} ${rooms === 1 ? 'Room' : 'Rooms'}`;
      if (guestInput) guestInput.value = adults + children;
    }
    $('adultsInc').onclick = () => { adults = Math.min(20, adults + 1); renderCounters(); };
    $('adultsDec').onclick = () => { adults = Math.max(1, adults - 1); renderCounters(); };
    $('childrenInc').onclick = () => { children = Math.min(20, children + 1); renderCounters(); };
    $('childrenDec').onclick = () => { children = Math.max(0, children - 1); renderCounters(); };
    $('roomsInc').onclick = () => { rooms = Math.min(10, rooms + 1); renderCounters(); };
    $('roomsDec').onclick = () => { rooms = Math.max(1, rooms - 1); renderCounters(); };
    $('resetBtn').onclick = () => { adults = 2; children = 1; rooms = 1; renderCounters(); checkIn.value = ''; checkOut.value = ''; updateNights(); window.history.replaceState({}, '', '{{ route('availability') }}'); };
    [checkIn, checkOut].forEach(input => input?.addEventListener('change', updateNights));
    roomSelect?.addEventListener('change', syncGuests);
    $('searchAvailableBtn').onclick = () => {
      if (!checkIn.value || !checkOut.value || checkOut.value <= checkIn.value) { checkIn.reportValidity(); checkOut.reportValidity(); return; }
      const url = new URL('{{ route('availability') }}', window.location.origin);
      url.search = new URLSearchParams({ check_in: checkIn.value, check_out: checkOut.value, adults, children, rooms, room: roomSelect?.value || '' });
      window.location.assign(`${url.pathname}?${url.searchParams.toString()}#available-results`);
    };
    $('searchPreferencesBtn').onclick = () => {
      if (!checkIn.value || !checkOut.value || checkOut.value <= checkIn.value) { checkIn.reportValidity(); checkOut.reportValidity(); return; }
      const url = new URL('{{ route('availability') }}', window.location.origin);
      url.search = new URLSearchParams({ check_in: checkIn.value, check_out: checkOut.value, adults: guestInput.value, children: 0, rooms: 1, room: roomSelect?.value || '' });
      window.location.assign(`${url.pathname}?${url.searchParams.toString()}#available-results`);
    };
    arrivalCards.forEach(card => card.addEventListener('click', () => $(card.dataset.dateTarget)?.showPicker?.()));
    syncGuests(); updateNights(); renderCounters(); setupCalendar();
    if (window.location.hash === '#available-results') {
      window.setTimeout(() => document.getElementById('available-results')?.scrollIntoView({ block: 'start' }), 0);
    }
  });
</script>
<section id="booking-preferences-bottom" class="hidden mx-auto mt-10 max-w-6xl px-gutter-desktop pb-space-4xl" aria-hidden="true">
    <div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-xl">
        <div class="mb-space-md"><span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Your preferences</span><h2 class="font-headline-md text-headline-md text-primary font-medium">Complete your stay selection</h2><p class="font-body-md text-body-md text-on-surface-variant">Choose your room, dates, guests, and bedding preference before continuing.</p></div>
        <form action="{{ route('booking.start') }}" method="POST" class="grid gap-space-md sm:grid-cols-2 lg:grid-cols-5">
            @csrf
            <div class="lg:col-span-2"><label for="room" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Room</label><select id="room" name="room" required class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary">@foreach(config('rooms') as $roomName => $room)<option value="{{ $roomName }}" @selected(($selectedRoom ?? '') === $roomName)>{{ $roomName }} · up to {{ $room['capacity'] }} guests</option>@endforeach</select></div>
            <div><label for="check_in" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-in</label><input id="check_in" name="check_in" type="date" required min="{{ now()->format('Y-m-d') }}" value="{{ $search['check_in'] ?? now()->addDay()->format('Y-m-d') }}" class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"></div>
            <div><label for="check_out" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Check-out</label><input id="check_out" name="check_out" type="date" required min="{{ now()->addDay()->format('Y-m-d') }}" value="{{ $search['check_out'] ?? now()->addDays(5)->format('Y-m-d') }}" class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"></div>
            <div><label for="guests" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Guests</label><input id="guests" name="guests" type="number" min="1" max="10" value="{{ isset($search['adults'], $search['children']) ? (int) $search['adults'] + (int) $search['children'] : 2 }}" required class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"><p id="availability-capacity" class="mt-1 text-xs text-on-surface-variant">Maximum follows the selected room.</p></div>
            <div><label for="bedding_preference" class="mb-1 block font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Bedding preference</label><select id="bedding_preference" name="bedding_preference" class="w-full rounded-xl border border-outline-variant bg-surface-container-low px-3 py-3 text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary"><option>King bed</option><option>Twin beds</option><option>No preference</option></select></div>
            <div class="sm:col-span-2 lg:col-span-4"><p class="rounded-xl bg-primary-fixed px-4 py-3 text-sm text-on-primary-fixed">Standard amenities included: Wi-Fi, breakfast, pool access, parking, and concierge.</p></div>
            <div class="flex items-end lg:justify-end"><button type="submit" class="w-full rounded-xl bg-primary-container px-5 py-3 font-label-md text-label-md font-bold text-surface-container-lowest transition hover:bg-primary">Continue to Guest Details →</button></div>
        </form>
    </div>
</section><script>
    const availabilityRoom = document.getElementById('room');
    const availabilityGuests = document.getElementById('guests');
    const availabilityCapacity = document.getElementById('availability-capacity');
    function syncAvailabilityCapacity() {
        const option = availabilityRoom?.options[availabilityRoom.selectedIndex];
        const capacity = Number(option?.textContent.match(/up to (\d+) guests/)?.[1] || 10);
        availabilityGuests.max = capacity;
        if (Number(availabilityGuests.value) > capacity) availabilityGuests.value = capacity;
        availabilityCapacity.textContent = `${option?.value || 'This room'} accommodates up to ${capacity} guests.`;
    }
    availabilityRoom?.addEventListener('change', syncAvailabilityCapacity);
    syncAvailabilityCapacity();
</script></main><footer class="w-full bg-surface-container-low text-on-surface mt-space-3xl"><div class="max-w-container-max mx-auto px-gutter-desktop pt-space-3xl pb-space-2xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl pb-space-2xl"><div class="lg:col-span-2 space-y-space-md pr-space-xl"><div class="flex items-center gap-space-xs"><span class="font-headline-sm text-headline-sm text-primary tracking-tight font-medium">ResortFlow</span></div><p class="font-body-md text-body-md text-on-surface-variant max-w-md">An architectural sanctuary celebrating quiet hospitality, coastal pine landscapes, and curated alpine wellness rituals.</p><div class="pt-space-xs space-y-space-2xs text-on-surface-variant font-body-sm text-body-sm"><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">pin_drop</span> 4400 Whispering Pines Way, Carmel-by-the-Sea, CA 93923</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">call</span> +1 (831) 555-0198 • Concierge Direct</p><p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-secondary text-[18px]">mail</span> concierge@resortflow.internal</p></div></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Sanctuary &amp; Stays</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Coastal Pavilions</a></li><li><a class="hover:text-primary transition-colors" data-path="stay" href="{{ route('stay') }}">Forest Canopy Suites</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">The Stone Thermal Baths</a></li><li><a class="hover:text-primary transition-colors" data-path="experiences" href="{{ route('home') }}#experiences">Private Wine Library</a></li><li><a class="hover:text-primary transition-colors" data-path="amenities" href="{{ route('home') }}#amenities">Artisanal Dining Atelier</a></li></ul></div><div class="space-y-space-sm"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Guest Privileges</h4><ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant"><li><a class="hover:text-primary transition-colors" data-path="my-bookings" href="{{ route('booking-confirmation') }}">Guest Itinerary Portal</a></li><li><a class="hover:text-primary transition-colors" data-path="book-stay" href="{{ route('availability') }}">Tailored Stay Requests</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Chauffeur &amp; Helipad Transfer</a></li><li><a class="hover:text-primary transition-colors" data-path="about" href="{{ route('home') }}#about">Sustainability Charter</a></li><li><a class="hover:text-primary transition-colors" data-path="contact" href="{{ route('home') }}#contact">Resort Policies &amp; FAQ</a></li></ul></div><div class="space-y-space-md"><h4 class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Gazette &amp; Chronicles</h4><p class="font-body-sm text-body-sm text-on-surface-variant">Receive seasonal monographs, private reserve invitations, and architectural updates.</p><div class="flex flex-col gap-space-xs"><div class="flex items-center rounded-lg bg-surface-container-lowest px-space-sm py-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.03)]"><input class="w-full bg-transparent font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none" placeholder="Enter your correspondence email" type="email"><button class="text-primary hover:text-secondary transition-colors" type="button"><span class="material-symbols-outlined text-[20px]">arrow_forward</span></button></div><span class="font-label-sm text-label-sm text-on-surface-variant/70">Unsubscribe at your pleasure. Discretion guaranteed.</span></div><div class="inline-flex items-center gap-space-xs rounded-full bg-surface-container px-space-sm py-1"><span class="material-symbols-outlined text-secondary text-[16px]">military_tech</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Forbes Five-Star Laureate 2024</span></div></div></div><div class="pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm"><div class="flex items-center gap-space-xs"><span class="w-2 h-2 rounded-full bg-secondary-container"></span><span>© 2025 ResortFlow Hospitality Group. Architectural Quietude.</span></div><div class="flex items-center gap-space-lg font-label-sm text-label-sm"><span>Pacific Standard Time: 09:42 AM</span><span class="hidden md:inline">•</span><span>Elevation: 320m Above Carmel Bay</span></div></div></div></footer><script src="{{ asset('js/app.js') }}"></script></body></html>
