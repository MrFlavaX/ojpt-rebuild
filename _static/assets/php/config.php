<?php
/* =====================================================================
 * OJPT.nl — config.php
 * Page metadata and navigation items
 * ===================================================================== */

$nav_items = [
    ['href' => 'index.php',      'label' => 'Home'],
    ['href' => 'over-ons.php',   'label' => 'Over ons'],
    ['href' => 'onze-missie.php','label' => 'Onze missie'],
    ['href' => 'demonstratie.php','label' => 'Demonstratie'],
    ['href' => 'nieuws.php',     'label' => 'Nieuws'],
    ['href' => 'agenda.php',     'label' => 'Agenda'],
    ['href' => 'doneren.php',    'label' => 'Doneren'],
    ['href' => 'contact.php',    'label' => 'Contact'],
];

$footer_nav_1 = [
    ['href' => 'index.php',       'label' => 'Home'],
    ['href' => 'over-ons.php',    'label' => 'Over ons'],
    ['href' => 'onze-missie.php', 'label' => 'Onze missie'],
    ['href' => 'demonstratie.php','label' => 'Demonstratie'],
];

$footer_nav_2 = [
    ['href' => 'nieuws.php',  'label' => 'Nieuws'],
    ['href' => 'agenda.php',  'label' => 'Agenda'],
    ['href' => 'doneren.php', 'label' => 'Doneren'],
    ['href' => 'persbericht.php', 'label' => 'Persbericht'],
    ['href' => 'contact.php', 'label' => 'Contact'],
];

function get_page_meta($page) {
    $meta = [
        'index' => [
            'title' => 'OJPT — Onafhankelijk Jongerenpanel Toeslagen | Onze toekomst nu rechtzetten',
            'description' => 'Het Onafhankelijk Jongerenpanel Toeslagen (OJPT) strijdt voor erkenning en herstel van gedupeerde kinderen na het toeslagenschandaal.',
            'og_title' => 'OJPT — Onze toekomst nu rechtzetten',
            'og_description' => 'Landelijke community van gedupeerde jongeren die strijden voor eerlijk herstel na het toeslagenschandaal.',
            'canonical' => 'https://ojpt.nl/',
        ],
        'over-ons' => [
            'title' => 'Over Ons — Panelleden | OJPT',
            'description' => 'Maak kennis met de panelleden van het Onafhankelijk Jongerenpanel Toeslagen.',
            'canonical' => 'https://ojpt.nl/over-ons',
        ],
        'onze-missie' => [
            'title' => 'Onze Missie — Rechtvaardigheid voor Gedupeerde Kinderen | OJPT',
            'description' => 'Wij willen dat gedupeerde kinderen worden erkend als volwaardige slachtoffers van het toeslagenschandaal.',
            'canonical' => 'https://ojpt.nl/onze-missie',
        ],
        'demonstratie' => [
            'title' => 'Demonstratie 22 november 2025 — Den Haag | OJPT',
            'description' => 'Op zaterdag 22 november 2025 van 12:00 tot 16:00 demonstreren we in Den Haag voor erkenning van gedupeerde kinderen.',
            'canonical' => 'https://ojpt.nl/demonstratie',
        ],
        'nieuws' => [
            'title' => 'Nieuws & Updates | OJPT',
            'description' => 'Het laatste nieuws van het Onafhankelijk Jongerenpanel Toeslagen.',
            'canonical' => 'https://ojpt.nl/nieuws',
        ],
        'agenda' => [
            'title' => 'Agenda — Evenementen & Bijeenkomsten | OJPT',
            'description' => 'Blijf op de hoogte van onze evenementen en bijeenkomsten voor gedupeerde jongeren.',
            'canonical' => 'https://ojpt.nl/agenda',
        ],
        'doneren' => [
            'title' => 'Steun OJPT — Doneer voor Herstel | OJPT',
            'description' => 'Jouw donatie helpt ons strijden voor erkenning en herstel voor gedupeerde kinderen.',
            'canonical' => 'https://ojpt.nl/doneren',
        ],
        'contact' => [
            'title' => 'Contact — Neem Op met OJPT',
            'description' => 'Neem contact op met het Onafhankelijk Jongerenpanel Toeslagen.',
            'canonical' => 'https://ojpt.nl/contact',
        ],
        'persbericht' => [
            'title' => 'Persbericht & Brandbrief: Studieschulden Ongedaan Maken — OJPT',
            'description' => 'Samen met de lokale kinderombudsmannen, de VNG en de IBTD brengen wij een dringend advies naar buiten.',
            'canonical' => 'https://ojpt.nl/persbericht',
        ],
    ];

    return $meta[$page] ?? $meta['index'];
}

function is_active($href, $current_page) {
    $href_base = str_replace('.php', '', $href);
    return $href_base === $current_page;
}