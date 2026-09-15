function initBookingTimeline() {
    const bookingPaths = {
        '/stay': 1,
        '/details': 1,
        '/availability': 1,
        '/guest-details': 2,
        '/addons': 3,
        '/booking-summary': 4,
        '/booking-confirmation': 5,
    };
    const path = window.location.pathname.replace(/\/$/, '') || '/';
    const activeStep = bookingPaths[path];
    const main = document.querySelector('main');
    if (!activeStep || !main) return;

    let timeline = main.querySelector('.booking-timeline')
        || document.querySelector('section[class*="bg-surface-container-low"]');
    const existingTimeline = Boolean(timeline);

    const steps = [
        ['Rooms', '/stay'],
        ['Guest Details', '/guest-details'],
        ['Add-ons', '/addons'],
        ['Review', '/booking-summary'],
        ['Confirmed', '/booking-confirmation'],
    ];
    if (!timeline) timeline = document.createElement('section');
    timeline.className = 'booking-timeline sticky top-[120px] z-40 w-full border-b border-surface-container-highest bg-surface-container-low/95 py-space-md shadow-sm backdrop-blur-md';
    timeline.setAttribute('aria-label', 'Booking progress');
    if (existingTimeline && !timeline.closest('main') && document.querySelector('header')) timeline.style.marginTop = '120px';
    if (!document.querySelector('header')) {
        const demoBanner = document.querySelector('.demo-environment-banner');
        timeline.style.position = 'fixed';
        timeline.style.top = demoBanner ? `${demoBanner.offsetHeight}px` : '0';
        timeline.style.left = '0';
        timeline.style.width = '100%';
        timeline.style.zIndex = '50';
        main.style.paddingTop = '160px';
    }
    const completedThrough = path === '/booking-summary' ? 4 : (path === '/booking-confirmation' ? 5 : activeStep - 1);
    timeline.innerHTML = `<div class="max-w-container-max mx-auto px-gutter-mobile md:px-gutter-desktop"><div class="relative mx-auto flex max-w-4xl items-start justify-between"><div class="absolute left-[10%] right-[10%] top-4 h-0.5 bg-surface-container-highest"></div><div class="absolute left-[10%] top-4 h-0.5 bg-primary-container transition-all duration-300" style="width:${((activeStep - 1) / 4) * 80}%"></div>${steps.map(([label], index) => { const number = index + 1; const active = number === activeStep; const complete = number <= completedThrough; return `<div data-step="${number}" aria-current="${active ? 'step' : 'false'}" class="booking-step relative z-10 flex min-w-0 flex-1 flex-col items-center gap-1 text-center transition-colors ${active || complete ? 'text-primary' : 'text-on-surface-variant/60'}"><span class="flex h-8 w-8 items-center justify-center rounded-full font-label-sm text-label-sm font-bold shadow-sm transition-colors ${active ? 'bg-primary-container text-on-primary' : (complete ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-lowest text-on-surface-variant')}">${complete ? '✓' : number}</span><span class="font-label-sm text-label-sm uppercase tracking-wider ${active ? 'font-bold' : ''}">${label}</span></div>`; }).join('')}</div></div>`;
    timeline.style.fontFamily = "'Plus Jakarta Sans', Arial, sans-serif";
    timeline.style.backgroundColor = 'rgba(240, 245, 240, 0.96)';
    timeline.style.borderBottom = '1px solid #dfe4df';
    timeline.style.boxShadow = '0 1px 4px rgba(0, 0, 0, 0.06)';
    timeline.style.padding = '16px 0';
    const timelineInner = timeline.firstElementChild;
    const stepRow = timelineInner?.firstElementChild;
    if (timelineInner) {
        timelineInner.style.maxWidth = '1440px';
        timelineInner.style.margin = '0 auto';
        timelineInner.style.padding = '0 32px';
    }
    if (stepRow) {
        stepRow.style.position = 'relative';
        stepRow.style.display = 'flex';
        stepRow.style.alignItems = 'flex-start';
        stepRow.style.justifyContent = 'space-between';
        stepRow.style.maxWidth = '896px';
        stepRow.style.margin = '0 auto';
    }
    const progressLine = stepRow?.firstElementChild;
    const completedLine = stepRow?.children[1];
    [progressLine, completedLine].forEach((line) => {
        if (!line) return;
        line.style.position = 'absolute';
        line.style.left = '10%';
        line.style.top = '16px';
        line.style.height = '2px';
        line.style.zIndex = '0';
    });
    if (progressLine) { progressLine.style.right = '10%'; progressLine.style.backgroundColor = '#dfe4df'; }
    if (completedLine) completedLine.style.backgroundColor = '#1b3b2b';
    timeline.querySelectorAll('.booking-step').forEach((step) => {
        const circle = step.firstElementChild;
        const label = step.lastElementChild;
        const active = step.getAttribute('aria-current') === 'step';
        const complete = circle?.textContent.trim() === '✓';
        step.style.position = 'relative';
        step.style.zIndex = '1';
        step.style.display = 'flex';
        step.style.flexDirection = 'column';
        step.style.alignItems = 'center';
        step.style.gap = '4px';
        step.style.flex = '1 1 0%';
        step.style.color = active || complete ? '#032517' : '#727973';
        if (circle) {
            circle.style.width = '32px';
            circle.style.height = '32px';
            circle.style.display = 'flex';
            circle.style.alignItems = 'center';
            circle.style.justifyContent = 'center';
            circle.style.borderRadius = '9999px';
            circle.style.fontSize = '13px';
            circle.style.fontWeight = '700';
            circle.style.backgroundColor = active ? '#1b3b2b' : (complete ? '#c7ebd4' : '#ffffff');
            circle.style.color = active ? '#ffffff' : (complete ? '#002113' : '#727973');
        }
        if (label) {
            label.style.fontSize = '11px';
            label.style.lineHeight = '14px';
            label.style.letterSpacing = '0.06em';
            label.style.textTransform = 'uppercase';
            label.style.fontWeight = active ? '700' : '600';
            label.style.whiteSpace = 'normal';
            label.style.textAlign = 'center';
            label.style.minHeight = '28px';
            label.style.maxWidth = '100%';
            label.style.overflowWrap = 'anywhere';
            if (window.innerWidth < 640) {
                label.style.fontSize = '9px';
                label.style.letterSpacing = '0.02em';
            }
        }
    });
    if (!timeline.parentElement) main.prepend(timeline);
}

// Shared navigation state. Keeps the active section visible while the user scrolls.
document.addEventListener('DOMContentLoaded', () => {
    initBookingTimeline();
    const bookingHeaderPath = window.location.pathname.replace(/\/$/, '');
    if (['/stay', '/details', '/booking-summary'].includes(bookingHeaderPath)) {
        document.querySelectorAll('header [data-path="admin-suite"], header [data-path="book-stay"], header [data-path="my-bookings"]').forEach((link) => link.remove());
        const profileIcon = document.querySelector('header img[alt="Profile"]');
        if (profileIcon) {
            const loginLink = document.createElement('a');
            loginLink.href = '/login';
            loginLink.setAttribute('aria-label', 'Log in');
            loginLink.setAttribute('title', 'Log in');
            loginLink.className = 'flex h-8 w-8 items-center justify-center rounded-full text-on-surface-variant transition hover:bg-surface-container hover:text-primary';
            loginLink.innerHTML = '<svg aria-hidden="true" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21a8 8 0 0 0-16 0" stroke-linecap="round"/><circle cx="12" cy="7" r="4"/></svg>';
            profileIcon.replaceWith(loginLink);
        }
    }
    const links = [...document.querySelectorAll('header nav a')];
    links.filter((link) => link.dataset.path === 'rooms').forEach((link) => {
        link.href = '/stay';
    });
    if (!links.length) return;

    const sectionKeys = ['rooms', 'amenities', 'experiences', 'gallery', 'about', 'contact'];
    const path = window.location.pathname.replace(/\/$/, '') || '/';

    const keyForLink = (link) => link.dataset.path || link.getAttribute('href')?.split('#')[1] || '';
    const activeKey = () => {
        if (window.location.hash) return window.location.hash.slice(1);
        if (path === '/') {
            if (window.scrollY < 450) return 'home';
            let current = 'rooms';
            let nearest = Number.POSITIVE_INFINITY;
            sectionKeys.forEach((key) => {
                const section = document.getElementById(key);
                if (!section) return;
                const distance = Math.abs(section.getBoundingClientRect().top - 120);
                if (distance < nearest) { nearest = distance; current = key; }
            });
            return current;
        }
        if (['/stay', '/details', '/availability', '/addons', '/guest-details', '/booking-summary', '/booking-confirmation'].includes(path)) return 'stay';
        return 'home';
    };

    const paint = (key) => links.forEach((link) => {
        const active = keyForLink(link) === key;
        link.classList.toggle('nav-active', active);
        link.setAttribute('aria-current', active ? 'page' : 'false');
        link.style.color = active ? '#cba72f' : '';
        link.style.fontWeight = active ? '700' : '';
        link.style.borderBottom = active ? '2px solid #cba72f' : '';
        link.style.paddingBottom = active ? '4px' : '';
    });

    links.forEach((link) => link.addEventListener('click', () => paint(keyForLink(link))));
    paint(activeKey());
    window.addEventListener('scroll', () => { if (path === '/' && !window.location.hash) paint(activeKey()); }, { passive: true });
});
