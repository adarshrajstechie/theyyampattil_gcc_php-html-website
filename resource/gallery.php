<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../">
    <link rel="canonical" href="https://theyyampattilgcc.com/resource/gallery" />
    <meta name="robots" content="index, follow">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | Luxury Custom Furniture & Interiors | Theyyampattil</title>   
    <meta name="description" content="Explore Theyyampattil Furniture gallery showcasing luxury interiors, custom-made furniture, modern kitchens, wardrobes, and premium home designs across UAE.">

    <!-- Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- Modern Glightbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />

    <!-- Common <head> include materials like schema markup, social tags, etc. -->
    <?php include '../includes/head-tag-include.php'; ?>     

    <!-- SEO Schema Markup Integration (BreadcrumbList, ImageGallery, FAQPage, FurnitureStore) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://theyyampattilgcc.com/resource/gallery#breadcrumb",
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
              "name": "Resources"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Gallery"
            }
          ]
        },
        {
          "@type": "ImageGallery",
          "@id": "https://theyyampattilgcc.com/resource/gallery#gallery",
          "name": "Theyyampattil Luxury Furniture & Interior Design Gallery",
          "description": "Showcase of bespoke furniture, custom wall paneling, modern kitchens, and luxury interior design projects in UAE.",
          "url": "https://theyyampattilgcc.com/resource/gallery"
        },
        {
          "@type": "FurnitureStore",
          "@id": "https://theyyampattilgcc.com/#organization",
          "name": "Theyyampattil Furniture",
          "url": "https://theyyampattilgcc.com/",
          "logo": "https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png",
          "areaServed": "GCC",
          "description": "Premier luxury bespoke furniture and custom interior design solutions across UAE and GCC."
        },
        {
          "@type": "FAQPage",
          "@id": "https://theyyampattilgcc.com/resource/gallery#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Does Theyyampattil offer fully customized luxury furniture in UAE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Theyyampattil specializes in bespoke, custom-tailored furniture, luxury wall paneling, modular kitchens, and custom wardrobes engineered to meet your exact interior vision."
              }
            },
            {
              "@type": "Question",
              "name": "Can I visit a showroom to view these furniture designs in person?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. You can visit our experience showrooms across the UAE to explore custom wood finishes, fabrics, and live displays of our interior designs."
              }
            },
            {
              "@type": "Question",
              "name": "Do you provide turnkey interior design and installation services across the GCC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we provide end-to-end solutions ranging from conceptual design and bespoke manufacturing to professional on-site delivery and installation throughout the GCC."
              }
            },
            {
              "@type": "Question",
              "name": "What materials are used in Theyyampattil bespoke furniture?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We use premium-grade hardwoods, high-density MR engineered wood, luxurious metal accents, eco-friendly lacquers, and top-tier upholstery materials."
              }
            },
            {
              "@type": "Question",
              "name": "How can I request a quote or design consultation for a custom project?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can contact our design team directly via the contact page, call our showrooms, or click the WhatsApp floating button to share your layout and requirements."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>
        :root {
            --bg-dark: #151515;
            --brand-gold: #c9a76a;
            --brand-gold-hover: #e5be7a;
            --text-light: #ffffff;
            --text-muted: #888888;
            --card-bg: #1e1e1e;
            --font-main: 'Plus Jakarta Sans', sans-serif;
            --transition-smooth: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            font-family: var(--font-main);
            line-height: 1.6;
            overflow-x: hidden;
            text-rendering: optimizeLegibility;
        }

        /* --- Centered Breadcrumb Component --- */
        .breadcrumb-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 35px;
            padding-bottom: 5px;
        }

        .breadcrumb-nav {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(201, 167, 106, 0.2);
            padding: 8px 22px;
            border-radius: 30px;
            backdrop-filter: blur(8px);
        }

        .breadcrumb-list {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0;
            padding: 0;
            font-size: 0.88rem;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .breadcrumb-item {
            color: var(--text-muted);
            display: flex;
            align-items: center;
        }

        .breadcrumb-item a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .breadcrumb-item a:hover {
            color: var(--brand-gold);
        }

        .breadcrumb-item.active {
            color: var(--brand-gold);
            font-weight: 600;
        }

        .breadcrumb-separator {
            color: rgba(201, 167, 106, 0.5);
            font-size: 0.8rem;
            user-select: none;
        }

        /* --- Hero Section --- */
        .hero-clean {
            padding: 20px 20px 40px;
            text-align: center;
            border-bottom: 1px solid rgba(201, 167, 106, 0.15);
        }

        .hero-clean h1 {
            font-size: clamp(2.3rem, 7vw, 4.2rem);
            color: var(--brand-gold);
            line-height: 1.15;
            margin-bottom: 15px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .hero-clean p {
            color: var(--text-muted);
            max-width: 750px;
            margin: 0 auto;
            font-size: clamp(0.95rem, 1.8vw, 1.15rem);
            font-weight: 300;
        }

        /* --- Gallery Grid --- */
        .gallery-wrapper {
            max-width: 1600px;
            margin: 0 auto;
            padding: 50px 20px 60px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            contain: layout style;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            aspect-ratio: 370 / 421; 
            background: #1a1a1a;
            cursor: pointer;
            width: 100%;
            will-change: transform;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: var(--transition-smooth);
        }

        .gallery-item:hover {
            border-color: rgba(201, 167, 106, 0.4);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: contain; 
            transition: var(--transition-smooth);
            display: block;
            content-visibility: auto;
        }

        .gallery-item:hover img {
            transform: scale(1.04);
        }

        /* --- On-Page Extra SEO Content Section --- */
        .seo-content-section {
            max-width: 1200px;
            margin: 20px auto 70px;
            padding: 0 20px;
        }

        .seo-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .seo-card {
            background: var(--card-bg);
            border: 1px solid rgba(201, 167, 106, 0.15);
            padding: 30px;
            border-radius: 14px;
            transition: var(--transition-smooth);
        }

        .seo-card:hover {
            border-color: var(--brand-gold);
            transform: translateY(-3px);
        }

        .seo-card h3 {
            color: var(--brand-gold);
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .seo-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* --- FAQ Accordion Section --- */
        .faq-section {
            max-width: 1000px;
            margin: 0 auto 90px;
            padding: 0 20px;
        }

        .faq-title {
            text-align: center;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            color: var(--brand-gold);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .faq-subtitle {
            text-align: center;
            color: var(--text-muted);
            margin-bottom: 40px;
            font-size: 1rem;
        }

        .faq-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .faq-item {
            background: var(--card-bg);
            border: 1px solid rgba(201, 167, 106, 0.15);
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition-smooth);
        }

        .faq-item:hover {
            border-color: rgba(201, 167, 106, 0.4);
        }

        .faq-question {
            width: 100%;
            background: none;
            border: none;
            outline: none;
            padding: 22px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-light);
            font-size: 1.05rem;
            font-weight: 600;
            font-family: var(--font-main);
            text-align: left;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .faq-question:hover {
            color: var(--brand-gold);
        }

        .faq-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(201, 167, 106, 0.1);
            color: var(--brand-gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
            flex-shrink: 0;
            margin-left: 15px;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
            background: var(--brand-gold);
            color: var(--bg-dark);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0, 1, 0, 1), padding 0.3s ease;
            background: rgba(0, 0, 0, 0.2);
        }

        .faq-item.active .faq-answer {
            max-height: 300px;
            transition: max-height 0.4s cubic-bezier(1, 0, 1, 0);
        }

        .faq-answer p {
            padding: 0 25px 22px;
            color: var(--text-muted);
            font-size: 0.98rem;
            line-height: 1.6;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-dark); }
        ::-webkit-scrollbar-thumb { background: var(--brand-gold); border-radius: 10px; }

        /* Responsive Adjustments */
        @media (max-width: 1024px) and (min-width: 601px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 600px) {
            .breadcrumb-container {
                padding-top: 25px;
            }
            .breadcrumb-nav {
                padding: 6px 16px;
            }
            .breadcrumb-list {
                font-size: 0.8rem;
            }
            .hero-clean {
                padding: 20px 15px 30px;
            }
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                justify-items: center;
            }
            .gallery-item {
                border-radius: 12px;
                width: 90%; 
            }
            .faq-question {
                padding: 18px 20px;
                font-size: 0.95rem;
            }
            .faq-answer p {
                padding: 0 20px 18px;
                font-size: 0.9rem;
            }
        }

        header a, .main-menu a { text-decoration: none !important; }
    </style>
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <!-- Breadcrumb Nav Section (Centered format: Home/Resources/Gallery) -->
    <div class="breadcrumb-container">
        <nav class="breadcrumb-nav" aria-label="Breadcrumb">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="https://theyyampattilgcc.com/">Home</a>
                </li>
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item">
                    Resources
                </li>
                <li class="breadcrumb-separator">/</li>
                <li class="breadcrumb-item active" aria-current="page">
                    Gallery
                </li>
            </ol>
        </nav>
    </div>

    <section class="hero-clean">
        <h1>Gallery</h1>
        <p>Witness the fusion of traditional craftsmanship and contemporary luxury through our bespoke furniture collections.</p>
    </section>

    <main class="gallery-wrapper">
        <div class="gallery-grid">
            <!-- Manual items with high-value SEO Alt Text -->
            <div class="gallery-item">
                <a href="assets/images/gallery/w-panel-1.jpg" class="glightbox" aria-label="View Custom Wooden Wall Paneling Design">
                    <img src="assets/images/gallery/w-panel-1.jpg" alt="Exquisite Custom Wooden Wall Paneling Design by Theyyampattil Furniture UAE" loading="lazy" width="370" height="421">
                </a>
            </div>
            
            <div class="gallery-item">
                <a href="assets/images/gallery/w-panel-2.jpg" class="glightbox" aria-label="View Luxury Living Room Interior">
                    <img src="assets/images/gallery/w-panel-2.jpg" alt="Luxury Living Room Interior and Custom Joinery Work" loading="lazy" width="370" height="421">
                </a>
            </div>

            <div class="gallery-item">
                <a href="assets/images/gallery/w-panel-3.jpg" class="glightbox" aria-label="View Bespoke Interior Craftsmanship">
                    <img src="assets/images/gallery/w-panel-3.jpg" alt="Bespoke Woodcraft and Architectural Feature Wall Design" loading="lazy" width="370" height="421">
                </a>
            </div>

            <div class="gallery-item">
                <a href="assets/images/gallery/w-panel-4.jpg" class="glightbox" aria-label="View Premium Home Design Showcase">
                    <img src="assets/images/gallery/w-panel-4.jpg" alt="Premium Modern Home Interior with Designer Accent Lighting" loading="lazy" width="370" height="421">
                </a>
            </div>

            <!-- Dynamic PHP Loop with Keyword-Rich SEO Alt Text -->
            <?php 
                $extra_images = ["gallery-page-25.jpg", "gallery-page-24.jpg", "gallery-page-23.jpg", "gallery-page-22.jpg", "gallery-page-21.jpg", "gallery-page-20.jpg", "gallery-page-19.jpg", "gallery-page-18.jpg", "gallery-page-17.jpg", "gallery-page-16.jpg", "gallery-page-15.jpg", "gallery-page-14.jpg", "gallery-page-13.jpg", "gallery-page-12.jpg", "gallery-page-11.jpg", "gallery-page-10.jpg", "gallery-page-1.jpg", "gallery-page-2.jpg", "gallery-page-3.jpg", "gallery-page-4.jpg", "gallery-page-5.jpg", "gallery-page-6.jpg", "gallery-page-7.jpg", "gallery-page-8.jpg", "gallery-page-9.jpg"];
                
                $alt_keywords = [
                    "Bespoke Luxury Villa Interior Design in UAE",
                    "Custom Engineered Modular Kitchen Cabinetry",
                    "Modern Luxury Master Bedroom Wardrobe Design",
                    "Handcrafted Premium Solid Wood Dining Table",
                    "Contemporary Living Room Wall Decor Paneling",
                    "Exclusive Designer Sofa Set with Custom Upholstery",
                    "High-End Hospitality & Commercial Interior Fitout",
                    "Custom Wood Accent Lighting Wall Design",
                    "Modern Minimalist TV Console & Media Wall",
                    "Luxury Marble & Solid Wood Executive Office Desk",
                    "Custom Built-in Walk-in Closet and Storage",
                    "Premium Royal Arabian Style Living Room Suite",
                    "Contemporary Architectural Wood Cladding Detail",
                    "Custom Luxury Dining Room Furniture Set",
                    "High-End Custom Upholstered Headboard",
                    "Modern European Style Custom Kitchen Design",
                    "Luxury Joinery & Millwork Execution UAE",
                    "Bespoke Italian Leather Lounge Armchair",
                    "Modern Villa Entrance Lobby Decor & Lighting",
                    "Custom Floating Vanity & Bathroom Joinery",
                    "Luxury Bespoke Furniture Collection Showcase",
                    "Modern Minimalist Bedroom Suite Design",
                    "Custom Decorative Wooden Screen partition",
                    "Premium Executive Boardroom Table Joinery",
                    "Bespoke Crafted Interior Design Portfolio"
                ];

                foreach ($extra_images as $index => $img): 
                    $alt_text = isset($alt_keywords[$index]) ? $alt_keywords[$index] : "Theyyampattil Luxury Custom Furniture Showcase";
            ?>
            <div class="gallery-item">
                <a href="assets/images/gallery/<?php echo $img; ?>" class="glightbox" aria-label="Enlarge <?php echo $alt_text; ?>">
                    <img src="assets/images/gallery/<?php echo $img; ?>" alt="<?php echo $alt_text; ?>" loading="lazy" width="370" height="421">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Extra SEO Optimized On-Page Content Section -->
    <section class="seo-content-section">
        <div class="seo-card-grid">
            <article class="seo-card">
                <h3>Bespoke Luxury Furniture</h3>
                <p>Every piece in our gallery reflects uncompromised craftsmanship. We design and manufacture custom furniture engineered to harmonize with luxury residences and commercial spaces across the UAE and GCC.</p>
            </article>
            <article class="seo-card">
                <h3>Architectural Joinery & Paneling</h3>
                <p>From modern wood paneling and feature accent walls to custom ceiling treatments, our interior joinery solutions elevate structural spaces into refined works of art.</p>
            </article>
            <article class="seo-card">
                <h3>Tailored Kitchens & Wardrobes</h3>
                <p>Discover personalized storage solutions. Our modular luxury kitchens and walk-in wardrobes combine ergonomic perfection with high-end aesthetic finishes.</p>
            </article>
        </div>
    </section>

    <!-- SEO Optimized Clickable Accordion FAQ Section -->
    <section class="faq-section" id="faq">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <p class="faq-subtitle">Everything you need to know about our custom luxury furniture and interior design services.</p>
        
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Does Theyyampattil offer fully customized luxury furniture in UAE?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, Theyyampattil specializes in bespoke, custom-tailored furniture, luxury wall paneling, modular kitchens, and custom wardrobes engineered to meet your exact interior vision.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Can I visit a showroom to view these furniture designs in person?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolute. You can visit our experience showrooms across the UAE to explore custom wood finishes, premium upholstery fabrics, and live displays of our interior joinery work.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you provide turnkey interior design and installation services across the GCC?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide complete turnkey solutions ranging from initial space planning and bespoke manufacturing to professional on-site delivery and precision installation throughout the GCC.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What materials are used in Theyyampattil bespoke furniture?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We source premium-grade hardwoods, high-density MR engineered wood, luxurious metal accents, eco-friendly lacquers, and top-tier upholstery fabrics for lasting quality.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>How can I request a quote or design consultation for a custom project?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can contact our interior specialists via our contact page, call our showrooms directly, or connect with us on WhatsApp to discuss your project requirements and obtain a custom quote.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/fixed-floating-buttons.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/ghlightbox/dist/js/glightbox.min.js"></script>
    <script>
        // Lightbox Initializer
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true,
            draggable: true
        });

        // Clickable FAQ Accordion Interactivity
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                const isOpen = faqItem.classList.contains('active');

                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                });

                // Open clicked item if it was closed
                if (!isOpen) {
                    faqItem.classList.add('active');
                    button.setAttribute('aria-expanded', 'true');
                }
            });
        });
    </script>
</body>
</html>