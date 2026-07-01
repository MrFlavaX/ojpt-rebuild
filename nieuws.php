<?php
/* =====================================================================
 * nieuws.php — Nieuws & Updates
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'nieuws';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Nieuws</p>
        <h1 data-split-text>Nieuws &amp; Updates</h1>
        <p>Blijf op de hoogte van onze acties, het herstelproces en de aanloop naar de demonstratie.</p>
      </div>
    </section>

    <!-- NIEUWS GRID -->
    <section class="section section--gray">
      <div class="container">
        <div class="card-grid">

          <!-- 1: PERSBERICHT -->
          <article class="card news-card reveal">
            <div class="news-card-img">
              <img src="assets/images/persbericht/persbericht-brandbrief.jpg"
                   alt="Persbericht en brandbrief over studieschulden gedupeerde jongeren"
                   loading="lazy" />
            </div>
            <div class="news-card-body">
              <span class="card-tag" style="background:var(--color-primary);color:var(--color-secondary);">NIEUW 🚨</span>
              <span class="card-tag">Persbericht</span>
              <h3>Persbericht &amp; Brandbrief: Studieschulden ongedaan maken</h3>
              <p>
                Samen met de lokale kinderombudsmannen, de VNG en de IBTD brengen wij een dringend
                advies naar buiten. Stop met het verwijzen naar regelingen die niet werken en los
                de studieschulden van gedupeerde jongeren nú op.
              </p>
              <a class="link-underline" href="persbericht.php" style="color:var(--color-primary);">Lees meer →</a>
            </div>
          </article>

          <!-- 2: DEMONSTRATIE -->
          <article class="card news-card reveal reveal-delay-1">
            <div class="news-card-img">
              <img src="assets/images/demo-img.png"
                   alt="Aankondiging van de demonstratie op 22 november 2025"
                   loading="lazy" />
            </div>
            <div class="news-card-body">
              <span class="card-tag">Aankondiging</span>
              <h3>Demonstratie 22 november 2025 in Den Haag</h3>
              <p>
                Op zaterdag 22 november komen we samen op het Malieveld om erkenning te eisen voor
                gedupeerde kinderen. Bekijk de vier thema's en meld je aan.
              </p>
              <a class="link-underline" href="demonstratie.php" style="color:var(--color-primary);">Lees meer →</a>
            </div>
          </article>

          <!-- 3: MANIFEST -->
          <article class="card news-card reveal reveal-delay-2">
            <div class="news-card-img">
              <img src="assets/images/hero-bg.png" alt="Manifest OJPT gepresenteerd" loading="lazy" />
            </div>
            <div class="news-card-body">
              <span class="card-tag">Manifest</span>
              <h3>Ons manifest is gepresenteerd</h3>
              <p>
                Het manifest van OJPT bundelt onze vijf pijlers — erkenning, gelijkwaardigheid,
                bewustwording, herstel en inspraak — tot één oproep tot rechtvaardigheid voor
                gedupeerde kinderen. Lees de volledige tekst online.
              </p>
              <a class="link-underline" href="onze-missie.php" style="color:var(--color-primary);">Bekijk het manifest →</a>
            </div>
          </article>

          <!-- 4: PANEL -->
          <article class="card news-card reveal reveal-delay-1">
            <div class="news-card-img">
              <img src="assets/images/logo-paars.png" alt="Nieuwe panelleden verwelkomd" loading="lazy" />
            </div>
            <div class="news-card-body">
              <span class="card-tag">Panel</span>
              <h3>Nieuwe panelleden aan boord</h3>
              <p>
                Het panel groeit. We verwelkomen nieuwe gemotiveerde jongeren die meedragen aan de
                beweging voor erkenning en herstel. Wil jij ook meedoen?
              </p>
              <a class="link-underline" href="over-ons.php" style="color:var(--color-primary);">Maak kennis →</a>
            </div>
          </article>

          <!-- 5: MEDIA -->
          <article class="card news-card reveal reveal-delay-2">
            <div class="news-card-img">
              <img src="assets/images/logo-500.png" alt="OJPT in de media" loading="lazy" />
            </div>
            <div class="news-card-body">
              <span class="card-tag">Media</span>
              <h3>OJPT in de media</h3>
              <p>
                Ons verhaal wordt steeds vaker gehoord. Lees de interviews en reportages waarin
                panelleden het woord voeren namens gedupeerde kinderen.
              </p>
              <a class="link-underline" href="contact.php" style="color:var(--color-primary);">Meer info →</a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Wil je op de hoogte blijven?</h2>
          <p>Volg ons op Instagram of sluit je aan bij de WhatsApp groep voor updates.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic" href="https://www.instagram.com/jongerenpaneltoeslagen" target="_blank" rel="noopener">Volg ons op Instagram</a>
            <a class="btn btn--ghost magnetic" href="agenda.php">Bekijk de agenda</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>