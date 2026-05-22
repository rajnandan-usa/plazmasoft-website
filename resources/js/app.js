import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

/* ── Scroll Reveal ── */
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
        }
    });
}, { threshold: 0.07, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('[data-reveal]').forEach(el => revealObserver.observe(el));

/* ── Stagger Children ── */
document.querySelectorAll('[data-stagger]').forEach(parent => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                Array.from(entry.target.children).forEach((child, i) => {
                    setTimeout(() => child.classList.add('is-visible'), i * 90);
                });
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.06, rootMargin: '0px 0px -30px 0px' });
    observer.observe(parent);
});

/* ── Counter Animation ── */
function easeOutCubic(t) { return 1 - Math.pow(1 - t, 3); }

function runCounter(el) {
    const target  = parseFloat(el.dataset.counter) || 0;
    const suffix  = el.dataset.suffix  || '';
    const prefix  = el.dataset.prefix  || '';
    const dur     = 1800;
    let   startTs = null;

    function step(ts) {
        if (!startTs) startTs = ts;
        const progress = Math.min((ts - startTs) / dur, 1);
        const val = Math.floor(easeOutCubic(progress) * target);
        el.textContent = prefix + val + suffix;
        if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
}

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            runCounter(entry.target);
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('[data-counter]').forEach(el => counterObserver.observe(el));
