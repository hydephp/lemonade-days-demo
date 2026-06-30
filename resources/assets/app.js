/*
* This is the main JavaScript used by Vite to build the app.js file.
*/

document.addEventListener('alpine:init', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Subtle scroll-linked parallax for elements like the homepage hero video.
    // Usage: x-parallax="0.15" (the number is the strength, 0 = none).
    Alpine.directive('parallax', (el, { expression }) => {
        if (prefersReducedMotion) return;

        const speed = expression ? parseFloat(expression) : 0.2;
        // Zoom in slightly so the translated image always overflows its frame
        // edge-to-edge instead of revealing empty space as it shifts.
        const zoom = 1 + speed;
        let ticking = false;

        const update = () => {
            const bounds = (el.parentElement ?? el).getBoundingClientRect();
            const offset = (bounds.top + bounds.height / 2 - window.innerHeight / 2) * speed;
            // Cap the shift to the extra room the zoom actually bought us, so
            // the image never slides far enough to expose its frame's edge.
            // (translateY is applied before scale, so its on-screen effect is
            // multiplied by zoom — divide the buffer back down to compensate.)
            const buffer = Math.max(0, (el.offsetHeight * zoom - bounds.height) / 2);
            const maxShift = buffer / zoom;
            const clamped = Math.max(-maxShift, Math.min(maxShift, offset));
            el.style.transform = `scale(${zoom}) translateY(${clamped}px)`;
            ticking = false;
        };

        const onScroll = () => {
            if (!ticking) {
                window.requestAnimationFrame(update);
                ticking = true;
            }
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
        update();
    });

    // Progressive enhancement for in-page anchor links: works as a normal
    // hash link without JS, but smooth-scrolls (no URL hash added) with it.
    // Usage: <a href="#section-id" x-smooth-scroll>
    Alpine.directive('smooth-scroll', (el) => {
        el.addEventListener('click', (event) => {
            const href = el.getAttribute('href') || '';
            if (!href.startsWith('#') || href.length < 2) return;

            const target = document.querySelector(href);
            if (!target) return;

            event.preventDefault();
            target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth', block: 'start' });
        });
    });
});
