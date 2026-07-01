<?php
/* =====================================================================
 * contact.php — Contact & FAQ
 * ===================================================================== */
require_once 'assets/php/config.php';
$page = 'contact';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>

  <main id="main">
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb"><a href="index.php">Home</a> / Contact</p>
        <h1 data-split-text>Contact</h1>
        <p>Heb je een vraag of wil je meedoen? Neem contact op of bekijk de veelgestelde vragen.</p>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="section section--gray" aria-labelledby="contact-h">
      <div class="container">
        <h2 class="center reveal" id="contact-h" data-split-text>Neem contact op</h2>
        <p class="lead mx-auto center reveal reveal-delay-1" style="margin-bottom:var(--space-8);">
          Vragen, samenwerking of gewoon een berichtje? We horen graag van je.
        </p>

        <div class="contact-grid">
          <!-- LINKS: CONTACTCARDS -->
          <div class="contact-cards reveal">
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

          <!-- RECHTS: FORM -->
          <form class="form reveal reveal-delay-1" id="contact-form" novalidate>
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

    <!-- FAQ -->
    <section class="section" aria-labelledby="faq-h">
      <div class="container">
        <h2 class="center reveal" id="faq-h" data-split-text>Veelgestelde vragen</h2>
        <p class="lead mx-auto center reveal reveal-delay-1" style="margin-bottom:var(--space-7);">
          Hieronder vind je antwoorden op de vragen die we het vaakst krijgen.
        </p>

        <div class="faq-list">
          <div class="faq-item reveal">
            <button class="faq-question" aria-expanded="false">
              <span>Wat is het Onafhankelijk Jongerenpanel Toeslagen (OJPT)?</span>
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                OJPT is een landelijke community van gedupeerde jongeren die strijdt voor een
                eerlijk herstelproces na het toeslagenschandaal. We komen op voor erkenning van
                kinderen als volwaardige slachtoffers, met dezelfde rechten als hun ouders. Onze
                missie is vastgelegd in vijf pijlers: erkenning, gelijkwaardigheid, bewustwording,
                herstel en inspraak.
              </div>
            </div>
          </div>

          <div class="faq-item reveal">
            <button class="faq-question" aria-expanded="false">
              <span>Wat was het toeslagenschandaal en waarom is OJPT nodig?</span>
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Het toeslagenschandaal hield in dat de Belastingdienst ouders ten onrechte
                beschuldigde van fraude met kinderopvangtoeslag, met rampzalige financiële en
                menselijke gevolgen. Ongeveer 70.000 kinderen zijn gedupeerd. Terwijl de
                ouders inmiddels een hersteltraject hebben gekregen, zijn de kinderen — die de
                schade vaak het zwaarst droegen — nog steeds niet erkend als volwaardige
                slachtoffers. OJPT zet zich in om dat onrecht recht te zetten.
              </div>
            </div>
          </div>

          <div class="faq-item reveal">
            <button class="faq-question" aria-expanded="false">
              <span>Hoe kan ik meedoen of lid worden van het panel?</span>
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Iedere jongere die zich aangesproken voelt door onze missie — of je nu zelf
                gedupeerd bent, een naaste of een bondgenoot — kan zich aanmelden. We zijn
                altijd op zoek naar gemotiveerde mensen die meedragen aan de beweging. Stuur
                een mail naar info@ojpt.nl of vul het contactformulier in om te verkennen wat
                past.
              </div>
            </div>
          </div>

          <div class="faq-item reveal">
            <button class="faq-question" aria-expanded="false">
              <span>Hoe worden mijn donaties gebruikt?</span>
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                OJPT is een vrijwilligersorganisatie. Jouw donatie gaat direct naar de kosten
                van onze acties: de demonstratie, drukwerk, spandoeken, vergaderruimtes en de
                zichtbaarheid van onze boodschap in de media. We houden transparant bij hoe we
                onze middelen inzetten — vragen over de financiën stellen we graag open.
              </div>
            </div>
          </div>

          <div class="faq-item reveal">
            <button class="faq-question" aria-expanded="false">
              <span>Welke eisen stelt het OJPT-manifest aan het kabinet?</span>
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Ons manifest bundelt vijf pijlers tot concrete eisen: (1) erkenning van
                gedupeerde kinderen als volwaardige slachtoffers met eigen rechten, (2)
                gelijkwaardige behandeling in beleid, uitvoering en rechtspraak, (3)
                bewustwording via onderwijs, media en beleid, (4) financieel, mentaal en
                sociaal herstel zonder schulden door overheidstoedoen, en (5) inspraak van
                jongeren zelf in het herstelproces dat hun toekomst bepaalt. Daarnaast eisen
                we onder andere gerichte kwijtschelding van studieschulden die gedupeerde
                jongeren bij DUO moesten opbouwen.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'assets/php/footer.php'; ?>