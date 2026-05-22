import './bootstrap';

/* ═══════════════════════════════════════════════════════
   NCEYLON — Page Smooth Animations & Interactions
═══════════════════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {

    /* ── 1. Scroll Reveal (IntersectionObserver) ── */
    const revealEls = document.querySelectorAll(
        '.reveal-section, .reveal-left, .reveal-right, .reveal-up'
    );

    if (revealEls.length) {
        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -60px 0px' }
        );
        revealEls.forEach((el) => revealObserver.observe(el));
    }

    /* ── 2. Odometer / Counter Animation ── */
    const odometerEls = document.querySelectorAll('.odometer[data-count]');

    if (odometerEls.length) {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.dataset.count, 10);
                        const duration = 2000;
                        const step = Math.ceil(target / (duration / 16));
                        let current = 0;

                        const tick = () => {
                            current = Math.min(current + step, target);
                            el.textContent = current.toLocaleString();
                            if (current < target) requestAnimationFrame(tick);
                        };
                        requestAnimationFrame(tick);
                        counterObserver.unobserve(el);
                    }
                });
            },
            { threshold: 0.5 }
        );
        odometerEls.forEach((el) => counterObserver.observe(el));
    }

    /* ── 3. Smooth anchor scroll for in-page links ── */
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (e) => {
            const target = document.querySelector(anchor.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    /* ── 5. Lazy-load images (native + fallback) ── */
    if ('loading' in HTMLImageElement.prototype) {
        document.querySelectorAll('img:not([loading])').forEach((img) => {
            img.setAttribute('loading', 'lazy');
        });
    }

    /* ── 6. Active nav link highlight ── */
    const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
    document.querySelectorAll('#nav-element a[href]').forEach((link) => {
        const linkPath = new URL(link.href, window.location.origin).pathname.replace(/\/$/, '') || '/';
        if (linkPath === currentPath) {
            const underline = link.querySelector('span');
            if (underline) underline.classList.add('w-full');
        }
    });

});
