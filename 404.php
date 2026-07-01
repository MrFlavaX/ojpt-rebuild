<?php
require_once 'assets/php/config.php';
$page = 'index';
$meta = get_page_meta($page);
include 'assets/php/header.php';
?>
<main id="main">
  <section class="section section--purple center" style="min-height:80vh;display:flex;align-items:center;">
    <div class="container">
      <p class="eyebrow reveal" style="color:var(--color-secondary);">Fout 404</p>
      <h1 class="reveal reveal-delay-1" style="color:var(--color-white);font-size:var(--text-5xl);margin-bottom:var(--space-4);">
        Pagina niet gevonden
      </h1>
      <p class="lead mx-auto reveal reveal-delay-2" style="color:rgba(255,255,255,0.9);max-width:600px;">
        De pagina die je zoekt bestaat niet of is verhuisd. Maar onze strijd gaat door.
        Ga terug naar de homepage of neem contact met ons op.
      </p>
      <div class="hero-buttons reveal reveal-delay-3" style="margin-top:var(--space-6);">
        <a class="btn btn--secondary magnetic" href="index.php">Terug naar home</a>
        <a class="btn btn--ghost" href="contact.php">Neem contact op</a>
      </div>
    </div>
  </section>
</main>
<?php include 'assets/php/footer.php'; ?>