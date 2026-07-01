/* =====================================================================
 * OJPT.nl — components.js
 * Carousel, FAQ accordion, form, countdown timer
 * ===================================================================== */

(function () {
  "use strict";

  const { $, $$, prefersReducedMotion } = window.OJPT;

  /* ----------------------------------------------------------------- *
   * 1. COUNTDOWN TIMER
   * ----------------------------------------------------------------- */
  function initCountdown() {
    const el = $("#countdown");
    if (!el) return;
    const target = new Date(el.dataset.target || "2025-11-22T12:00:00").getTime();
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
   * 2. CAROUSEL
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

    if (dotsWrap) {
      slides.forEach(function (_, i) {
        const dot = document.createElement("button");
        dot.className = "carousel-dot" + (i === 0 ? " active" : "");
        dot.setAttribute("aria-label", "Ga naar slide " + (i + 1));
        dot.addEventListener("click", function () { goTo(i, true); });
        dotsWrap.appendChild(dot);
      });
    }
    const dots = dotsWrap ? $$(".carousel-dot", dotsWrap) : [];

    function goTo(i, user) {
      index = (i + slides.length) % slides.length;
      track.style.transform = "translateX(-" + (index * 100) + "%)";
      dots.forEach(function (d, di) { d.classList.toggle("active", di === index); });
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

    carousel.addEventListener("mouseenter", stopAuto);
    carousel.addEventListener("mouseleave", startAuto);

    // Touch / swipe
    let startX = 0, deltaX = 0, swiping = false;
    carousel.addEventListener("touchstart", function (e) {
      startX = e.touches[0].clientX;
      swiping = true;
      stopAuto();
    }, { passive: true });
    carousel.addEventListener("touchmove", function (e) {
      if (!swiping) return;
      deltaX = e.touches[0].clientX - startX;
    }, { passive: true });
    carousel.addEventListener("touchend", function () {
      if (!swiping) return;
      swiping = false;
      if (Math.abs(deltaX) > 50) {
        if (deltaX < 0) nextSlide(); else prevSlide();
      }
      deltaX = 0;
      startAuto();
    });

    carousel.tabIndex = 0;
    carousel.addEventListener("keydown", function (e) {
      if (e.key === "ArrowLeft") { prevSlide(); restartAuto(); }
      if (e.key === "ArrowRight") { nextSlide(); restartAuto(); }
    });

    startAuto();
  }

  /* ----------------------------------------------------------------- *
   * 3. FAQ ACCORDION
   * ----------------------------------------------------------------- */
  function initFAQ() {
    const items = $$(".faq-item");
    if (!items.length) return;

    items.forEach(function (item) {
      const btn = $(".faq-question", item);
      const answer = $(".faq-answer", item);
      if (!btn || !answer) return;

      btn.addEventListener("click", function () {
        const isOpen = item.classList.contains("open");
        items.forEach(function (other) {
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
   * 4. CONTACT FORM
   * ----------------------------------------------------------------- */
  function initForm() {
    const form = $("#contact-form");
    if (!form) return;
    const success = $(".form-success", form.parentElement) || $("#form-success");

    form.addEventListener("submit", function (e) {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      if (success) {
        success.classList.add("show");
        success.scrollIntoView({ behavior: "smooth", block: "center" });
      }
      form.reset();
      $$(".field input, .field textarea", form).forEach(function (el) { el.value = ""; });
      setTimeout(function () {
        if (success) success.classList.remove("show");
      }, 6000);
    });
  }

  /* ----------------------------------------------------------------- *
   * INIT
   * ----------------------------------------------------------------- */
  function init() {
    initCountdown();
    initCarousel();
    initFAQ();
    initForm();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();