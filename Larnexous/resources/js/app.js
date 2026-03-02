import './bootstrap';

// Smooth reveal-on-scroll for cards using Intersection Observer
function setupRevealOnScroll() {
	const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	const cards = Array.from(document.querySelectorAll('.reveal-card'));
	if (!cards.length) return;

	if (prefersReduced) {
		cards.forEach(c => c.classList.add('is-visible'));
		return;
	}

	const observer = new IntersectionObserver((entries, obs) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				const idx = cards.indexOf(entry.target);
				// slight stagger based on index
				entry.target.style.transitionDelay = `${(idx >= 0 ? idx : 0) * 80}ms`;
				entry.target.classList.add('is-visible');
				// trigger stat counters inside this card (once)
				const counters = entry.target.querySelectorAll && entry.target.querySelectorAll('.stat-counter');
				if (counters && counters.length) {
					counters.forEach(cnt => {
						// only animate once
						if (cnt.dataset.animated) return;
						animateCount(cnt);
					});
				}
				obs.unobserve(entry.target);
			}
		});
	}, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

	cards.forEach(c => observer.observe(c));
}

// Smooth counting animation using requestAnimationFrame
function animateCount(el) {
	const target = Math.max(0, parseInt(el.dataset.target, 10) || 0);
	const duration = Math.max(300, parseInt(el.dataset.duration, 10) || 2000);
	const start = 0;
	const startTime = performance.now();

	// easeOutCubic
	function ease(t) { return 1 - Math.pow(1 - t, 3); }

	function step(now) {
		const t = Math.min((now - startTime) / duration, 1);
		const eased = ease(t);
		const value = Math.round(start + (target - start) * eased);
		el.textContent = value;
		if (t < 1) requestAnimationFrame(step);
		else {
			el.textContent = target;
			el.dataset.animated = 'true';
		}
	}

	requestAnimationFrame(step);
}

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', setupRevealOnScroll);
} else {
	setupRevealOnScroll();
}

// Org-chart dynamic connector script
import './org-chart';
