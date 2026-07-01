<?php
/* =====================================================================
 * over-ons.php — Panelleden van OJPT
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'over-ons';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Over ons</p>
        <h1 data-split-text>Over Ons</h1>
        <p>Maak kennis met de mensen achter het Onafhankelijk Jongerenpanel Toeslagen.</p>
      </div>
    </section>

    <!-- PANELLEDEN -->
    <section class="section section--gray" aria-labelledby="panel-h">
      <div class="container">
        <p class="eyebrow center reveal" id="panel-h">Het panel</p>
        <h2 class="center reveal reveal-delay-1" data-split-text>Jongeren die zich inzetten voor rechtvaardigheid</h2>
        <p class="lead mx-auto center reveal reveal-delay-2" style="margin-bottom:var(--space-8);">
          Vijf gedupeerde jongeren die hun eigen verhaal omzetten in actie — en er is plek voor meer.
        </p>

        <div class="card-grid">
          <article class="card reveal">
            <div class="card-avatar" aria-hidden="true">SA</div>
            <h3>Soundous Ahannach</h3>
            <span class="card-tag">Panellid</span>
            <p>
              Mijn naam is Soundous Ahannach en ik zet mij met trots in voor het Onafhankelijk
              Jongerenpanel Toeslagen (OJPT). Het OJPT is de eerste organisatie waar ik mij
              werkelijk gehoord en vertegenwoordigd voel. Die ervaring motiveert mij om bij te
              dragen aan hun essentiële werk. Mijn focus ligt op rechtvaardigheid: ik strijd
              ervoor dat alle kinderen die gedupeerd zijn door het toeslagenschandaal, erkend
              worden als individuele slachtoffers van dit onrecht.
            </p>
          </article>

          <article class="card reveal reveal-delay-1">
            <div class="card-avatar" aria-hidden="true">D</div>
            <h3>Demario</h3>
            <span class="card-tag">Panellid</span>
            <p>
              Mijn naam is Demario, 30 jaar en ik zet mij in voor OJPT, omdat ik wil opkomen voor
              een groep die door onrecht is getroffen. Met het panel wil ik bereiken dat iedereen
              die dit onrecht is aangedaan, weet dat hij of zij gezien wordt en er nooit alleen
              voor staat.
            </p>
          </article>

          <article class="card reveal reveal-delay-2">
            <div class="card-avatar" aria-hidden="true">CP</div>
            <h3>Celine Santos Pires</h3>
            <span class="card-tag">Panellid</span>
            <p>
              Celine Santos Pires, 29 jaar, videoproducer uit Rotterdam. Ik zet mij al sinds 2022
              in voor het Onafhankelijk Jongerenpanel Toeslagen, omdat ik het belangrijk vind dat
              ook de gedupeerde kinderen vertegenwoordigd worden in dit ongekend onrecht. Wij
              zijn namelijk ook slachtoffers! Met het panel wil ik bereiken dat al onze punten
              uit het manifest uitgevoerd worden door het kabinet en dat gedupeerde kinderen ook
              hun toekomstvisie waar kunnen maken.
            </p>
          </article>

          <article class="card reveal reveal-delay-1">
            <div class="card-avatar" aria-hidden="true">LH</div>
            <h3>Loïs Houwen</h3>
            <span class="card-tag">Panellid</span>
            <p>
              Loïs is 26 jaar oud en is een student en docent Nederlands / maatschappijleer uit
              Groningen. Ik zit bij het Onafhankelijk Jongerenpanel Toeslagen omdat ik de stem
              van jongeren wil laten horen. Als oudste dochter van een gedupeerde moeder heb ik
              van dichtbij meegemaakt wat de toeslagenaffaire met gezinnen doet. Jongeren zijn
              een kernonderdeel van het gezin, ons lijden en onze ervaringen staan niet los van
              dat van onze ouders. Het is belangrijk dat onze stem gehoord wordt in het herstel
              en in de toekomst, zodat niemand meer onzichtbaar blijft.
            </p>
          </article>

          <article class="card reveal reveal-delay-2">
            <div class="card-avatar" aria-hidden="true">S</div>
            <h3>Sanna</h3>
            <span class="card-tag">Panellid</span>
            <p>
              Ik ben Sanna, 25 jaar en vind dat kinderen van gedupeerde ouders gezien moeten
              worden als volwaardig slachtoffer van het toeslagenschandaal. En daarbij hulp en
              erkenning krijgen evenals een volwaardige compensatie voor het aangedane leed.
              Bij begrip hoort ook de erkenning, jammer dat wij dit nog steeds niet hebben.
            </p>
          </article>

          <!-- JIJ? -->
          <article class="card reveal reveal-delay-3" style="justify-content:center;text-align:center;">
            <div class="card-avatar mx-auto" aria-hidden="true" style="background:linear-gradient(135deg,var(--color-secondary),var(--color-accent));">+</div>
            <h3>Jij?</h3>
            <span class="card-tag">Word lid</span>
            <p>
              Het panel groeit. Wil jij je inzetten voor erkenning en herstel? We zoeken
              gemotiveerde jongeren die meedragen aan de beweging.
            </p>
            <a class="btn btn--primary magnetic" href="contact.php" style="margin-top:1rem;">Sluit je aan</a>
          </article>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section--tight">
      <div class="container">
        <div class="cta-banner reveal">
          <h2>Samen staan we sterker</h2>
          <p>Wil jij bijdragen aan erkenning voor gedupeerde kinderen? Er zijn vele manieren om mee te doen.</p>
          <div class="hero-buttons" style="justify-content:center;">
            <a class="btn btn--secondary magnetic" href="contact.php">Neem contact op</a>
            <a class="btn btn--ghost" href="doneren.php">Steun ons financieel</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>