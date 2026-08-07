
<?php
// 1. Unify current page URL detection cleanly (Calculated once, used everywhere)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$full_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Strip query parameters for a perfectly clean Canonical URL mapping
$canonical_url = strtok($full_url, '?');

// 2. Unify Fallback Meta Info for Titles and Descriptions
$meta_title = isset($page_title) ? $page_title : "Best Luxury Furniture in Dubai | Theyyampattil Furniture";
$meta_desc  = isset($page_description) ? $page_description : "Theyyampattil Furniture offers premium Italian luxury furniture in Dubai. Explore our bespoke collections of sofas, bedroom sets, and modern TV wall units.";

// 3. Image Paths Configuration (Allows overriding per page, falls back gracefully)
$social_base_url = "https://theyyampattilgcc.com/";
$default_hero_img = $social_base_url . "assets/images/home-page/hero-banner/hero-slider-1.avif";
$social_img = isset($page_image) ? $page_image : $default_hero_img;

// Detect if current page is the root homepage to avoid bloating inner pages with Local Business details
$is_homepage = ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '');
?>

<!-- Essential SEO Tags -->
<title><?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="<?php echo $is_homepage ? 'website' : 'article'; ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:secure_url" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="Theyyampattil Furniture">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    <?php if ($is_homepage): ?>
    {
      "@type": "FurnitureStore",
      "@id": "https://theyyampattilgcc.com/#organization",
      "name": "Theyyampattil GCC",
      "url": "https://theyyampattilgcc.com/",
      "logo": "https://theyyampattilgcc.com/images/logo.png",
      "image": "<?php echo htmlspecialchars($default_hero_img, ENT_QUOTES, 'UTF-8'); ?>",
      "description": "Premium luxury furniture solutions, custom closets, wardrobes, and interior design wall cladding panels in Dubai, Sharjah and Abu Dhabi.",
      "telephone": "+971559132200",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Al Quoz Industrial Area 3, Umm Suqeim St", 
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "addressCountry": "AE"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "09:00",
          "closes": "22:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/theyyampattilgcc",
        "https://www.instagram.com/theyyampattilgcc"
      ]
    },
    <?php endif; ?>
    {
      "@type": "WebPage",
      "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>#webpage",
      "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
      "name": "<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>",
      "description": "<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>",
      "isPartOf": {
        "@id": "https://theyyampattilgcc.com/#organization"
      }
    }
  ]
}
</script>