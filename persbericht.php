<?php
/* =====================================================================
 * persbericht.php — Persbericht & Brandbrief (29 juni 2026)
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'persbericht';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- HERO -->
    <section class="section section--purple center" style="min-height:70vh;padding-top:calc(var(--header-h) + 3rem);">
      <div class="container">
        <span class="reveal" style="display:inline-block;background:var(--color-secondary);color:var(--color-primary);padding:.5rem 1.25rem;border-radius:999px;font-weight:700;letter-spacing:.15em;font-size:.875rem;">29 JUNI 2026 · PERSBERICHT</span>
        <h1 class="reveal reveal-delay-1" style="color:var(--color-white);max-width:900px;margin:1rem auto;" data-split-text>
          PERSBERICHT &amp; BRANDBRIEF NU ONLINE 🚨
        </h1>
        <p class="lead mx-auto reveal reveal-delay-2" style="color:rgba(255,255,255,0.92);max-width:760px;">
          Samen met de lokale kinderombudsmannen, de VNG en de IBTD brengen wij een dringend advies
          naar buiten: los de studieschulden van gedupeerde jongeren nú op.
        </p>
      </div>
    </section>

    <!-- ARTICLE BODY -->
    <section class="section section--gray">
      <div class="container" style="max-width:800px;">
        <div class="news-card-img reveal" style="border-radius:12px;overflow:hidden;margin-bottom:2rem;">
          <img src="assets/images/persbericht/persbericht-brandbrief.jpg"
               alt="Persbericht en brandbrief OJPT over studieschulden gedupeerde jongeren"
               loading="lazy" />
        </div>

        <div class="news-meta reveal reveal-delay-1" style="display:flex;gap:1.5rem;flex-wrap:wrap;margin-bottom:2rem;font-size:0.875rem;color:var(--color-text-muted);">
          <span>📅 29 juni 2026</span>
          <span>📂 Categorie: <a href="nieuws.php" style="color:var(--color-primary);font-weight:600;">Nieuws</a></span>
        </div>

        <article class="article-content reveal reveal-delay-1" style="font-size:1.0625rem;line-height:1.8;color:var(--color-text);">
          <p>
            Samen met de lokale kinderombudsmannen, de VNG en de IBTD brengen wij vandaag een
            dringend advies naar buiten. Onze boodschap aan de politiek: stop met het verwijzen
            naar regelingen die niet werken en los de studieschulden van gedupeerde jongeren nú op.
          </p>
          <p>
            Het is een onzichtbaar onrecht. Veel kinderen van gedupeerde ouders moesten maximaal
            lenen bij DUO – niet voor hun studie, maar om hun gezin te helpen overleven. Terwijl de
            schulden van ouders zijn kwijtgescholden, dragen jongeren nog steeds de lasten van een
            crisis die zij niet hebben veroorzaakt.
          </p>
          <p>
            Wij eisen een gerichte aanpak om deze studieschulden kwijt te schelden. Het is tijd dat
            de overheid de verantwoordelijkheid neemt voor het onrecht dat zij deze generatie heeft
            aangedaan — en dat begint met erkennen dat ook deze jongeren slachtoffer zijn.
          </p>

          <!-- CTA BOX -->
          <div class="cta-box reveal" style="margin:2.5rem 0;padding:1.5rem 2rem;background:var(--color-secondary);border-radius:12px;border:2px solid var(--color-primary);">
            <h3 style="color:var(--color-primary);margin-bottom:0.75rem;">📄 Lees de volledige brief</h3>
            <p style="margin-bottom:1rem;">
              De officiële brief is gepubliceerd door de Inspectie Belastingdienst en Douane (IBTD).
            </p>
            <a class="btn btn--primary magnetic"
               href="https://www.inspectiebtd.nl/site/binaries/site-content/collections/documents/2026/06/30/jongeren-met-studieschuld-als-gevolg-van-het-toeslagenschandaal-nog-steeds-in-de-knel/jongeren-met-studieschuld-als-gevolg-van-het-toeslagenschandaal-nog-steeds-in-de-knel.pdf"
               target="_blank" rel="noopener">
              Bekijk volledige brief (PDF) →
            </a>
          </div>

          <h2 style="color:var(--color-primary);margin-top:2.5rem;margin-bottom:1rem;">Waarom dit belangrijk is</h2>
          <p>
            Het toeslagenschandaal heeft ongeveer 70.000 kinderen getroffen. Veel van deze jongeren
            moesten als gevolg van de financiële problemen thuis geld lenen bij DUO — niet om te
            studeren, maar om het gezin te helpen overleven. Deze studieschulden dragen zij nog
            steeds met zich mee.
          </p>
          <p>
            Terwijl de schulden van hun ouders zijn kwijtgescholden, worden deze jongeren nog steeds
            geacht hun studieschulden terug te betalen. Dat is onrechtvaardig. De schulden zijn een
            direct gevolg van het onrecht dat de overheid deze gezinnen heeft aangedaan.
          </p>

          <h2 style="color:var(--color-primary);margin-top:2.5rem;margin-bottom:1rem;">Onze eis</h2>
          <p>
            Wij eisen dat de overheid deze studieschulden gericht kwijtscheldt. Stop met het
            verwijzen naar algemene regelingen die niet werken voor deze specifieke groep. Er is een
            gerichte aanpak nodig die de unieke situatie van gedupeerde jongeren erkent.
          </p>
        </article>

        <!-- POST NAVIGATION -->
        <nav class="post-nav reveal" style="margin-top:3rem;padding-top:2rem;border-top:1px solid var(--color-border);display:flex;gap:1rem;flex-wrap:wrap;justify-content:space-between;" aria-label="Berichtnavigatie">
          <a class="link-underline" href="nieuws.php" style="color:var(--color-primary);">← Alle nieuwsberichten</a>
          <a class="link-underline" href="demonstratie.php" style="color:var(--color-primary);">Vorige: Demonstratie OJPT →</a>
        </nav>
      </div>
    </section>

    <!-- SHARE CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Deel dit persbericht</h2>
          <p>Hoe meer mensen dit weten, hoe groter de druk op de politiek. Deel onze boodschap.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic"
               href="https://www.instagram.com/jongerenpaneltoeslagen"
               target="_blank" rel="noopener">
              Volg ons op Instagram
            </a>
            <a class="btn btn--ghost magnetic" href="doneren.php">Steun ons financieel</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>