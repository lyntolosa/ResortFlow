<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ResortFlow') }} · Your coastal escape</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
    <header class="fixed left-0 top-0 z-50 w-full bg-emerald-950/75 text-white shadow-lg backdrop-blur-md">
        @include('partials.demo-banner')
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight">ResortFlow</a>
            <nav class="hidden items-center gap-6 text-sm font-medium lg:flex">
                <a href="{{ route('home') }}" data-path="home" class="transition hover:text-amber-200">Home</a>
                <a href="{{ route('home') }}#rooms" data-path="rooms" class="transition hover:text-amber-200">Rooms</a>
                <a href="{{ route('home') }}#amenities" class="transition hover:text-amber-200">Amenities</a>
                <a href="{{ route('home') }}#experiences" class="transition hover:text-amber-200">Experiences</a>
                <a href="{{ route('home') }}#gallery" class="transition hover:text-amber-200">Gallery</a>
                <a href="{{ route('home') }}#about" class="transition hover:text-amber-200">About</a>
                <a href="{{ route('home') }}#contact" class="transition hover:text-amber-200">Contact</a>
            </nav>
            <a href="{{ route('login') }}" aria-label="Log in" title="Log in" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/40 text-white transition hover:border-amber-200 hover:bg-white/10 hover:text-amber-200">
                <svg aria-hidden="true" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M20 21a8 8 0 0 0-16 0" stroke-linecap="round" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
            </a>
        </div>
    </header>

    <main>
<section class="relative isolate min-h-screen overflow-hidden bg-emerald-950">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=2200&q=85');"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-950/90 via-emerald-950/60 to-emerald-950/20"></div>
            <div class="relative mx-auto flex min-h-screen max-w-6xl items-center px-6 pb-20 pt-32">
                <div class="max-w-2xl text-white">
                    <p class="mb-5 text-sm font-bold uppercase tracking-[0.3em] text-amber-200">Your private coastal escape</p>
                    <h1 class="text-5xl font-bold leading-tight tracking-tight sm:text-7xl">Stay somewhere worth remembering.</h1>
                    <p class="mt-6 max-w-xl text-lg leading-8 text-slate-200">Find a peaceful room, choose your dates, and let ResortFlow take care of the details.</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('stay') }}" class="rounded-full bg-amber-200 px-7 py-3.5 font-bold text-emerald-950 transition hover:bg-amber-100">Find your stay <span aria-hidden="true">→</span></a>
                    </div>
                    <div class="mt-12 flex flex-wrap gap-8 text-sm text-slate-200">
                        <span>★ 4.9 guest rating</span>
                        <span>✓ Best-rate promise</span>
                        <span>⌁ 24/7 concierge</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="rooms" class="scroll-mt-32 mx-auto max-w-6xl px-6 py-24">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-emerald-700">Made for slowing down</p>
                    <h2 class="mt-2 text-4xl font-bold tracking-tight">Find your kind of quiet.</h2>
                </div>
                <a href="{{ route('stay') }}" class="font-semibold text-emerald-800 hover:text-emerald-600">See all rooms →</a>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <a href="{{ route('details', ['room' => 'Ocean View Villa']) }}" class="block overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg"><img class="h-56 w-full object-cover" src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=85" alt="Warm minimalist luxury room"><div class="p-5"><p class="text-sm font-semibold text-amber-700">Best seller</p><h3 class="mt-1 text-xl font-bold">Ocean View Villa</h3><p class="mt-2 text-sm text-slate-600">Private plunge pool · King bed</p><p class="mt-4 font-bold text-emerald-900">From $780 <span class="font-normal text-slate-500">/ night</span></p></div></a>
                <a href="{{ route('details', ['room' => 'Poolside Garden Suite']) }}" class="block overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg"><img class="h-56 w-full object-cover" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1000&q=85" alt="Elegant resort suite interior"><div class="p-5"><p class="text-sm font-semibold text-emerald-700">Popular choice</p><h3 class="mt-1 text-xl font-bold">Poolside Garden Suite</h3><p class="mt-2 text-sm text-slate-600">Garden access · King bed</p><p class="mt-4 font-bold text-emerald-900">From $520 <span class="font-normal text-slate-500">/ night</span></p></div></a>
                <a href="{{ route('details', ['room' => 'Forest Canopy Retreat']) }}" class="block overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg"><img class="h-56 w-full object-cover" src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1000&q=85" alt="Quiet nature retreat room"><div class="p-5"><p class="text-sm font-semibold text-sky-700">For nature lovers</p><h3 class="mt-1 text-xl font-bold">Forest Canopy Retreat</h3><p class="mt-2 text-sm text-slate-600">Pine views · Outdoor terrace</p><p class="mt-4 font-bold text-emerald-900">From $430 <span class="font-normal text-slate-500">/ night</span></p></div></a>
            </div>
        </section>

        <section id="amenities" class="scroll-mt-32 border-y border-slate-200 bg-white">
            <div class="mx-auto max-w-6xl px-6 py-20">
                <p class="text-sm font-bold uppercase tracking-widest text-emerald-700">Included with your stay</p>
                <h2 class="mt-2 text-4xl font-bold tracking-tight">Comfort comes standard.</h2>
                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="overflow-hidden rounded-xl bg-slate-50 shadow-sm ring-1 ring-slate-200"><img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=85" alt="Guest lounge with resort Wi-Fi workspace"><div class="p-5"><p class="text-2xl">⌁</p><h3 class="mt-3 font-bold">Wi-Fi</h3><p class="mt-2 text-sm text-slate-600">Stay connected throughout the resort.</p></div></div>
                    <div class="overflow-hidden rounded-xl bg-slate-50 shadow-sm ring-1 ring-slate-200"><img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=85" alt="Fresh breakfast served at a resort table"><div class="p-5"><p class="text-2xl">☼</p><h3 class="mt-3 font-bold">Breakfast</h3><p class="mt-2 text-sm text-slate-600">A fresh breakfast is included every morning.</p></div></div>
                    <div class="overflow-hidden rounded-xl bg-slate-50 shadow-sm ring-1 ring-slate-200"><img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1572331165267-854da2b10ccc?auto=format&fit=crop&w=900&q=85" alt="Resort pool surrounded by greenery"><div class="p-5"><p class="text-2xl">♨</p><h3 class="mt-3 font-bold">Pool access</h3><p class="mt-2 text-sm text-slate-600">Enjoy our pools and thermal facilities.</p></div></div>
                    <div class="overflow-hidden rounded-xl bg-slate-50 shadow-sm ring-1 ring-slate-200"><img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=85" alt="Resort concierge welcoming a guest"><div class="p-5"><p class="text-2xl">✦</p><h3 class="mt-3 font-bold">Concierge</h3><p class="mt-2 text-sm text-slate-600">Our team is here to make your stay easy.</p></div></div>
                </div>
            </div>
        </section>

        <section id="experiences" class="scroll-mt-32 mx-auto max-w-6xl px-6 py-20">
            <p class="text-sm font-bold uppercase tracking-widest text-emerald-700">More than a room</p>
            <div class="flex flex-wrap items-end justify-between gap-4"><div><h2 class="mt-2 text-4xl font-bold tracking-tight">Make the stay yours.</h2><p id="experienceSelectionStatus" class="mt-3 hidden text-sm font-semibold text-emerald-700"></p></div><a href="{{ route('details', ['room' => $selectedRoom ?? 'Ocean View Villa']) }}" class="rounded-full border border-emerald-800 px-5 py-2.5 text-sm font-bold text-emerald-900 transition hover:bg-emerald-900 hover:text-white">← Back to room details</a></div>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article class="overflow-hidden rounded-2xl bg-emerald-900 text-white shadow-sm"><img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1000&q=85" alt="Spa and wellness treatment"><div class="p-6"><h3 class="text-xl font-bold">Spa & wellness rituals</h3><p class="mt-3 text-sm leading-6 text-emerald-100">Slow mornings, restorative treatments, and quiet spaces.</p><button type="button" class="experience-add mt-5 rounded-full bg-white px-4 py-2 text-sm font-bold text-emerald-950 transition hover:bg-amber-200" data-experience="Spa & wellness rituals">Add to my stay</button></div></article>
                <article class="overflow-hidden rounded-2xl bg-amber-100 text-emerald-950 shadow-sm"><img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=85" alt="Sunset coastal dining"><div class="p-6"><h3 class="text-xl font-bold">Sunset coastal dining</h3><p class="mt-3 text-sm leading-6 text-emerald-900">Seasonal dishes and ocean-view tables made for memorable evenings.</p><button type="button" class="experience-add mt-5 rounded-full bg-emerald-950 px-4 py-2 text-sm font-bold text-white transition hover:bg-emerald-800" data-experience="Sunset coastal dining">Add to my stay</button></div></article>
                <article class="overflow-hidden rounded-2xl bg-slate-200 text-slate-900 shadow-sm"><img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1000&q=85" alt="Coastal adventure experience"><div class="p-6"><h3 class="text-xl font-bold">Coastal adventures</h3><p class="mt-3 text-sm leading-6 text-slate-700">Discover the coastline with thoughtful local guidance.</p><button type="button" class="experience-add mt-5 rounded-full bg-emerald-950 px-4 py-2 text-sm font-bold text-white transition hover:bg-emerald-800" data-experience="Coastal adventures">Add to my stay</button></div></article>
            </div>
        </section>

        <section id="gallery" class="scroll-mt-32 bg-slate-100">
            <div class="mx-auto max-w-6xl px-6 py-20"><p class="text-sm font-bold uppercase tracking-widest text-emerald-700">A glimpse of ResortFlow</p><h2 class="mt-2 text-4xl font-bold tracking-tight">Spaces made for staying awhile.</h2><div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Ocean View Villa" data-gallery-category="Rooms" data-gallery-location="Pavilion 04 · Coastal Ridge" data-gallery-caption="Private balcony overlooking the coast." data-gallery-image="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=85" alt="Ocean View Villa"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Rooms · Coastal Ridge</span><strong class="mt-1 block text-lg">Ocean View Villa</strong><span class="mt-1 block text-sm text-slate-600">Private balcony overlooking the coast.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Stone Thermal Pool" data-gallery-category="Pool" data-gallery-location="Wellness Courtyard" data-gallery-caption="Mineral-water calm beneath the pines." data-gallery-image="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1000&q=85" alt="Stone thermal pool"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Pool · Wellness Courtyard</span><strong class="mt-1 block text-lg">Stone Thermal Pool</strong><span class="mt-1 block text-sm text-slate-600">Mineral-water calm beneath the pines.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Cedar Spa Ritual" data-gallery-category="Spa & Wellness" data-gallery-location="The Cedar Spa" data-gallery-caption="Restorative treatments inspired by the coast." data-gallery-image="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1000&q=85" alt="Cedar spa treatment"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Spa & Wellness · The Cedar Spa</span><strong class="mt-1 block text-lg">Cedar Spa Ritual</strong><span class="mt-1 block text-sm text-slate-600">Restorative treatments inspired by the coast.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Sunset Coastal Dining" data-gallery-category="Restaurant" data-gallery-location="Coastal Hearth · Main Terrace" data-gallery-caption="Seasonal plates with an ocean-view table." data-gallery-image="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=85" alt="Sunset coastal dining"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Restaurant · Main Terrace</span><strong class="mt-1 block text-lg">Sunset Coastal Dining</strong><span class="mt-1 block text-sm text-slate-600">Seasonal plates with an ocean-view table.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Carmel Beach Walk" data-gallery-category="Beach & Nature" data-gallery-location="Private Cove · Carmel Bay" data-gallery-caption="A quiet shoreline walk at golden hour." data-gallery-image="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?auto=format&fit=crop&w=1000&q=85" alt="Carmel beach and nature"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Beach & Nature · Carmel Bay</span><strong class="mt-1 block text-lg">Carmel Beach Walk</strong><span class="mt-1 block text-sm text-slate-600">A quiet shoreline walk at golden hour.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200" data-gallery-title="Guided Coastal Kayak" data-gallery-category="Activities" data-gallery-location="North Cove Launch" data-gallery-caption="Explore the shoreline with our local guide." data-gallery-image="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1800&q=90"><img class="h-56 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1000&q=85" alt="Guided coastal activity"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Activities · North Cove</span><strong class="mt-1 block text-lg">Guided Coastal Kayak</strong><span class="mt-1 block text-sm text-slate-600">Explore the shoreline with our local guide.</span></span></button>
                <button type="button" class="gallery-card group overflow-hidden rounded-2xl bg-white text-left shadow-sm ring-1 ring-slate-200 sm:col-span-2 lg:col-span-3" data-gallery-title="ResortFlow Exterior" data-gallery-category="Resort Exterior" data-gallery-location="Whispering Pines Way · Arrival Court" data-gallery-caption="Warm timber architecture framed by coastal pines." data-gallery-image="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1800&q=90"><img class="h-64 w-full object-cover transition duration-300 group-hover:scale-105" src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1400&q=85" alt="Resort exterior among coastal pines"><span class="block p-4"><span class="text-xs font-bold uppercase tracking-widest text-emerald-700">Resort Exterior · Arrival Court</span><strong class="mt-1 block text-lg">ResortFlow Exterior</strong><span class="mt-1 block text-sm text-slate-600">Warm timber architecture framed by coastal pines.</span></span></button>
            </div></div>
        </section>

        <div id="galleryModal" class="fixed inset-0 z-[80] hidden items-center justify-center bg-emerald-950/90 p-4" role="dialog" aria-modal="true" aria-labelledby="galleryModalTitle"><div class="relative w-full max-w-5xl overflow-hidden rounded-2xl bg-white shadow-2xl"><button id="closeGalleryModal" type="button" class="absolute right-4 top-4 z-10 rounded-full bg-white/90 px-4 py-2 text-2xl text-emerald-950 shadow">×</button><img id="galleryModalImage" class="max-h-[70vh] w-full object-cover" alt=""><div class="p-6"><p id="galleryModalMeta" class="text-xs font-bold uppercase tracking-widest text-emerald-700"></p><h2 id="galleryModalTitle" class="mt-1 text-3xl font-bold text-emerald-950"></h2><p id="galleryModalCaption" class="mt-2 text-slate-600"></p></div></div></div>

        <section id="about" class="mx-auto max-w-6xl px-6 py-20"><div class="max-w-2xl"><p class="text-sm font-bold uppercase tracking-widest text-emerald-700">About ResortFlow</p><h2 class="mt-2 text-4xl font-bold tracking-tight">A calmer kind of hospitality.</h2><p class="mt-5 leading-8 text-slate-600">ResortFlow brings together beautiful rooms, thoughtful service, and an easy booking experience so you can spend less time planning and more time enjoying your stay.</p></div></section>

        <section id="contact" class="bg-emerald-950 text-white"><div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-6 px-6 py-16"><div><p class="text-sm font-bold uppercase tracking-widest text-amber-200">Need help?</p><h2 class="mt-2 text-3xl font-bold">Our concierge is ready.</h2><p class="mt-2 text-emerald-100">Questions about rooms or dates? We’re happy to help.</p></div><a href="mailto:concierge@resortflow.example" class="rounded-full bg-amber-200 px-6 py-3 font-bold text-emerald-950 hover:bg-amber-100">Contact concierge</a></div></section>

        <section id="why-us" class="bg-emerald-950 text-white">
            <div class="mx-auto grid max-w-6xl gap-10 px-6 py-20 md:grid-cols-3">
                <div><p class="text-sm font-bold uppercase tracking-widest text-amber-200">Why ResortFlow</p><h2 class="mt-3 text-3xl font-bold">A simpler way to get away.</h2></div>
                <div><p class="text-3xl">✦</p><h3 class="mt-4 text-lg font-bold">Easy booking</h3><p class="mt-2 text-sm leading-6 text-slate-300">Select your room and dates in under a minute.</p></div>
                <div><p class="text-3xl">⌁</p><h3 class="mt-4 text-lg font-bold">Thoughtful service</h3><p class="mt-2 text-sm leading-6 text-slate-300">Our concierge is ready whenever you need help.</p></div>
            </div>
        </section>
    </main>

    <footer class="bg-slate-50 px-6 py-8 text-center text-sm text-slate-500">© {{ date('Y') }} ResortFlow · Your stay, made simple.</footer>
    <script>
        const galleryModal = document.getElementById('galleryModal');
        const galleryImage = document.getElementById('galleryModalImage');
        document.querySelectorAll('.gallery-card').forEach((card) => card.addEventListener('click', () => {
            galleryImage.src = card.dataset.galleryImage;
            galleryImage.alt = card.dataset.galleryTitle;
            document.getElementById('galleryModalTitle').textContent = card.dataset.galleryTitle;
            document.getElementById('galleryModalMeta').textContent = `${card.dataset.galleryCategory} · ${card.dataset.galleryLocation}`;
            document.getElementById('galleryModalCaption').textContent = card.dataset.galleryCaption;
            galleryModal.classList.remove('hidden'); galleryModal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }));
        function closeGallery() { galleryModal.classList.add('hidden'); galleryModal.classList.remove('flex'); document.body.classList.remove('overflow-hidden'); }
        document.getElementById('closeGalleryModal').addEventListener('click', closeGallery);
        galleryModal.addEventListener('click', (event) => { if (event.target === galleryModal) closeGallery(); });
        document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeGallery(); });

        const savedExperiences = JSON.parse(localStorage.getItem('resortflow_experiences') || '[]');
        const experienceStatus = document.getElementById('experienceSelectionStatus');
        function paintExperienceChoices() {
            document.querySelectorAll('.experience-add').forEach((button) => {
                const added = savedExperiences.includes(button.dataset.experience);
                button.textContent = added ? 'Added ✓' : 'Add to my stay';
                button.setAttribute('aria-pressed', added ? 'true' : 'false');
                button.classList.toggle('bg-amber-200', added);
                button.classList.toggle('ring-2', added);
                button.classList.toggle('ring-amber-400', added);
            });
            experienceStatus.textContent = savedExperiences.length ? `${savedExperiences.length} experience${savedExperiences.length === 1 ? '' : 's'} added to your stay.` : '';
            experienceStatus.classList.toggle('hidden', savedExperiences.length === 0);
        }
        document.querySelectorAll('.experience-add').forEach((button) => button.addEventListener('click', (event) => {
            event.stopPropagation();
            const index = savedExperiences.indexOf(button.dataset.experience);
            if (index >= 0) savedExperiences.splice(index, 1); else savedExperiences.push(button.dataset.experience);
            localStorage.setItem('resortflow_experiences', JSON.stringify(savedExperiences));
            paintExperienceChoices();
        }));
        paintExperienceChoices();

    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
