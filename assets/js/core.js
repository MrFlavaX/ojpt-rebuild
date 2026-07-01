/* =====================================================================
 * OJPT.nl — core.js
 * Header, mobile menu, nav, smooth scroll, scroll progress
 * ===================================================================== */

(function () {
  "use strict";

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
    let ticking = false;

    function onScroll() {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
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
        ticking = false;
      });
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", onScroll, { passive: true });
    onScroll();
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

    burger.addEventListener("click", function () { toggle(); });
    overlay && overlay.addEventListener("click", function () { toggle(false); });
    $$(".mobile-menu a").forEach(function (a) {
      a.addEventListener("click", function () { toggle(false); });
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && menu.classList.contains("open")) toggle(false);
    });
  }

  /* ----------------------------------------------------------------- *
   * 3. SMOOTH SCROLL for anchor links
   * ----------------------------------------------------------------- */
  function initSmoothScroll() {
    if (prefersReducedMotion) return;
    $$('a[href^="#"]').forEach(function (link) {
      link.addEventListener("click", function (e) {
        const id = link.getAttribute("href");
        if (id.length <= 1) return;
        const target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.scrollY - 70;
        window.scrollTo({ top: top, behavior: "smooth" });
      });
    });
  }

  /* ----------------------------------------------------------------- *
   * 4. ACTIVE NAV HIGHLIGHT
   * ----------------------------------------------------------------- */
  function initActiveNav() {
    const path = location.pathname.split("/").pop() || "index.php";
    const cleanPath = path.replace(".php", ".html");
    $$(".nav-list a, .mobile-menu a").forEach(function (a) {
      const href = a.getAttribute("href");
      if (href === path || href === cleanPath || href === path.replace(".php", "") ||
          (path === "index.php" && href === "index.php")) {
        a.classList.add("active");
      }
    });
  }

  /* ----------------------------------------------------------------- *
   * 5. YEAR in footer
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
    initActiveNav();
    initYear();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }

  // Export for other scripts
  window.OJPT = { $: $, $$: $$, prefersReducedMotion: prefersReducedMotion };
})();