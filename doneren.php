<?php
/* =====================================================================
 * doneren.php — Steun OJPT
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'doneren';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Doneren</p>
        <h1 data-split-text>Steun OJPT</h1>
        <p>Met jouw bijdrage maken we actie, zichtbaarheid en herstel mogelijk voor gedupeerde kinderen. Elke donatie telt.</p>
      </div>
    </section>

    <!-- DONATIEKAARTEN -->
    <section class="section section--gray" id="donatie" aria-labelledby="don-h">
      <div class="container">
        <h2 class="center reveal" id="don-h" data-split-text>Kies een bedrag</h2>
        <p class="lead mx-auto center reveal reveal-delay-1" style="margin-bottom:var(--space-8);">
          Kies de optie die bij je past. Je kunt eenmalig of structureel doneren.
        </p>

        <div class="donate-grid">
          <article class="donate-card reveal">
            <div class="donate-amount">€10</div>
            <h3>Eenmalige bijdrage</h3>
            <p>Een kleine bijdrage met grote impact.</p>
            <ul>
              <li>Bijdrage aan drukwerk en flyers</li>
              <li>Naam op de supporterslijst</li>
              <li>Nieuwsbrief per e-mail</li>
            </ul>
            <a class="btn btn--primary btn--block magnetic" href="mailto:info@ojpt.nl?subject=Donatie%20%E2%82%AC10">Doneer €10</a>
          </article>

          <article class="donate-card featured reveal reveal-delay-1">
            <span class="badge-popular">Meest gekozen</span>
            <div class="donate-amount">€25</div>
            <h3>Meest gekozen</h3>
            <p>Help ons de demonstratie organiseren.</p>
            <ul>
              <li>Bijdrage aan spandoeken en materiaal</li>
              <li>Toegang tot community-bijeenkomsten</li>
              <li>Vermelding in jaarverslag</li>
              <li>Nieuwsbrief + exclusieve updates</li>
            </ul>
            <a class="btn btn--secondary btn--block magnetic" href="mailto:info@ojpt.nl?subject=Donatie%20%E2%82%AC25">Doneer €25</a>
          </article>

          <article class="donate-card reveal reveal-delay-2">
            <div class="donate-amount">€50</div>
            <h3>Vriend van OJPT</h3>
            <p>Word eenstructurele vriend van onze beweging.</p>
            <ul>
              <li>Bijdrage aan zichtbaarheid in media</li>
              <li>Toegang tot paneldiscussies</li>
              <li>Persoonlijk bedankje van het panel</li>
              <li>Vermelding in jaarverslag</li>
            </ul>
            <a class="btn btn--primary btn--block magnetic" href="mailto:info@ojpt.nl?subject=Donatie%20%E2%82%AC50">Doneer €50</a>
          </article>

          <article class="donate-card reveal reveal-delay-3">
            <div class="donate-amount">€100+</div>
            <h3>Beschermengel</h3>
            <p>Maak blijvende impact mogelijk.</p>
            <ul>
              <li>Structuur voor hersteltrajecten</li>
              <li>Uitnodiging paneldiscussies</li>
              <li>Persoonlijk bedankje van het panel</li>
              <li>Naam op de supportersmuur</li>
            </ul>
            <a class="btn btn--primary btn--block magnetic" href="mailto:info@ojpt.nl?subject=Donatie%20%E2%82%AC100%2B">Doneer €100+</a>
          </article>
        </div>

        <p class="center reveal reveal-delay-3" style="margin-top:var(--space-6);color:var(--color-text-muted);font-size:.875rem;">
          We hebben momenteel nog geen automatische betaalverwerker. Stuur ons een e-mail en we
          regelen de donatie samen met je.
        </p>
      </div>
    </section>

    <!-- WAAR GAAT JE DONATIE NAARTOE -->
    <section class="section section--purple" aria-labelledby="why-h">
      <div class="container split">
        <div class="split-media reveal">
          <img src="assets/images/demo-img.png" alt="Jongeren opkomen voor erkenning" loading="lazy" />
        </div>
        <div class="split-content reveal reveal-delay-1">
          <p class="eyebrow" style="color:var(--color-secondary);letter-spacing:.2em;">Waarvoor</p>
          <h2 id="why-h" style="color:var(--color-secondary);" data-split-text>Waar gaat je donatie naartoe?</h2>
          <div class="divider"></div>
          <p style="color:rgba(255,255,255,0.92);">
            OJPT is een vrijwilligersorganisatie. Jouw donatie gaat direct naar de kosten van onze
            acties: de demonstratie op 22 november, drukwerk, spandoeken, vergaderruimtes en de
            zichtbaarheid van onze boodschap in de media.
          </p>
          <p style="color:rgba(255,255,255,0.92);">
            We houden transparant bij hoe we onze middelen inzetten — vragen over de financiën
            stellen we graag open.
          </p>
          <a class="btn btn--secondary magnetic" href="contact.php">Vraag het na</a>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Elke bijdrage telt</h2>
          <p>Samen maken we erkenning voor gedupeerde kinderen mogelijk.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic" href="mailto:info@ojpt.nl">Doneer nu</a>
            <a class="btn btn--ghost magnetic" href="demonstratie.php">Demonstreer mee</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>