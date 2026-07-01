<?php
/* =====================================================================
 * demonstratie.php — Demonstratie 22 november 2025, Den Haag
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'demonstratie';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Demonstratie</p>
        <h1 data-split-text>Demonstratie</h1>
        <p>Op zaterdag 22 november 2025 van 12:00 tot 16:00 demonstreren we in Den Haag voor erkenning van gedupeerde kinderen.</p>
      </div>
    </section>

    <!-- EVENT HERO -->
    <section class="section section--purple center" style="min-height:70vh;padding-top:calc(var(--header-h) + 3rem);">
      <div class="container">
        <span class="reveal" style="display:inline-block;background:var(--color-secondary);color:var(--color-primary);padding:.5rem 1.25rem;border-radius:999px;font-weight:700;letter-spacing:.15em;font-size:.875rem;">22 NOVEMBER 2025</span>
        <p class="purple-shout reveal reveal-delay-1">DE TOEKOMST WACHT NIET.</p>
        <p class="purple-shout reveal reveal-delay-2">WIJ OOK NIET.</p>
        <h2 class="reveal reveal-delay-2" style="margin-top:2rem;color:var(--color-white);" data-split-text>Demonstratie in Den Haag</h2>

        <div class="demo-meta reveal reveal-delay-3">
          <span class="demo-meta-item">📅 22 november 2025</span>
          <span class="demo-meta-item">🕐 12:00 — 16:00</span>
          <span class="demo-meta-item">📍 Den Haag, Malieveld</span>
        </div>

        <p class="lead mx-auto reveal reveal-delay-3" style="color:rgba(255,255,255,0.92);max-width:760px;">
          We komen samen op het Malieveld in Den Haag om de overheid te eisen dat gedupeerde
          kinderen eindelijk erkend worden als volwaardige slachtoffers. Vier thema's, één
          boodschap: herstel begint met erkenning.
        </p>
      </div>
    </section>

    <!-- 4 THEMES -->
    <section class="section section--gray" aria-labelledby="themes-h">
      <div class="container">
        <h2 class="center reveal" id="themes-h" data-split-text>Vier thema's, één boodschap</h2>
        <p class="lead mx-auto center reveal reveal-delay-1" style="margin-bottom:var(--space-8);">
          Tijdens de demonstratie staan vier thema's centraal — de pijlers van herstel.
        </p>
        <div class="themes-grid">
          <article class="theme-card reveal">
            <h3>Erkenning</h3>
            <p>De overheid moet officieel erkennen dat kinderen van gedupeerde ouders zelf slachtoffer zijn van het toeslagenschandaal.</p>
          </article>
          <article class="theme-card reveal reveal-delay-1">
            <h3>Schulden</h3>
            <p>De financiële schade die gezinnen heeft getroffen moet volledig en duurzaam worden hersteld. Geen kind mag opgroeien met schulden door toedoen van de overheid.</p>
          </article>
          <article class="theme-card reveal reveal-delay-2">
            <h3>Werk en opleiding</h3>
            <p>De generatie die door het toeslagenschandaal is geraakt verdient perspectief op werk, opleiding en een eerlijke start in het leven.</p>
          </article>
          <article class="theme-card reveal reveal-delay-3">
            <h3>Uithuisgeplaatste kinderen</h3>
            <p>2.090 kinderen zijn uithuisgeplaatst als gevolg van het toeslagenschandaal. Zij verdienen specifieke aandacht, zorg en herstel.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Kom jij ook?</h2>
          <p>22 november 2025, 12:00-16:00 in Den Haag. Samen staan we voor erkenning.</p>
          <a class="btn btn--secondary magnetic"
             href="https://docs.google.com/forms/d/e/1FAIpQLSc-demo/formview"
             target="_blank" rel="noopener">Meld je aan via Google Form</a>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>