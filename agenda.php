<?php
/* =====================================================================
 * agenda.php — Evenementen & bijeenkomsten
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'agenda';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Agenda</p>
        <h1 data-split-text>Agenda</h1>
        <p>Blijf op de hoogte van (onze) evenementen en bijeenkomsten die speciaal voor gedupeerde jongeren worden georganiseerd.</p>
      </div>
    </section>

    <!-- AGENDA -->
    <section class="section section--gray" aria-labelledby="agenda-h">
      <div class="container">
        <h2 class="center reveal" id="agenda-h" data-split-text>Geplande evenementen</h2>
        <p class="lead mx-auto center reveal reveal-delay-1" style="margin-bottom:var(--space-7);">
          Momenteel staan er geen aankomende evenementen gepland in de agenda. We werken achter
          de schermen aan nieuwe acties, bijeenkomsten en momenten waar we samen voor erkenning
          en herstel kunnen strijden.
        </p>

        <div class="reveal reveal-delay-2" style="max-width:640px;margin:0 auto;text-align:center;padding:2.5rem 1.5rem;background:var(--color-white);border:1px solid var(--color-border);border-radius:16px;box-shadow:var(--shadow-sm);">
          <div style="font-size:3rem;line-height:1;margin-bottom:1rem;" aria-hidden="true">📅</div>
          <h3 style="margin-bottom:.5rem;">Nog geen aankomende evenementen</h3>
          <p style="color:var(--color-text-muted);margin-bottom:1.5rem;">
            Zodra we een nieuwe datum vastleggen, delen we dat direct op onze kanalen. Volg ons
            op Instagram om als eerste te weten wanneer de volgende actie of bijeenkomst plaatsvindt.
          </p>
          <a class="btn btn--secondary magnetic"
             href="https://www.instagram.com/jongerenpaneltoeslagen"
             target="_blank" rel="noopener">
            Volg ons op Instagram
          </a>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Blijf op de hoogte</h2>
          <p>Wil je als eerste weten wanneer we een nieuw evenement aankondigen? Volg ons op Instagram of sluit je aan bij de WhatsApp groep.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic"
               href="https://www.instagram.com/jongerenpaneltoeslagen"
               target="_blank" rel="noopener">
              Volg ons op Instagram
            </a>
            <a class="btn btn--ghost magnetic" href="contact.php">Neem contact op</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>