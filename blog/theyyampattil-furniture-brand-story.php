<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theyyampattil Furniture: UAE's Bespoke Luxury Furniture Brand</title>
    <meta name="description" content="Discover Theyyampattil Furniture — a 40+ year heritage brand crafting bespoke luxury furniture across Dubai, Sharjah & Abu Dhabi.">
    <link rel="canonical" href="https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story">
    
    <meta name="robots" content="index, follow">

    <!-- Preconnect for Performance Optimization (GTmetrix A-grade) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />

    <!-- Common <head> include materials like social tags, additional schema, etc. -->
    <?php include '../includes/head-tag-include.php'; ?> 

    <!-- High-Performance Ultra-Modern CSS Styling -->
    <style>
        :root {
            --bg-color: #121212;
            --bg-card: #1c1c1c;
            --brand-color: #c9a76a;
            --brand-rgb: 201, 167, 106;
            --text-main: #ffffff;
            --text-muted: #b3b3b3;
            --font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --section-padding: clamp(2.5rem, 5vw, 4.5rem);
        }

        /* Core Reset & Performance Optimization */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: var(--font-family);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        body {
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Responsive Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Ultra-Modern Hero Section */
        .hero {
            position: relative;
            min-height: 65vh;
            display: flex;
            align-items: center;
            padding: var(--section-padding) 0;
            background: linear-gradient(180deg, rgba(18, 18, 18, 0.75) 0%, rgba(18, 18, 18, 0.90) 100%), url('assets/images/home-page/hero-banner/hero-slider-1.avif') no-repeat center center/cover;
            background-attachment: scroll;
            contain: content;
        }

        .hero-content {
            max-width: 880px;
        }

        /* Ultra-Modern Breadcrumbs Styling */
        .breadcrumb-nav {
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
        }

        .breadcrumb-list {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 0.5rem;
            font-size: clamp(0.8rem, 1.2vw, 0.9rem);
            font-weight: 500;
        }

        .breadcrumb-item {
            display: inline-flex;
            align-items: center;
            color: var(--text-muted);
        }

        .breadcrumb-item a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.25 ease;
            white-space: nowrap;
        }

        .breadcrumb-item a:hover {
            color: var(--brand-color);
            opacity: 1;
        }

        .breadcrumb-separator {
            color: var(--brand-color);
            margin: 0 0.35rem;
            user-select: none;
            font-size: 0.8rem;
            opacity: 0.8;
        }

        .breadcrumb-item.active {
            color: var(--brand-color);
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 280px;
        }

        @media (max-width: 480px) {
            .breadcrumb-item.active {
                max-width: 160px;
            }
        }

        .meta-tag {
            display: inline-block;
            color: var(--brand-color);
            text-transform: uppercase;
            font-size: 0.825rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            margin-bottom: 0.85rem;
        }

        /* Typography */
        h1, h2, h3 {
            font-weight: 700;
            line-height: 1.22;
            color: var(--text-main);
            letter-spacing: -0.02em;
        }

        h1 { font-size: clamp(2.1rem, 4.5vw, 3.6rem); margin-bottom: 0.85rem; }
        h2 { font-size: clamp(1.5rem, 3vw, 2.1rem); margin-bottom: 1.5rem; border-left: 4px solid var(--brand-color); padding-left: 0.8rem; }
        h3 { font-size: clamp(1.15rem, 2vw, 1.35rem); color: var(--brand-color); margin-bottom: 0.5rem; }

        p {
            font-size: clamp(0.98rem, 1.1vw, 1.125rem);
            color: var(--text-muted);
            margin-bottom: 1.2rem;
            font-weight: 400;
        }

        a {
            color: var(--brand-color);
            text-decoration: none;
            transition: opacity 0.2s ease, color 0.2s ease;
        }
        a:hover {
            opacity: 0.85;
        }

        .excerpt {
            font-size: clamp(1.05rem, 1.4vw, 1.25rem);
            line-height: 1.6;
            color: #e0e0e0;
            margin-top: 1rem;
        }

        /* Main Blog Layout */
        .main-content {
            padding: clamp(2rem, 4vw, 3.5rem) 0;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }

        /* Content Sections */
        .section-block {
            background-color: var(--bg-card);
            padding: clamp(1.5rem, 4vw, 2.5rem);
            border-radius: 12px;
            border: 1px solid #2a2a2a;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            will-change: transform;
            contain: content;
        }

        .sub-block {
            margin-top: 1.5rem;
        }

        .key-takeaway {
            background: rgba(201, 167, 106, 0.08);
            border-left: 4px solid var(--brand-color);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 0 8px 8px 0;
            font-style: italic;
        }

        /* Inline Content Image Wrappers with Fixed Aspect Ratios (Prevents CLS/Jumping) */
        .content-with-image {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: center;
        }

        @media (min-width: 768px) {
            .content-with-image {
                grid-template-columns: 1.2fr 1fr;
            }
            .content-with-image.reverse {
                grid-template-columns: 1fr 1.2fr;
            }
        }

        .inline-image-container {
            width: 100%;
            height: 100%;
            min-height: 250px;
            max-height: 380px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #333;
            background-color: #181818;
        }

        .inline-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .inline-image-container img:hover {
            transform: scale(1.03);
        }

        /* Lists and Product Grids */
        ul, ol {
            padding-left: 1.25rem;
            margin-bottom: 1.5rem;
        }

        li {
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }

        .milestone-list li {
            list-style: none;
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        .milestone-list li::before {
            content: "•";
            color: var(--brand-color);
            font-weight: bold;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: -0.2rem;
        }

        .product-grid-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .product-item {
            background: #222222;
            padding: 1rem 1.25rem;
            border-radius: 6px;
            border-left: 3px solid var(--brand-color);
            font-weight: 500;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .product-item:hover {
            background-color: #282828;
            transform: translateY(-2px);
        }

        /* Pillar Grid */
        .pillar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .pillar-card {
            background: #222222;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #333;
            transition: border-color 0.3s ease;
        }

        .pillar-card:hover {
            border-color: var(--brand-color);
        }

        .pillar-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--brand-color);
            margin-bottom: 0.5rem;
            display: block;
        }

        .pillar-title {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-main);
        }

        /* Accordion FAQ Section */
        .faq-container {
            margin-top: 1.5rem;
        }

        .faq-item {
            border-bottom: 1px solid #2a2a2a;
            padding: 0.85rem 0;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-item summary {
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--text-main);
            font-size: 1.1rem;
            cursor: pointer;
            padding: 0.5rem 0;
            user-select: none;
            transition: color 0.2s ease;
        }

        .faq-item summary::-webkit-details-marker {
            display: none;
        }

        .faq-item summary:hover {
            color: var(--brand-color);
        }

        .faq-item summary::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--brand-color);
            font-weight: 400;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            line-height: 1;
        }

        .faq-item[open] summary::after {
            transform: rotate(45deg);
        }

        .faq-item p {
            margin-top: 0.85rem;
            margin-bottom: 0.5rem;
            padding-right: 1.5rem;
            animation: fadeIn 0.25s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-4px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Showrooms Layout */
        .showroom-list {
            margin-top: 1rem;
        }
        .showroom-location {
            margin-bottom: 1rem;
        }
        .showroom-location strong {
            color: var(--brand-color);
        }

        .conclusion-box {
            background: linear-gradient(145deg, #1c1c1c, #151515);
            border: 1px solid var(--brand-color);
            padding: clamp(1.5rem, 4vw, 2.5rem);
            border-radius: 12px;
            margin-top: 1rem;
        }

        /* Media Queries */
        @media (max-width: 767px) {
            .pillar-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .pillar-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Comprehensive SEO & Generative AI Optimized Schema JSON-LD Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://theyyampattilgcc.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Blogs",
              "item": "https://theyyampattilgcc.com/blogs"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Brand Story",
              "item": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story"
            }
          ]
        },
        {
          "@type": "BlogPosting",
          "@id": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story#article",
          "isPartOf": {
            "@type": "WebPage",
            "@id": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story"
          },
          "headline": "Theyyampattil Furniture: UAE's Bespoke Luxury Furniture Brand",
          "description": "Discover Theyyampattil Furniture — a 40+ year heritage brand crafting bespoke luxury furniture across Dubai, Sharjah & Abu Dhabi.",
          "image": [
            "https://theyyampattilgcc.com/assets/images/home-page/hero-banner/hero-slider-1.avif",
            "https://theyyampattilgcc.com/assets/images/home-page/3rd-section-desktop.avif",
            "https://theyyampattilgcc.com/assets/images/home-page/tv-wall.avif"
          ],
          "datePublished": "2026-07-13T12:00:00+04:00",
          "dateModified": "2026-08-07T10:00:00+04:00",
          "mainEntityOfPage": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story",
          "author": {
            "@type": "Organization",
            "name": "Theyyampattil Furniture",
            "url": "https://theyyampattilgcc.com/"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Theyyampattil Furniture",
            "url": "https://theyyampattilgcc.com/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png"
            }
          }
        },
        {
          "@type": "FurnitureStore",
          "@id": "https://theyyampattilgcc.com/#organization",
          "name": "Theyyampattil Furniture",
          "url": "https://theyyampattilgcc.com/",
          "telephone": "+971559132200",
          "priceRange": "$$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Hatta-Oman Road, Ras Al Khor Industrial Area",
            "addressLocality": "Dubai",
            "addressCountry": "AE"
          }
        },
        {
          "@type": "FAQPage",
          "@id": "https://theyyampattilgcc.com/blog/theyyampattil-furniture-brand-story#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "When was Theyyampattil Furniture founded?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Theyyampattil Furniture was founded in 1983 in India before expanding into the UAE market in 2000."
              }
            },
            {
              "@type": "Question",
              "name": "Where are Theyyampattil Furniture showrooms located?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Theyyampattil Furniture has three UAE showrooms: Dubai, Sharjah, and Abu Dhabi."
              }
            },
            {
              "@type": "Question",
              "name": "Does Theyyampattil Furniture offer custom furniture?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Theyyampattil Furniture specializes in bespoke, made-to-order furniture, with 100% of design, production, and installation handled in-house."
              }
            },
            {
              "@type": "Question",
              "name": "What types of furniture does Theyyampattil Furniture make?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Theyyampattil Furniture produces TV wall units, bedroom furniture, kitchens, walk-in closets, wall panels, welcome units, dressing units, and modern doors."
              }
            },
            {
              "@type": "Question",
              "name": "Is Theyyampattil Furniture expanding beyond the UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Theyyampattil Furniture has announced plans to expand into Saudi Arabia, Qatar, Kuwait, and Bahrain from 2025 onward."
              }
            }
          ]
        }
      ]
    }
    </script>
</head>
<body>

<?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="hero-content">
                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="https://theyyampattilgcc.com/">Home</a></li>
                        <li class="breadcrumb-separator" aria-hidden="true">&gt;</li>
                        <li class="breadcrumb-item"><a href="https://theyyampattilgcc.com/blogs">Blogs</a></li>
                        <li class="breadcrumb-separator" aria-hidden="true">&gt;</li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Story</li>
                    </ol>
                </nav>

                <span class="meta-tag">Brand Story</span>
                <h1>Theyyampattil Furniture: The Story Behind the UAE's Bespoke Luxury Furniture Brand</h1>
                <p class="excerpt">Theyyampattil Furniture has spent over four decades turning houses into bespoke homes — first in India, then across the UAE. This post breaks down the brand's history, its 100% in-house design-to-installation process, its showrooms in Dubai, Sharjah, and Abu Dhabi, and what makes it different from other luxury furniture brands in the region.</p>
            </div>
        </div>
    </header>

    <!-- Main Content Dynamic Grid Structure -->
    <main class="main-content">
        <div class="container">
            <div class="content-grid">
                
                <!-- Section 1: Who Is -->
                <section class="section-block">
                    <h2>Who Is Theyyampattil Furniture?</h2>
                    <p>Walk into almost any conversation about custom furniture in Dubai, and the name Theyyampattil Furniture comes up fast. But most people who've seen the showrooms in Dubai, Sharjah, or Abu Dhabi don't actually know the story behind the brand where it started, how it grew, or what sets it apart from the dozens of other furniture retailers competing for the same customers. This post covers exactly that, so you know who you're dealing with before you set foot in a showroom.</p>
                    <p>Theyyampattil Furniture is a luxury home furniture brand offering custom-made pieces across the UAE, including <a href="https://theyyampattilgcc.com/">TV wall units</a>, <a href="https://theyyampattilgcc.com/">wardrobes</a>, <a href="https://theyyampattilgcc.com/">kitchens</a>, <a href="https://theyyampattilgcc.com/">bedroom sets</a>, and <a href="https://theyyampattilgcc.com/">wall panels</a>. What separates Theyyampattil Furniture from typical retailers is that design, manufacturing, and installation all happen in-house, giving every customer a fully bespoke result rather than a mass-produced item.</p>
                    <p>The brand currently operates three showrooms in the UAE - in <a href="https://theyyampattilgcc.com/">Dubai</a>, <a href="https://theyyampattilgcc.com/">Sharjah</a>, and <a href="https://theyyampattilgcc.com/">Abu Dhabi</a> and is backed by more than 300 skilled designers and craftsmen.</p>
                </section>

                <!-- Section 2: History (With Concise Integrated Image 1) -->
                <section class="section-block">
                    <h2>How Theyyampattil Furniture Grew From a Local Workshop to a Regional Brand</h2>
                    <div class="content-with-image">
                        <div>
                            <div class="sub-block">
                                <h3>Founded in 1983</h3>
                                <p>Theyyampattil Furniture traces its roots back to 1983 in India, where the founders set out to combine European design influences with traditional craftsmanship - treating each piece as part of a room's overall character rather than a standalone item. That approach earned the brand a strong reputation across the Indian subcontinent well before it ever touched Gulf shores.</p>
                            </div>
                            <div class="sub-block">
                                <h3>Entering the UAE in 2000</h3>
                                <p>In 2000, Theyyampattil Furniture crossed into the UAE market, recognizing the region's growing appetite for luxury, personalization, and contemporary living. Under Chairman Mr. Sharafudheen Theyyampattil and Managing Director Mr. Jahfar Sadiq, the brand has since grown into a genuine UAE furniture powerhouse.</p>
                            </div>
                        </div>
                        <div class="inline-image-container">
                            <img src="assets/images/home-page/3rd-section-desktop.avif" alt="Theyyampattil Furniture history timeline from 1983 to UAE expansion" loading="lazy" width="600" height="380">
                        </div>
                    </div>

                    <div class="sub-block">
                        <h3>Key Milestones (2000–2025+)</h3>
                        <ul class="milestone-list">
                            <li><strong>2000</strong> — UAE establishment</li>
                            <li><strong>2017</strong> — Dubai flagship showroom launch</li>
                            <li><strong>2020</strong> — Expansion into Sharjah and Abu Dhabi</li>
                            <li><strong>2025+</strong> — Planned GCC-wide expansion into Saudi Arabia, Qatar, Kuwait, and Bahrain</li>
                        </ul>
                    </div>

                    <div class="key-takeaway">
                        <strong>Key takeaway:</strong> Theyyampattil Furniture isn't a new player chasing trends — it's a 40+ year legacy brand now scaling across the entire Gulf region.
                    </div>
                </section>

                <!-- Section 3: Offerings (With Concise Integrated Image 2) -->
                <section class="section-block">
                    <h2>What Does Theyyampattil Furniture Offer?</h2>
                    <p>Theyyampattil Furniture's product range covers nearly every part of a home that benefits from custom design.</p>
                    
                    <div class="content-with-image reverse">
                        <div class="inline-image-container">
                            <img src="assets/images/home-page/tv-wall.avif" alt="Custom furniture categories by Theyyampattil Furniture UAE" loading="lazy" width="600" height="380">
                        </div>
                        <div>
                            <h3>Custom Furniture Categories</h3>
                            <div class="product-grid-list">
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">TV Wall Units</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Bedroom Furniture</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Kitchens</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Walk-in Closets</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Wall Panels</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Welcome Units</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Dressing Units</a></div>
                                <div class="product-item"><a href="https://theyyampattilgcc.com/">Modern Doors</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-block" style="margin-top: 1.5rem;">
                        <p>Because every category is produced in-house, Theyyampattil Furniture can adapt each piece to a specific room's dimensions, style, and budget — something off-the-shelf furniture simply can't do.</p>
                    </div>
                </section>

                <!-- Section 4: Differentiation & Pillars -->
                <section class="section-block">
                    <h2>What Makes Theyyampattil Furniture Different</h2>
                    <h3>100% In-House Design, Production & Installation</h3>
                    <p>Many furniture brands outsource manufacturing or installation to third parties, which creates gaps between what a customer envisions and what actually gets delivered. Theyyampattil Furniture keeps the entire process - design, production, and installation under one roof, which means full accountability from concept to final fit.</p>
                    
                    <div class="sub-block">
                        <h3>Core Values</h3>
                        <p>Theyyampattil Furniture builds its process around five pillars:</p>
                        <div class="pillar-grid">
                            <div class="pillar-card">
                                <span class="pillar-number">1</span>
                                <span class="pillar-title">Customized ergonomics</span>
                            </div>
                            <div class="pillar-card">
                                <span class="pillar-number">2</span>
                                <span class="pillar-title">Thoughtful design</span>
                            </div>
                            <div class="pillar-card">
                                <span class="pillar-number">3</span>
                                <span class="pillar-title">In-house production</span>
                            </div>
                            <div class="pillar-card">
                                <span class="pillar-number">4</span>
                                <span class="pillar-title">Sustainable materials</span>
                            </div>
                            <div class="pillar-card">
                                <span class="pillar-number">5</span>
                                <span class="pillar-title">Professional installation</span>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem;">These aren't just marketing language - they reflect the operational structure of a brand that controls every stage of the furniture-making process.</p>
                    </div>
                </section>

                <!-- Section 5: Showrooms (With Concise Integrated Image 3) -->
                <section class="section-block">
                    <h2>Theyyampattil Furniture Showrooms Across the UAE</h2>
                    <div class="content-with-image">
                        <div>
                            <p>Theyyampattil Furniture currently operates three UAE locations:</p>
                            <div class="showroom-list">
                                <div class="showroom-location">
                                    <strong><a href="https://theyyampattilgcc.com/">Dubai</a></strong> - Hatta-Oman Road, Ras Al Khor Industrial Area
                                </div>
                                <div class="showroom-location">
                                    <strong><a href="https://theyyampattilgcc.com/">Sharjah</a></strong> - Malha Road
                                </div>
                                <div class="showroom-location">
                                    <strong><a href="https://theyyampattilgcc.com/">Abu Dhabi</a></strong> - Baniyas
                                </div>
                            </div>
                            <p style="margin-top: 1rem;">Each showroom is designed for customers to explore full collections and consult directly with in-house design teams - a key part of the brand's bespoke, consultative sales approach.</p>
                        </div>
                        <div class="inline-image-container">
                            <img src="assets/images/home-page/bed-room.avif" alt="Theyyampattil Furniture showroom locations in Dubai Sharjah Abu Dhabi" loading="lazy" width="600" height="380">
                        </div>
                    </div>
                </section>

                <!-- Section 6: Mission & Vision (With Concise Integrated Image 4) -->
                <section class="section-block">
                    <h2>Mission and Vision</h2>
                    <div class="content-with-image reverse">
                        <div class="inline-image-container">
                            <img src="assets/images/home-page/kitchen.avif" alt="Theyyampattil Furniture luxury living room showroom in Dubai" loading="lazy" width="600" height="380">
                        </div>
                        <div>
                            <div class="sub-block">
                                <h3>Mission</h3>
                                <p>To create interior solutions that combine functionality, precision, and quality craftsmanship for everyday living.</p>
                            </div>
                            <div class="sub-block">
                                <h3>Vision</h3>
                                <p>To be recognized as a regional leader in interior and furniture design, known for design excellence, quality, and customer satisfaction with pieces built to outlast passing trends.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 7: Interactive Clickable FAQs -->
                <section class="section-block">
                    <h2>Frequently Asked Questions About Theyyampattil Furniture</h2>
                    <div class="faq-container">
                        <details class="faq-item">
                            <summary>When was Theyyampattil Furniture founded?</summary>
                            <p>Theyyampattil Furniture was founded in 1983 in India before expanding into the UAE market in 2000.</p>
                        </details>
                        <details class="faq-item">
                            <summary>Where are Theyyampattil Furniture showrooms located?</summary>
                            <p>Theyyampattil Furniture has three UAE showrooms: Dubai, Sharjah, and Abu Dhabi.</p>
                        </details>
                        <details class="faq-item">
                            <summary>Does Theyyampattil Furniture offer custom furniture?</summary>
                            <p>Yes. Theyyampattil Furniture specializes in bespoke, made-to-order furniture, with 100% of design, production, and installation handled in-house.</p>
                        </details>
                        <details class="faq-item">
                            <summary>What types of furniture does Theyyampattil Furniture make?</summary>
                            <p>Theyyampattil Furniture produces TV wall units, bedroom furniture, kitchens, walk-in closets, wall panels, welcome units, dressing units, and modern doors.</p>
                        </details>
                        <details class="faq-item">
                            <summary>Is Theyyampattil Furniture expanding beyond the UAE?</summary>
                            <p>Yes. Theyyampattil Furniture has announced plans to expand into Saudi Arabia, Qatar, Kuwait, and Bahrain from 2025 onward.</p>
                        </details>
                    </div>
                </section>

                <!-- Section 8: Conclusion -->
                <section class="section-block conclusion-box">
                    <h2>Conclusion</h2>
                    <p>Theyyampattil Furniture isn't just another name in the UAE's crowded furniture market — it's a brand with a 40-year design heritage, a fully in-house production model, and a growing footprint across three UAE showrooms, with GCC expansion already on the roadmap. For homeowners who want furniture built specifically for their space rather than picked off a shelf, that combination of history and control over every stage of production is hard to match.</p>
                    <p style="margin-bottom: 0; font-weight: 600; color: #fff;">Ready to see the craftsmanship in person? Visit a Theyyampattil Furniture showroom in Dubai, Sharjah, or Abu Dhabi, or <a href="https://theyyampattilgcc.com/">contact the design team</a> directly at +971 55 913 2200 to start planning your custom space.</p>
                </section>

            </div>
        </div>
    </main>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/fixed-floating-buttons.php'; ?>

</body>
</html>