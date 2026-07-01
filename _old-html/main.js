/* =====================================================================
 * OJPT.nl — main.js
 * Vanilla JS, no dependencies
 * Features: carousel, mobile menu, FAQ accordion, form handling,
 *           scroll-reveal (IntersectionObserver), countdown timer,
 *           scroll progress header
 * ===================================================================== */

(function () {
  "use strict";

  /* ----------------------------------------------------------------- *
   * Utility helpers
   * ----------------------------------------------------------------- */
  const $ = (sel, ctx = document) => ctx.querySelector(sel);
  const $$ = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel));
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ----------------------------------------------------------------- *
   * 1. STICKY HEADER + SCROLL PROGRESS
   * ----------------------------------------------------------------- */
  function initHeader() {
    const header = $(".site-header");
    const progress = $(".scroll-progress");
    const heroEl = $(".hero, .page-hero");
    const heroH = heroEl ? heroEl.offsetHeight : 600;

    function onScroll() {
      const y = window.scrollY;
      if (header) {
        if (y > 40) header.classList.replace("transparent", "solid");
        else header.classList.replace("solid", "transparent");
      }
      if (progress) {
        const docH = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docH > 0 ? (y / docH) * 100 : 0;
        progress.style.width = pct + "%";
      }
      // update hero height reference if needed (kept simple)
    }
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", onScroll, { passive: true });
  }

  /* ----------------------------------------------------------------- *
   * 2. MOBILE MENU
   * ----------------------------------------------------------------- */
  function initMobileMenu() {
    const burger = $(".hamburger");
    const menu = $(".mobile-menu");
    const overlay = $(".mobile-overlay");
    if (!burger || !menu) return;

    function toggle(force) {
      const open = force !== undefined ? force : !menu.classList.contains("open");
      menu.classList.toggle("open", open);
      overlay && overlay.classList.toggle("open", open);
      burger.classList.toggle("open", open);
      burger.setAttribute("aria-expanded", String(open));
      document.body.style.overflow = open ? "hidden" : "";
    }
    burger.addEventListener("click", () => toggle());
    overlay && overlay.addEventListener("click", () => toggle(false));
    $$(".mobile-menu a").forEach((a) => a.addEventListener("click", () => toggle(false)));
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && menu.classList.contains("open")) toggle(false);
    });
  }

  /* ----------------------------------------------------------------- *
   * 3. SMOOTH SCROLL for anchor links
   * ----------------------------------------------------------------- */
  function initSmoothScroll() {
    if (prefersReducedMotion) return;
    $$('a[href^="#"]').forEach((link) => {
      link.addEventListener("click", (e) => {
        const id = link.getAttribute("href");
        if (id.length <= 1) return;
        const target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.scrollY - 70;
        window.scrollTo({ top, behavior: "smooth" });
      });
    });
  }

  /* ----------------------------------------------------------------- *
   * 4. SCROLL REVEAL via IntersectionObserver
   * ----------------------------------------------------------------- */
  function initReveal() {
    const items = $$(".reveal");
    if (!items.length) return;
    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      items.forEach((el) => el.classList.add("visible"));
      return;
    }
    const obs = new IntersectionObserver(
      (entries, o) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            o.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    items.forEach((el) => obs.observe(el));
    // Fallback: force all visible after 2.5s if IntersectionObserver hasn't fired
    setTimeout(function() {
      items.forEach(function(el) { if (!el.classList.contains('visible')) el.classList.add('visible'); });
    }, 2500);
  }

  /* ----------------------------------------------------------------- *
   * 5. COUNTDOWN TIMER (to Nov 22, 2025 12:00 local)
   * ----------------------------------------------------------------- */
  function initCountdown() {
    const el = $("#countdown");
    if (!el) return;
    const target = new Date("2025-11-22T12:00:00").getTime();
    const dEl = $("#cd-days"), hEl = $("#cd-hours"), mEl = $("#cd-mins"), sEl = $("#cd-secs");

    function pad(n) { return String(Math.max(0, n)).padStart(2, "0"); }

    function tick() {
      const now = Date.now();
      const diff = target - now;
      if (diff <= 0) {
        el.classList.add("ended");
        if (dEl) dEl.textContent = "00";
        if (hEl) hEl.textContent = "00";
        if (mEl) mEl.textContent = "00";
        if (sEl) sEl.textContent = "00";
        clearInterval(timer);
        return;
      }
      const days = Math.floor(diff / 86400000);
      const hours = Math.floor((diff % 86400000) / 3600000);
      const mins = Math.floor((diff % 3600000) / 60000);
      const secs = Math.floor((diff % 60000) / 1000);
      if (dEl) dEl.textContent = pad(days);
      if (hEl) hEl.textContent = pad(hours);
      if (mEl) mEl.textContent = pad(mins);
      if (sEl) sEl.textContent = pad(secs);
    }
    tick();
    const timer = setInterval(tick, 1000);
  }

  /* ----------------------------------------------------------------- *
   * 6. CAROUSEL
   * ----------------------------------------------------------------- */
  function initCarousel() {
    const carousel = $(".carousel");
    if (!carousel) return;
    const track = $(".carousel-track", carousel);
    const slides = $$(".carousel-slide", carousel);
    const dotsWrap = $(".carousel-dots", carousel);
    const prev = $(".carousel-arrow--prev", carousel);
    const next = $(".carousel-arrow--next", carousel);
    if (!track || !slides.length) return;

    let index = 0;
    let autoTimer = null;
    const AUTO_MS = 7000;

    // build dots
    if (dotsWrap) {
      slides.forEach((_, i) => {
        const dot = document.createElement("button");
        dot.className = "carousel-dot" + (i === 0 ? " active" : "");
        dot.setAttribute("aria-label", "Ga naar slide " + (i + 1));
        dot.addEventListener("click", () => goTo(i, true));
        dotsWrap.appendChild(dot);
      });
    }
    const dots = dotsWrap ? $$(".carousel-dot", dotsWrap) : [];

    function goTo(i, user) {
      index = (i + slides.length) % slides.length;
      track.style.transform = `translateX(-${index * 100}%)`;
      dots.forEach((d, di) => d.classList.toggle("active", di === index));
      if (user) restartAuto();
    }
    function nextSlide() { goTo(index + 1); }
    function prevSlide() { goTo(index - 1); }

    function startAuto() {
      if (prefersReducedMotion) return;
      autoTimer = setInterval(nextSlide, AUTO_MS);
    }
    function stopAuto() { if (autoTimer) clearInterval(autoTimer); }
    function restartAuto() { stopAuto(); startAuto(); }

    prev && prev.addEventListener("click", prevSlide);
    next && next.addEventListener("click", nextSlide);

    // pause on hover
    carousel.addEventListener("mouseenter", stopAuto);
    carousel.addEventListener("mouseleave", startAuto);

    // touch / swipe support
    let startX = 0, deltaX = 0, swiping = false;
    carousel.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
      swiping = true;
      stopAuto();
    }, { passive: true });
    carousel.addEventListener("touchmove", (e) => {
      if (!swiping) return;
      deltaX = e.touches[0].clientX - startX;
    }, { passive: true });
    carousel.addEventListener("touchend", () => {
      if (!swiping) return;
      swiping = false;
      if (Math.abs(deltaX) > 50) {
        if (deltaX < 0) nextSlide(); else prevSlide();
      }
      deltaX = 0;
      startAuto();
    });

    // keyboard
    carousel.tabIndex = 0;
    carousel.addEventListener("keydown", (e) => {
      if (e.key === "ArrowLeft") { prevSlide(); restartAuto(); }
      if (e.key === "ArrowRight") { nextSlide(); restartAuto(); }
    });

    startAuto();
  }

  /* ----------------------------------------------------------------- *
   * 7. FAQ ACCORDION
   * ----------------------------------------------------------------- */
  function initFAQ() {
    const items = $$(".faq-item");
    if (!items.length) return;
    items.forEach((item) => {
      const btn = $(".faq-question", item);
      const answer = $(".faq-answer", item);
      if (!btn || !answer) return;
      btn.addEventListener("click", () => {
        const isOpen = item.classList.contains("open");
        // close others
        items.forEach((other) => {
          if (other !== item) {
            other.classList.remove("open");
            const a = $(".faq-answer", other);
            if (a) a.style.maxHeight = null;
            const b = $(".faq-question", other);
            if (b) b.setAttribute("aria-expanded", "false");
          }
        });
        if (isOpen) {
          item.classList.remove("open");
          answer.style.maxHeight = null;
          btn.setAttribute("aria-expanded", "false");
        } else {
          item.classList.add("open");
          answer.style.maxHeight = answer.scrollHeight + "px";
          btn.setAttribute("aria-expanded", "true");
        }
      });
    });
  }

  /* ----------------------------------------------------------------- *
   * 8. CONTACT FORM (no backend — success message only)
   * ----------------------------------------------------------------- */
  function initForm() {
    const form = $("#contact-form");
    if (!form) return;
    const success = $(".form-success", form.parentElement) || $("#form-success");
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      // basic validation fallback
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      if (success) {
        success.classList.add("show");
        success.scrollIntoView({ behavior: "smooth", block: "center" });
      }
      form.reset();
      // reset floating labels
      $$(".field input, .field textarea", form).forEach((el) => (el.value = ""));
      setTimeout(() => {
        if (success) success.classList.remove("show");
      }, 6000);
    });
  }

  /* ----------------------------------------------------------------- *
   * 9. ACTIVE NAV HIGHLIGHT (based on current path)
   * ----------------------------------------------------------------- */
  function initActiveNav() {
    const path = location.pathname.split("/").pop() || "index.html";
    $$(".nav-list a, .mobile-menu a").forEach((a) => {
      const href = a.getAttribute("href");
      if (href === path) a.classList.add("active");
    });
  }

  /* ----------------------------------------------------------------- *
   * 10. YEAR in footer
   * ----------------------------------------------------------------- */
  function initYear() {
    const y = $("#year");
    if (y) y.textContent = new Date().getFullYear();
  }

  /* ----------------------------------------------------------------- *
   * INIT
   * ----------------------------------------------------------------- */
  function init() {
    initHeader();
    initMobileMenu();
    initSmoothScroll();
    initReveal();
    initCountdown();
    initCarousel();
    initFAQ();
    initForm();
    initActiveNav();
    initYear();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();