/* =====================================================================
 * OJPT.nl — animations.js
 * Scroll reveals, parallax, split text, magnetic buttons, cursor
 * ===================================================================== */

(function () {
  "use strict";

  const { $, $$, prefersReducedMotion } = window.OJPT;

  /* ----------------------------------------------------------------- *
   * 1. SCROLL REVEAL via IntersectionObserver
   *    with 2.5s fallback timeout for GitHub Pages / headless
   * ----------------------------------------------------------------- */
  function initReveal() {
    const items = $$(".reveal, .stagger");
    if (!items.length) return;

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
      items.forEach(function (el) { el.classList.add("visible"); });
      return;
    }

    const obs = new IntersectionObserver(
      function (entries, o) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            o.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );

    items.forEach(function (el) { obs.observe(el); });

    // Fallback: force all visible after 2.5s
    setTimeout(function () {
      items.forEach(function (el) {
        if (!el.classList.contains("visible")) el.classList.add("visible");
      });
    }, 2500);
  }

  /* ----------------------------------------------------------------- *
   * 2. PARALLAX SCROLL EFFECT
   *    Moves background layers at different speeds based on scroll
   * ----------------------------------------------------------------- */
  function initParallax() {
    if (prefersReducedMotion) return;
    const layers = $$("[data-parallax]");
    if (!layers.length) return;

    let ticking = false;

    function onScroll() {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        const y = window.scrollY;
        layers.forEach(function (layer) {
          const speed = parseFloat(layer.dataset.parallax) || 0.3;
          const offset = y * speed;
          layer.style.transform = "translate3d(0, " + offset + "px, 0)";
        });
        ticking = false;
      });
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  /* ----------------------------------------------------------------- *
   * 3. SPLIT TEXT — wraps each word in a span for staggered reveal
   * ----------------------------------------------------------------- */
  function initSplitText() {
    const elements = $$("[data-split-text]");
    if (!elements.length || prefersReducedMotion) return;

    elements.forEach(function (el) {
      const text = el.textContent;
      const words = text.split(" ");
      el.innerHTML = words.map(function (word) {
        return '<span>' + word + '&nbsp;</span>';
      }).join("");
      el.classList.add("split-text");

      // Observe and reveal
      const obs = new IntersectionObserver(function (entries, o) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            o.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      obs.observe(el);
    });
  }

  /* ----------------------------------------------------------------- *
   * 4. STATS COUNT-UP
   *    Animates numbers from 0 to target when scrolled into view
   * ----------------------------------------------------------------- */
  function initCountUp() {
    const stats = $$("[data-count]");
    if (!stats.length || prefersReducedMotion) {
      stats.forEach(function (s) { s.textContent = s.dataset.count; });
      return;
    }

    const obs = new IntersectionObserver(function (entries, o) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const target = parseFloat(el.dataset.count);
        const suffix = el.dataset.suffix || "";
        const prefix = el.dataset.prefix || "";
        const duration = 2000;
        const start = performance.now();

        function animate(now) {
          const elapsed = now - start;
          const progress = Math.min(elapsed / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          const value = Math.floor(eased * target);
          el.textContent = prefix + value.toLocaleString("nl-NL") + suffix;
          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            el.textContent = prefix + target.toLocaleString("nl-NL") + suffix;
          }
        }

        requestAnimationFrame(animate);
        o.unobserve(el);
      });
    }, { threshold: 0.5 });

    stats.forEach(function (s) { obs.observe(s); });
  }

  /* ----------------------------------------------------------------- *
   * 5. MAGNETIC BUTTONS
   *    Buttons that subtly follow the cursor when hovered
   * ----------------------------------------------------------------- */
  function initMagnetic() {
    if (prefersReducedMotion) return;
    const magnets = $$(".magnetic");
    if (!magnets.length) return;

    magnets.forEach(function (el) {
      el.addEventListener("mousemove", function (e) {
        const rect = el.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        const strength = 0.3;
        el.style.transform = "translate(" + (x * strength) + "px, " + (y * strength) + "px)";
      });
      el.addEventListener("mouseleave", function () {
        el.style.transform = "translate(0, 0)";
      });
    });
  }

  /* ----------------------------------------------------------------- *
   * 6. CUSTOM CURSOR (desktop only)
   * ----------------------------------------------------------------- */
  function initCursor() {
    if (prefersReducedMotion) return;
    if (window.matchMedia("(pointer: coarse)").matches) return;

    const dot = document.createElement("div");
    const ring = document.createElement("div");
    dot.className = "cursor-dot";
    ring.className = "cursor-ring";
    document.body.appendChild(dot);
    document.body.appendChild(ring);

    let mouseX = 0, mouseY = 0;
    let ringX = 0, ringY = 0;

    document.addEventListener("mousemove", function (e) {
      mouseX = e.clientX;
      mouseY = e.clientY;
      dot.style.transform = "translate(" + mouseX + "px, " + mouseY + "px)";
    });

    function animateRing() {
      ringX += (mouseX - ringX) * 0.15;
      ringY += (mouseY - ringY) * 0.15;
      ring.style.transform = "translate(" + ringX + "px, " + ringY + "px)";
      requestAnimationFrame(animateRing);
    }
    animateRing();

    // Grow ring on hoverable elements
    $$("a, button, .btn, .card, .contact-card").forEach(function (el) {
      el.addEventListener("mouseenter", function () {
        ring.style.width = "60px";
        ring.style.height = "60px";
        ring.style.borderColor = "var(--color-secondary)";
      });
      el.addEventListener("mouseleave", function () {
        ring.style.width = "40px";
        ring.style.height = "40px";
        ring.style.borderColor = "var(--color-primary)";
      });
    });
  }

  /* ----------------------------------------------------------------- *
   * 7. HERO PARALLAX — subtle background movement on scroll
   * ----------------------------------------------------------------- */
  function initHeroParallax() {
    if (prefersReducedMotion) return;
    const hero = $(".hero");
    if (!hero) return;

    let ticking = false;
    window.addEventListener("scroll", function () {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(function () {
        const y = window.scrollY;
        if (y < window.innerHeight) {
          const inner = $(".hero-inner");
          if (inner) {
            inner.style.transform = "translateY(" + (y * 0.4) + "px)";
            inner.style.opacity = String(Math.max(1 - y / 600, 0));
          }
        }
        ticking = false;
      });
    }, { passive: true });
  }

  /* ----------------------------------------------------------------- *
   * 8. SECTION VISUAL INDICATOR — active section in nav
   * ----------------------------------------------------------------- */
  function initSectionObserver() {
    const sections = $$("section[id]");
    if (!sections.length) return;

    const navLinks = $$(".nav-link");
    const obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const id = entry.target.id;
          navLinks.forEach(function (link) {
            link.classList.toggle("active",
              link.getAttribute("href") === "#" + id);
          });
        }
      });
    }, { threshold: 0.3, rootMargin: "-80px 0px -50% 0px" });

    sections.forEach(function (s) { obs.observe(s); });
  }

  /* ----------------------------------------------------------------- *
   * INIT
   * ----------------------------------------------------------------- */
  function init() {
    initReveal();
    initParallax();
    initSplitText();
    initCountUp();
    initMagnetic();
    initCursor();
    initHeroParallax();
    initSectionObserver();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();