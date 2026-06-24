/* Brivon — free HTML template. Minimal vanilla JS: mobile drawer + scroll-reveal. */
(function () {
  'use strict';

  // Mobile drawer
  const toggle = document.querySelector('.nav-toggle');
  const drawer = document.getElementById('mobile-drawer');
  const closeBtn = drawer && drawer.querySelector('.drawer-close');

  function openDrawer() {
    if (!drawer) return;
    drawer.classList.add('open');
    drawer.setAttribute('aria-hidden', 'false');
    if (toggle) toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeDrawer() {
    if (!drawer) return;
    drawer.classList.remove('open');
    drawer.setAttribute('aria-hidden', 'true');
    if (toggle) toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }
  if (toggle) toggle.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if (drawer) {
    drawer.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', closeDrawer);
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('open')) closeDrawer();
  });

  // Reveal on intersect (respects prefers-reduced-motion)
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!reduced && 'IntersectionObserver' in window) {
    const els = document.querySelectorAll('.reveal');
    if (els.length) {
      els.forEach(function (el) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(16px)';
        el.style.transition = 'opacity 600ms cubic-bezier(0.16, 1, 0.3, 1), transform 600ms cubic-bezier(0.16, 1, 0.3, 1)';
      });
      const io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.18, rootMargin: '0px 0px -10% 0px' });
      els.forEach(function (el) { io.observe(el); });
    }
  }

  // Sticky header subtle shadow on scroll
  const header = document.querySelector('.site-header');
  if (header) {
    let last = 0;
    window.addEventListener('scroll', function () {
      const y = window.scrollY;
      if (y > 4 && last <= 4) header.style.boxShadow = '0 8px 24px -16px rgba(0,0,0,0.6)';
      if (y <= 4 && last > 4) header.style.boxShadow = 'none';
      last = y;
    }, { passive: true });
  }

  // Work filtering
  const filterBtns = document.querySelectorAll('.filter-btn');
  const workItems = document.querySelectorAll('.work-item');

  if (filterBtns.length > 0 && workItems.length > 0) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        // Update active button state
        filterBtns.forEach(b => {
          b.classList.remove('btn--primary');
          b.classList.add('btn--ghost');
        });
        this.classList.remove('btn--ghost');
        this.classList.add('btn--primary');

        const filterValue = this.getAttribute('data-filter');

        workItems.forEach(function (item) {
          if (filterValue === 'all') {
            item.style.display = '';
            return;
          }

          const pill = item.querySelector('.wm-pill');
          if (pill && pill.textContent.trim().toLowerCase() === filterValue) {
            item.style.display = '';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }
})();
