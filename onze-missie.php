<?php
/* =====================================================================
 * onze-missie.php — Missie, visie en vijf pijlers
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'onze-missie';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Onze missie</p>
        <h1 data-split-text>Onze Missie</h1>
        <p>Wij willen dat gedupeerde kinderen worden erkend als volwaardige slachtoffers van het toeslagenschandaal, met dezelfde rechten als hun ouders.</p>
      </div>
    </section>

    <!-- VISIE -->
    <section class="section" aria-labelledby="visie-h">
      <div class="container split">
        <div class="split-media reveal">
          <img src="assets/images/hero-bg.png" alt="Gedupeerde jongeren opkomen voor hun toekomst" loading="lazy" />
        </div>
        <div class="split-content reveal reveal-delay-1">
          <p class="eyebrow" style="color:var(--color-primary);letter-spacing:.2em;">Onze visie</p>
          <h2 id="visie-h" data-split-text>Onze Visie</h2>
          <div class="divider"></div>
          <p>
            Het toeslagenschandaal heeft duizenden gezinnen geraakt en ook hun kinderen diep
            beschadigd. Als gedupeerde kinderen willen wij actief het heft in eigen hand om het
            'ongekend onrecht' te herstellen en te verwerken.
          </p>
          <p>
            Wij geloven dat herstel niet alleen om geld gaat, maar om erkenning, inspraak en
            toekomstperspectief. Onze missie is in vijf pijlers vastgelegd.
          </p>
        </div>
      </div>
    </section>

    <!-- 5 PIJLERS: WAT WIJ DOEN -->
    <section class="section section--gray" aria-labelledby="pijlers-h">
      <div class="container">
        <p class="eyebrow center reveal">Wat wij doen</p>
        <h2 class="center reveal reveal-delay-1" id="pijlers-h" data-split-text>Onze 5 pijlers</h2>
        <p class="lead mx-auto center reveal reveal-delay-2" style="margin-bottom:var(--space-8);">
          De fundamenten waarop OJPT haar strijd voert.
        </p>
        <div class="pijlers-grid">
          <div class="pijler reveal">
            <div class="pijler-number">01</div>
            <h3>Erkenning</h3>
            <p>Kinderen van gedupeerde ouders moeten erkend worden als volwaardige slachtoffers met eigen rechten en eigen hersteltraject.</p>
          </div>
          <div class="pijler reveal reveal-delay-1">
            <div class="pijler-number">02</div>
            <h3>Gelijkwaardigheid</h3>
            <p>De schade van kinderen is niet minder dan die van ouders. Gelijkwaardige behandeling in beleid, uitvoering en rechtspraak is het uitgangspunt.</p>
          </div>
          <div class="pijler reveal reveal-delay-2">
            <div class="pijler-number">03</div>
            <h3>Bewustwording</h3>
            <p>De samenleving moet weten wat deze generatie heeft meegemaakt. Onderwijs, media en beleid dragen hierin verantwoordelijkheid.</p>
          </div>
          <div class="pijler reveal reveal-delay-3">
            <div class="pijler-number">04</div>
            <h3>Herstel</h3>
            <p>Financieel, mentaal en sociaal herstel. Geen schulden meer door toedoen van de overheid, wel toegang tot zorg en perspectief.</p>
          </div>
          <div class="pijler reveal reveal-delay-4">
            <div class="pijler-number">05</div>
            <h3>Inspraak</h3>
            <p>Niets over ons, zonder ons. Jongeren hebben zeggenschap over het herstelproces dat hun toekomst bepaalt.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- IMPACT -->
    <section class="section section--purple" aria-labelledby="impact-h">
      <div class="container center">
        <p class="eyebrow reveal" style="color:var(--color-secondary);">Onze impact</p>
        <h2 class="reveal reveal-delay-1" id="impact-h" style="color:var(--color-secondary);" data-split-text>Van onzichtbaar naar onmisbaar</h2>
        <div class="divider mx-auto reveal reveal-delay-1"></div>
        <p class="lead mx-auto reveal reveal-delay-2" style="color:rgba(255,255,255,0.92);max-width:760px;">
          Sinds onze oprichting brengen wij de stem van gedupeerde jongeren naar de politiek, de
          media en de samenleving. We organiseerden een landelijke demonstratie, brachten een
          persbericht uit over studieschulden en presenteren een manifest met vijf concrete
          eisen. Maar er is nog veel te doen — erkenning begint pas als álle kinderen geteld
          worden.
        </p>
      </div>
    </section>

    <!-- DOE MEE CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Doe mee</h2>
          <p>Erkenning begint met zichtbaarheid. Deel ons verhaal, demonstreer mee of steun ons financieel.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic" href="doneren.php">Steun ons</a>
            <a class="btn btn--ghost magnetic" href="contact.php">Neem contact op</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>