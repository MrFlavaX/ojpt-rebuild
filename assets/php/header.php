<?php
/* =====================================================================
 * OJPT.nl — header.php
 * Shared <head>, nav, mobile menu
 * Usage: include 'assets/php/header.php';
 * Expects $page, $meta, $nav_items from config.php
 * ===================================================================== */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($meta['title']) ?></title>
  <meta name="description" content="<?= htmlspecialchars($meta['description']) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($meta['canonical']) ?>" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= htmlspecialchars($meta['og_title'] ?? $meta['title']) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($meta['og_description'] ?? $meta['description']) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($meta['canonical']) ?>" />
  <meta property="og:image" content="assets/images/logo-beeldmerk.svg" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Favicon -->
  <link rel="icon" href="assets/images/logo-beeldmerk.svg" type="image/svg+xml" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=DM+Sans:wght@400;500;600;700&family=Quattrocento+Sans:wght@400;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet" />

  <!-- CSS (split for performance + maintainability) -->
  <link rel="stylesheet" href="assets/css/tokens.css" />
  <link rel="stylesheet" href="assets/css/base.css" />
  <link rel="stylesheet" href="assets/css/layout.css" />
  <link rel="stylesheet" href="assets/css/components.css" />
  <link rel="stylesheet" href="assets/css/animations.css" />
  <link rel="stylesheet" href="assets/css/pages.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Onafhankelijk Jongerenpanel Toeslagen",
    "alternateName": "OJPT",
    "url": "https://ojpt.nl/",
    "logo": "https://ojpt.nl/assets/images/logo-beeldmerk.svg",
    "email": "info@ojpt.nl",
    "description": "Landelijke community van gedupeerde jongeren die strijden voor een eerlijk herstelproces na het Toeslagenschandaal.",
    "sameAs": ["https://www.instagram.com/jongerenpaneltoeslagen"]
  }
  </script>
</head>
<body>
  <a class="skip-link" href="#main">Direct naar inhoud</a>
  <div class="scroll-progress" aria-hidden="true"></div>

  <!-- HEADER -->
  <header class="site-header transparent" id="header">
    <div class="header-inner">
      <a class="brand" href="index.php" aria-label="OJPT homepage">
        <img src="assets/images/logo-beeldmerk.svg" alt="" class="brand-mark" width="44" height="44" />
        <span class="logo-text">OJPT</span>
      </a>
      <nav class="main-nav" aria-label="Hoofdnavigatie">
        <ul class="nav-list">
          <?php foreach ($nav_items as $item): ?>
            <li>
              <a class="nav-link <?= is_active($item['href'], $page) ? 'active' : '' ?>"
                 href="<?= $item['href'] ?>"><?= $item['label'] ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <a class="btn btn--secondary magnetic" href="doneren.php">Steun ons</a>
      </nav>
      <button class="hamburger" aria-label="Menu openen" aria-expanded="false" aria-controls="mobile-menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- MOBILE MENU -->
  <div class="mobile-overlay" id="mobile-overlay" hidden></div>
  <nav class="mobile-menu" id="mobile-menu" aria-label="Mobiele navigatie">
    <?php foreach ($nav_items as $item): ?>
      <a href="<?= $item['href'] ?>" <?= is_active($item['href'], $page) ? 'class="active"' : '' ?>><?= $item['label'] ?></a>
    <?php endforeach; ?>
  </nav>