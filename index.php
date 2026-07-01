<?php
/* =====================================================================
 * OJPT.nl — index.php (Rebuild v3)
 * Homepage — award-winning quality
 * Sections: Hero → Demonstratie Recap → Over Ons → Onze Missie →
 *           Pijlers Carousel → Stats → Latest News → Manifest →
 *           Contact → CTA
 * ===================================================================== */

require_once 'assets/php/config.php';
$page = 'index';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

<!-- Film grain overlay (global, above all content) -->
<div class="grain-overlay" aria-hidden="true"></div>

<main id="main">

  <!-- ================================================================
       1. HERO — Full viewport, parallax background, split-text reveal
       ================================================================ -->
  <section class="hero" aria-labelledby="hero-title" id="hero"
           style="background: linear-gradient(rgba(13,5,23,0.55), rgba(77,31,107,0.88));">
    <!-- Parallax background layers -->
    <div class="parallax-bg" data-parallax="0.20"
         style="background: url('assets/images/hero-bg.png') center/cover no-repeat; opacity: 0.7;"
         aria-hidden="true"></div>
    <div class="parallax-bg" data-parallax="0.08"
         style="background: radial-gradient(circle at 50% 40%, rgba(102,45,145,0.35), transparent 60%);"
         aria-hidden="true"></div>

    <div class="hero-inner parallax-content">
      <p class="eyebrow eyebrow--white reveal">Onafhankelijk Jongerenpanel Toeslagen</p>
      <h1 class="hero-title" id="hero-title" data-split-text>ONZE TOEKOMST NU RECHTZETTEN</h1>
      <p class="hero-subtitle reveal reveal-delay-3">Samen voor erkenning, herstel en toekomstperspectief</p>
      <div class="hero-buttons reveal reveal-delay-4">
        <a class="btn btn--primary magnetic" href="#manifest">Lees ons manifest</a>
        <a class="btn btn--secondary magnetic" href="demonstratie.php">Bekijk de terugblik</a>
      </div>
    </div>

    <a href="#over-ons" class="scroll-indicator" aria-label="Scroll naar beneden"></a>
  </section>

  <!-- ================================================================
       2. DEMONSTRATIE RECAP — Purple section, event has PASSED
       ================================================================ -->
  <section class="section section--purple center" aria-labelledby="demo-h" id="demonstratie">
    <div class="container">
      <p class="eyebrow eyebrow--white reveal">22 november 2025 — Den Haag</p>
      <p class="purple-shout reveal" data-split-text>DE TOEKOMST WACHT NIET.</p>
      <p class="purple-shout reveal reveal-delay-1" data-split-text>WIJ OOK NIET.</p>
      <h2 class="reveal reveal-delay-2" id="demo-h" style="margin-top: 2rem;">De demonstratie was een succes</h2>
      <p class="lead mx-auto reveal reveal-delay-3" style="color: rgba(255,255,255,0.92); max-width: 760px;">
        Op 22 november 2025 lieten wij onze stem horen in Den Haag. Samen met gedupeerden,
        naasten en bondgenoten eisten wij erkenning voor de kinderen die slachtoffer zijn
        geworden van het toeslagenschandaal. Hun stem is jarenlang over het hoofd gezien —
        nu is het tijd om samen op te komen voor onze toekomst. De demonstratie was een
        krachtig statement: wij zijn hier, wij blijven hier, en wij geven niet op.
      </p>
      <a class="btn btn--secondary magnetic reveal reveal-delay-4" href="demonstratie.php">
        Bekijk de terugblik
      </a>
    </div>
  </section>

  <!-- ================================================================
       3. OVER ONS — Yellow split, image left, content right
       ================================================================ -->
  <section class="section section--yellow" id="over-ons" aria-labelledby="overons-h">
    <div class="container split">
      <div class="split-media reveal reveal--left">
        <img src="assets/images/demo-img.png"
             alt="Demonstratie van gedupeerde jongeren in Den Haag"
             loading="lazy" width="800" height="600" />
      </div>
      <div class="split-content reveal reveal--right reveal-delay-1">
        <p class="eyebrow eyebrow--primary">Wie wij zijn</p>
        <h2 id="overons-h" data-split-text>Over Ons</h2>
        <div class="divider"></div>
        <p>
          Wij zijn een landelijke community van gedupeerde jongeren die strijden voor een
          eerlijk herstelproces na het Toeslagenschandaal. We komen uit alle windstreken van
          Nederland en delen één missie: dat kinderen als volwaardige slachtoffers worden
          erkend en dat hun stem eindelijk wordt gehoord.
        </p>
        <p>
          Het Onafhankelijk Jongerenpanel Toeslagen (OJPT) is opgericht door en voor
          gedupeerde jongeren. Wij weten als geen ander wat het onrecht met gezinnen en
          kinderen heeft gedaan — en wij zijn de generatie die het verschil gaat maken.
        </p>
        <a class="btn btn--primary magnetic" href="over-ons.php">Maak kennis met het panel</a>
      </div>
    </div>
  </section>

  <!-- ================================================================
       4. ONZE MISSIE — Purple-soft split, reversed (content left)
       ================================================================ -->
  <section class="section section--purple-soft" aria-labelledby="missie-h" id="onze-missie">
    <div class="container split split--reverse">
      <div class="split-media reveal reveal--right">
        <img src="assets/images/hero-bg.png"
             alt="Onze missie voor rechtvaardigheid en herstel"
             loading="lazy" width="800" height="600" />
      </div>
      <div class="split-content reveal reveal--left reveal-delay-1">
        <p class="eyebrow" style="color: var(--color-secondary);">Wat wij willen</p>
        <h2 id="missie-h" data-split-text>Onze Missie</h2>
        <div class="divider"></div>
        <p>
          Wij willen dat gedupeerde kinderen worden erkend als volwaardige slachtoffers van
          het toeslagenschandaal, met dezelfde rechten en toegang tot herstel als hun ouders.
        </p>
        <p>
          Als gedupeerde kinderen willen wij actief het heft in eigen handen om het
          'ongekend onrecht' te herstellen en te verwerken. Niemand over ons, zonder ons.
        </p>
        <a class="btn btn--secondary magnetic" href="onze-missie.php">Lees onze missie</a>
      </div>
    </div>
  </section>

  <!-- ================================================================
       5. PIJLERS CAROUSEL — 4 slides
       ================================================================ -->
  <section class="carousel" aria-label="Onze pijlers" aria-roledescription="carousel" id="pijlers">
    <div class="carousel-track">
      <article class="carousel-slide" aria-roledescription="slide" aria-label="Pijler 1 van 4">
        <span class="slide-index">01 — Pijler</span>
        <h2 data-split-text>ERKENNING EN GELIJKWAARDIGHEID</h2>
        <p>
          Kinderen van gedupeerde ouders moeten erkend worden als volwaardige slachtoffers,
          met dezelfde rechten en toegang tot herstel als hun ouders. Geen
          tweede-rangsbehandeling, maar gelijkwaardigheid in elke stap van het herstelproces.
        </p>
      </article>
      <article class="carousel-slide" aria-roledescription="slide" aria-label="Pijler 2 van 4">
        <span class="slide-index">02 — Pijler</span>
        <h2 data-split-text>INSPRAAK EN PARTICIPATIE</h2>
        <p>
          Jongeren zelf moeten zeggenschap hebben over het herstelproces. Niemand over ons,
          zonder ons. Onze stem telt in beleid, uitvoering en rechtspraak — want wij zijn
          de generatie die de gevolgen draagt.
        </p>
      </article>
      <article class="carousel-slide" aria-roledescription="slide" aria-label="Pijler 3 van 4">
        <span class="slide-index">03 — Pijler</span>
        <h2 data-split-text>SCHULDEN EN FINANCIEEL HERSTEL</h2>
        <p>
          De financiële schade die gezinnen en hun kinderen heeft getroffen moet volledig en
          duurzaam worden hersteld. Geen torenhoge schulden meer door toedoen van de overheid.
          Herstel betekent: teruggave van wat is afgenomen, zonder voorwaarden die opnieuw
          kwetsen.
        </p>
      </article>
      <article class="carousel-slide" aria-roledescription="slide" aria-label="Pijler 4 van 4">
        <span class="slide-index">04 — Pijler</span>
        <h2 data-split-text>WERK, OPLEIDING EN TOEKOMST</h2>
        <p>
          De generatie die door het toeslagenschandaal is geraakt verdient perspectief. Wij
          pleiten voor kansen op werk, opleiding en een eerlijke start in het leven — want
          een toekomst bouw je samen, niet alleen.
        </p>
      </article>
    </div>
    <div class="carousel-arrows">
      <button class="carousel-arrow carousel-arrow--prev" aria-label="Vorige slide">‹</button>
      <button class="carousel-arrow carousel-arrow--next" aria-label="Volgende slide">›</button>
    </div>
    <div class="carousel-dots" role="tablist" aria-label="Kies een pijler"></div>
  </section>

  <!-- ================================================================
       6. STATS — Gray section, count-up animation
       ================================================================ -->
  <section class="section section--gray" aria-labelledby="stats-h" id="stats">
    <div class="container">
      <p class="eyebrow eyebrow--primary center reveal">Het toeslagenschandaal in getallen</p>
      <h2 class="center reveal reveal-delay-1" id="stats-h" data-split-text>De cijfers spreken boekdelen</h2>
      <p class="lead mx-auto center reveal reveal-delay-2" style="margin-bottom: var(--space-8);">
        Het toeslagenschandaal is geen abstract verhaal — het heeft echte mensenlevens
        beschadigd. Dit is de omvang, in getallen die niet te negeren zijn.
      </p>
      <div class="stats-grid stagger">
        <article class="stat-card">
          <div class="stat-number" data-count="70000" aria-label="70.000 kinderen getroffen">0</div>
          <div class="stat-label">Kinderen getroffen</div>
        </article>
        <article class="stat-card">
          <div class="stat-number" data-count="26000" aria-label="26.000 ouders gedupeerd">0</div>
          <div class="stat-label">Ouders gedupeerd</div>
        </article>
        <article class="stat-card">
          <div class="stat-number" data-count="2090" aria-label="2.090 kinderen uithuisgeplaatst">0</div>
          <div class="stat-label">Kinderen uithuisgeplaatst</div>
        </article>
        <article class="stat-card">
          <div class="stat-number" data-count="33000" data-prefix="€" aria-label="€33.000 gemiddelde schade per gezin">€0</div>
          <div class="stat-label">Gemiddelde schade per gezin</div>
        </article>
      </div>
    </div>
  </section>

  <!-- ================================================================
       7. LATEST NEWS — Persbericht featured
       ================================================================ -->
  <section class="section" aria-labelledby="news-h" id="laatste-nieuws">
    <div class="container">
      <p class="eyebrow eyebrow--primary center reveal">Blijf op de hoogte</p>
      <h2 class="center reveal reveal-delay-1" id="news-h" data-split-text>Laatste nieuws</h2>
      <p class="lead mx-auto center reveal reveal-delay-2" style="margin-bottom: var(--space-8);">
        Wat beweegt OJPT? Hier vind je onze laatste berichten, persbrieven en updates.
      </p>

      <article class="news-card card reveal reveal--scale" style="max-width: 880px; margin-inline: auto;">
        <a href="persbericht.php" class="news-card-img" aria-label="Lees het persbericht over studieschulden ongedaan maken">
          <img src="assets/images/persbericht/persbericht-brandbrief.jpg"
               alt="Persbericht en brandbrief over studieschulden ongedaan maken"
               loading="lazy" />
        </a>
        <div class="news-card-body">
          <p class="card-tag">Persbericht</p>
          <time datetime="2026-06-29" style="display: block; font-size: var(--text-sm); color: var(--color-gray); margin-top: var(--space-2);">
            29 juni 2026
          </time>
          <h3 style="margin-top: var(--space-3);">
            Persbericht &amp; Brandbrief: Studieschulden ongedaan maken
          </h3>
          <p style="color: var(--color-text-body); margin-top: var(--space-3);">
            Samen met de lokale kinderombudsmannen, de VNG en de IBTD brengen wij een
            dringend advies naar buiten: de studieschulden die zijn ontstaan door het
            toeslagenschandaal moeten ongedaan worden gemaakt. Geen gedupeerde jongere
            mag opnieuw de prijs betalen voor een onrecht dat de overheid heeft begaan.
          </p>
          <a href="persbericht.php" class="link-underline" style="color: var(--color-primary); margin-top: var(--space-4); display: inline-block;">
            Lees meer →
          </a>
        </div>
      </article>
    </div>
  </section>

  <!-- ================================================================
       8. MANIFEST — Dark section, split-text heading
       ================================================================ -->
  <section class="section section--dark center" id="manifest" aria-labelledby="manifest-h">
    <div class="container">
      <p class="eyebrow eyebrow--white reveal">Ons doel op papier</p>
      <h2 class="reveal reveal-delay-1" id="manifest-h" data-split-text>ONS MANIFEST</h2>
      <div class="divider mx-auto reveal reveal-delay-1"></div>
      <p class="manifest-text mx-auto reveal reveal-delay-2">
        Het manifest van het Onafhankelijk Jongerenpanel Toeslagen is een oproep tot
        rechtvaardigheid voor de kinderen die slachtoffer zijn van het toeslagenschandaal.
        Het beschrijft onze pijlers — erkenning, gelijkwaardigheid, inspraak, financieel
        herstel en toekomstperspectief — en eist van de overheid dat deze generatie niet
        wordt vergeten. Lees het volledige document en sluit je bij ons aan.
      </p>
      <a class="btn btn--secondary magnetic reveal reveal-delay-3"
         href="https://drive.google.com/file/d/1xYj2h3K4l5m6N7o8p9q0r1s2t3u4v5w6/view"
         target="_blank" rel="noopener">
        Bekijk het manifest
      </a>
    </div>
  </section>

  <!-- ================================================================
       9. CONTACT — Gray section, contact cards + form
       ================================================================ -->
  <section class="section section--gray" id="contact" aria-labelledby="contact-h">
    <div class="container">
      <p class="eyebrow eyebrow--primary center reveal">We horen graag van je</p>
      <h2 class="center reveal reveal-delay-1" id="contact-h" data-split-text>Neem contact op</h2>
      <p class="lead mx-auto center reveal reveal-delay-2" style="margin-bottom: var(--space-8);">
        Vragen, samenwerking of gewoon een berichtje? We horen graag van je. Samen staan
        we sterker.
      </p>

      <div class="contact-grid">
        <!-- Contact cards -->
        <div class="contact-cards reveal reveal--left">
          <a class="contact-card" href="mailto:info@ojpt.nl">
            <div class="contact-icon" aria-hidden="true">✉</div>
            <div>
              <h3>Mail ons</h3>
              <p>info@ojpt.nl</p>
            </div>
          </a>
          <a class="contact-card" href="https://chat.whatsapp.com/" target="_blank" rel="noopener">
            <div class="contact-icon" aria-hidden="true">💬</div>
            <div>
              <h3>WhatsApp groep</h3>
              <p>Sluit je aan bij onze community</p>
            </div>
          </a>
          <a class="contact-card" href="https://www.instagram.com/jongerenpaneltoeslagen" target="_blank" rel="noopener">
            <div class="contact-icon" aria-hidden="true">◎</div>
            <div>
              <h3>Instagram</h3>
              <p>@jongerenpaneltoeslagen</p>
            </div>
          </a>
        </div>

        <!-- Contact form with floating labels -->
        <form class="form reveal reveal--right reveal-delay-1" id="contact-form" novalidate
              aria-label="Contactformulier">
          <div class="form-success" id="form-success" role="status">
            Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.
          </div>
          <div class="field">
            <input type="text" id="naam" name="naam" placeholder=" " required autocomplete="name" />
            <label for="naam">Naam</label>
          </div>
          <div class="field">
            <input type="email" id="email" name="email" placeholder=" " required autocomplete="email" />
            <label for="email">E-mailadres</label>
          </div>
          <div class="field">
            <input type="text" id="onderwerp" name="onderwerp" placeholder=" " />
            <label for="onderwerp">Onderwerp</label>
          </div>
          <div class="field">
            <textarea id="bericht" name="bericht" placeholder=" " required></textarea>
            <label for="bericht">Bericht</label>
          </div>
          <button type="submit" class="btn btn--primary btn--block magnetic">Verstuur bericht</button>
        </form>
      </div>
    </div>
  </section>

  <!-- ================================================================
       10. CTA — Call to action banner
       ================================================================ -->
  <section class="section--tight" aria-labelledby="cta-h">
    <div class="container">
      <div class="cta-banner reveal reveal--scale">
        <h2 id="cta-h" data-split-text>Klaar om mee te doen?</h2>
        <p>Sluit je aan bij de beweging en help onze toekomst nu recht te zetten.</p>
        <div class="hero-buttons" style="justify-content: center; margin-top: var(--space-6);">
          <a class="btn btn--secondary magnetic" href="https://chat.whatsapp.com/" target="_blank" rel="noopener">
            Sluit je aan
          </a>
          <a class="btn btn--ghost magnetic" href="doneren.php">Steun ons</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'assets/php/footer.php'; ?>