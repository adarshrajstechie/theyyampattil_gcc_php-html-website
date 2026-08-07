<?php 
session_start();

// Generate a stronger arithmetic captcha using - and * operators
if (!isset($_POST['captcha_input'])) {
    // Pick a random operator: 0 for subtraction, 1 for multiplication
    $operator_type = rand(0, 1); 

    if ($operator_type === 0) {
        // Subtraction: Ensure num1 is larger so the answer is always positive
        $num1 = rand(5, 15);
        $num2 = rand(1, 4);
        $_SESSION['captcha_operator'] = '-';
        $_SESSION['captcha_answer'] = $num1 - $num2;
    } else {
        // Multiplication: Keep numbers small so it is easy for humans to calculate
        $num1 = rand(2, 9);
        $num2 = rand(2, 5);
        $_SESSION['captcha_operator'] = '×'; // Clean symbol for display
        $_SESSION['captcha_answer'] = $num1 * $num2;
    }
    
    // Store numbers in session to persist across the page render
    $_SESSION['captcha_num1'] = $num1;
    $_SESSION['captcha_num2'] = $num2;
}

// Assign variables to display in the HTML
$num1 = isset($_SESSION['captcha_num1']) ? $_SESSION['captcha_num1'] : 0;
$num2 = isset($_SESSION['captcha_num2']) ? $_SESSION['captcha_num2'] : 0;
$symbol = isset($_SESSION['captcha_operator']) ? $_SESSION['captcha_operator'] : '-';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../">
    <link rel="canonical" href="https://theyyampattilgcc.com/contact" />
    <meta name="robots" content="index, follow">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Theyyampattil Furniture Stores in Dubai, Sharjah & Abu Dhabi</title>
    <meta name="description" content="Contact Theyyampattil Furniture Trading LLC. Visit our luxury furniture showrooms in Dubai, Sharjah, and Abu Dhabi or call us at 800 8733 / +971 55 913 2200." />
    
    <!-- Open Graph / Social Media Metas -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact Us | Theyyampattil Furniture GCC">
    <meta property="og:description" content="Get in touch with Theyyampattil Furniture for world-class luxury home and office furniture in the UAE. Showrooms in Dubai, Sharjah, and Abu Dhabi.">
    <meta property="og:url" content="https://theyyampattilgcc.com/contact">
    <meta property="og:site_name" content="Theyyampattil Furniture">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us | Theyyampattil Furniture GCC">
    <meta name="twitter:description" content="Reach out to Theyyampattil Furniture for world-class luxury furniture across Dubai, Sharjah, and Abu Dhabi.">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" /> 
    
    <!-- intel tel input css for phone number input field in contact form -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

    <!-- Common <head> include materials like schema markup,social tags,...etc -->
    <?php include 'includes/head-tag-include.php'; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WQCL6SX9EV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-WQCL6SX9EV');
    </script>
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NHMN58QX');</script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34639cb93a.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#c9a76a',
                        darkBg: '#151515',
                        darkCard: '#1d1d1d',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body { background-color: #151515; color: #ffffff; font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; }
        header a, .main-menu a { text-decoration: none !important; }

        .form-input {
            background: #1d1d1d;
            border: 1px solid #c9a76a;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #c9a76a;
            outline: none;
            background: #252525;
        }

        .btn-luxury {
            background: #c9a76a;
            color: #151515;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        .btn-luxury:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(201, 167, 106, 0.2);
        }
        .btn-luxury:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid #333;
        }

        #form-status-toast {
            display: none;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
            font-weight: 600;
            text-align: center;
            word-break: break-word;
        }
        .toast-success { background: rgba(40, 167, 69, 0.15); color: #2ecc71; border: 1px solid #2ecc71; }
        .toast-error { background: rgba(231, 76, 60, 0.15); color: #e74c3c; border: 1px solid #e74c3c; }

        .btn-loading { color: transparent !important; pointer-events: none; }
        .btn-loading::after {
            content: "";
            position: absolute; width: 20px; height: 20px; top: 50%; left: 50%;
            margin: -10px 0 0 -10px; 
            border: 3px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%; 
            border-top-color: #151515;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .captcha-box {
            background: #252525;
            border: 1px dashed #c9a76a;
            padding: 12px 20px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            gap: 15px;
        }
        
        /* Fixed styling override wrapper for country select container alignment */
        .iti { width: 100% !important; display: block !important; }
        .iti__country-list { background-color: #1d1d1d !important; border: 1px solid #c9a76a !important; color: #fff !important; }
        .iti__country:hover { background-color: #252525 !important; }
    </style>

    <!-- SEO Contact Page & Business Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ContactPage",
          "@id": "https://theyyampattilgcc.com/contact/#webpage",
          "url": "https://theyyampattilgcc.com/contact",
          "name": "Contact Us | Theyyampattil Furniture",
          "description": "Reach out to Theyyampattil Furniture Trading LLC or visit our showrooms across Dubai, Sharjah, and Abu Dhabi.",
          "isPartOf": {
            "@type": "WebSite",
            "@id": "https://theyyampattilgcc.com/#website",
            "url": "https://theyyampattilgcc.com/",
            "name": "Theyyampattil Furniture"
          }
        },
        {
          "@type": "FurnitureStore",
          "@id": "https://theyyampattilgcc.com/#organization",
          "name": "Theyyampattil Furniture Trading LLC",
          "url": "https://theyyampattilgcc.com/",
          "logo": "https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png",
          "telephone": "+971559132200",
          "email": "sales@theyyampattilgcc.com",
          "sameAs": [
            "https://www.facebook.com/share/1AcRXM8DF7/?mibextid=wwXIfr",
            "https://x.com/TheyyampattilF",
            "https://www.youtube.com/@TheyyampattilFurnitureuae/featured",
            "https://instagram.com/theyyampattil_furniture_dubai?igshid=MzRlODBiNWFlZA=="
          ],
          "department": [
            {
              "@type": "FurnitureStore",
              "name": "Theyyampattil Furniture - Dubai Showroom",
              "telephone": "+97143336116",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Dubai",
                "addressCountry": "AE"
              }
            },
            {
              "@type": "FurnitureStore",
              "name": "Theyyampattil Furniture - Sharjah Showroom",
              "telephone": "+97167676297",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Sharjah",
                "addressCountry": "AE"
              }
            },
            {
              "@type": "FurnitureStore",
              "name": "Theyyampattil Furniture - Abu Dhabi Showroom",
              "telephone": "+97126268526",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Abu Dhabi",
                "addressCountry": "AE"
              }
            }
          ]
        }
      ]
    }
    </script>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHMN58QX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div class="page-wrapper">
        <?php include 'includes/header.php'; ?>

        <section class="pt-32 pb-12 px-4 text-center">
            <h1 class="text-4xl md:text-7xl font-extrabold mb-4 tracking-tight">Contact <span class="text-brand">Us</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-base md:text-lg">We’re here to help you transform your space with world-class furniture. Reach out to us today.</p>
        </section>

        <section class="max-w-7xl mx-auto px-4 py-8 md:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-8 bg-darkCard p-6 md:p-12 rounded-3xl shadow-2xl">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8">Feel Free to Write</h2>
                    <form action="send-mail.php" method="post" id="modern-contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="Your name" class="form-input w-full p-4 rounded-xl text-white" required>
                            <input type="email" name="email" placeholder="Email address" class="form-input w-full p-4 rounded-xl text-white" required>
                            <div class="w-full">
                               <input type="tel" name="phone" id="phone" class="form-input w-full p-4 rounded-xl text-white !pl-16" required>
                            </div>
                            <input type="text" name="Subject" placeholder="Subject" class="form-input w-full p-4 rounded-xl text-white" required>
                        </div>
                        <textarea name="message" rows="5" placeholder="Write a message (Optional)" class="form-input w-full p-4 rounded-xl text-white"></textarea>
                        
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
                            <div class="captcha-box">
                                <span class="text-brand font-bold text-lg">Verify: <?php echo "$num1 $symbol $num2 = ?"; ?></span>
                            </div>
                            <input type="number" name="captcha_input" id="captcha_input" placeholder="Result" class="form-input w-32 p-4 rounded-xl text-white" required>
                        </div>

                        <div class="relative">
                            <button type="submit" class="btn-luxury w-full md:w-max px-12 py-4 rounded-full font-bold text-lg flex items-center justify-center">
                                Send Message
                            </button>
                        </div>
                        <div id="form-status-toast"></div>
                    </form>
                </div>

                <div class="lg:col-span-4 space-y-8">
                    <div class="bg-darkCard p-8 rounded-3xl border-l-4 border-brand">
                        <h3 class="text-brand text-sm font-bold uppercase tracking-widest mb-4">Quick Contact</h3>
                        <ul class="space-y-6">
                            <li>
                                <span class="block text-gray-500 text-sm">Call Us</span>
                                <a href="tel:+971559132200" class="text-xl font-semibold hover:text-brand transition tracking-tighter">+971 55 913 2200</a>
                            </li>
                            <li>
                                <span class="block text-gray-500 text-sm">Send Email</span>
                                <a href="mailto:sales@theyyampattilgcc.com" class="text-lg font-semibold hover:text-brand transition break-all">sales@theyyampattilgcc.com</a>
                            </li>
                            <li>
                                <span class="block text-gray-500 text-sm">Visit Office</span>
                                <div class="text-gray-300 leading-relaxed">
                                    Theyyampattil Furniture Trading LLC<br>
                                    Toll free: <a href="tel:8008733" class="hover:text-brand font-semibold">800 8733</a><br>
                                    <span class="text-sm block mt-2">
                                        <strong>Dubai:</strong> <a href="tel:+97143336116" class="hover:text-brand">04 333 6116</a><br>
                                        <strong>Sharjah:</strong> <a href="tel:+97167676297" class="hover:text-brand">06 7676 297</a><br>
                                        <strong>Abu Dhabi:</strong> <a href="tel:+97126268526" class="hover:text-brand">02 626 8526</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="flex gap-4 justify-center lg:justify-start text-2xl">
                        <a href="https://www.facebook.com/share/1AcRXM8DF7/?mibextid=wwXIfr" aria-label="Facebook" class="w-12 h-12 flex items-center justify-center rounded-full bg-darkCard hover:bg-brand hover:text-darkBg transition"><i class="fab fa-facebook"></i></a>
                        <a href="https://x.com/TheyyampattilF" aria-label="Twitter / X" class="w-12 h-12 flex items-center justify-center rounded-full bg-darkCard hover:bg-brand hover:text-darkBg transition"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.youtube.com/@TheyyampattilFurnitureuae/featured" aria-label="YouTube" class="w-12 h-12 flex items-center justify-center rounded-full bg-darkCard hover:bg-brand hover:text-darkBg transition"><i class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com/theyyampattil_furniture_dubai?igshid=MzRlODBiNWFlZA==" aria-label="Instagram" class="w-12 h-12 flex items-center justify-center rounded-full bg-darkCard hover:bg-brand hover:text-darkBg transition"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO On-Page Content Enhancement Section -->
        <section class="max-w-7xl mx-auto px-4 py-8 text-gray-300">
            <div class="bg-darkCard p-8 md:p-12 rounded-3xl border border-[#333]">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Visit Theyyampattil Furniture Showrooms Across the UAE</h2>
                <p class="mb-4 leading-relaxed">
                    At <strong>Theyyampattil Furniture Trading LLC</strong>, we bring luxury, craftsmanship, and elegant design directly to your living space. Whether you are looking for modern living room sets, dining table designs, or custom luxury interior solutions, our dedicated teams across <strong>Dubai</strong>, <strong>Sharjah</strong>, and <strong>Abu Dhabi</strong> are ready to assist you.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                    <div>
                        <h3 class="text-brand font-bold text-lg mb-2">Dubai Showroom</h3>
                        <p class="text-sm text-gray-400">Experience our finest collections in Dubai.<br> Call <a href="tel:+97143336116" class="text-brand hover:underline">04 333 6116</a> for custom design consultations.</p>
                    </div>
                    <div>
                        <h3 class="text-brand font-bold text-lg mb-2">Sharjah Showroom</h3>
                        <p class="text-sm text-gray-400">Discover premium handcrafted home interiors in Sharjah. Reach us at <a href="tel:+97167676297" class="text-brand hover:underline">06 7676 297</a>.</p>
                    </div>
                    <div>
                        <h3 class="text-brand font-bold text-lg mb-2">Abu Dhabi Showroom</h3>
                        <p class="text-sm text-gray-400">Explore exclusive luxury concepts in Abu Dhabi. Contact our team at <a href="tel:+97126268526" class="text-brand hover:underline">02 626 8526</a>.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 pb-24">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-darkCard rounded-3xl overflow-hidden border border-[#333] flex flex-col group">
                    <div class="showroom-image-container w-full overflow-hidden">
                        <div class="transition-transform duration-500 ease-in-out group-hover:scale-110">
                            <img src="assets/images/showrooms/dubai/DUBAI SHOWROOM DESKTOP.jpeg" alt="Theyyampattil Furniture Dubai Showroom" class="w-full h-auto aspect-[16/9] object-cover" loading="lazy">
                        </div>
                    </div>
                    <div class="p-6"><h3 class="text-xl font-bold text-brand mb-4">Dubai Showroom</h3></div>
                    <div class="map-container w-full h-[300px] border-t border-[#333] !rounded-t-none">
                        <iframe title="Theyyampattil Furniture Dubai Map Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.627298322262!2d55.37918687516306!3d25.18205947772064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f66dfc4024265%3A0x1031d17dc67ea2f0!2sTheyyampattil%20Furniture%20Dubai!5e0!3m2!1sen!2sae!4v1778409313211!5m2!1sen!2sae" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="bg-darkCard rounded-3xl overflow-hidden border border-[#333] flex flex-col group">
                    <div class="showroom-image-container w-full overflow-hidden">
                        <div class="transition-transform duration-500 ease-in-out group-hover:scale-110">
                            <img src="assets/images/showrooms/sharja/SHARJAH SHOWROOM DESKTOP.jpeg" alt="Theyyampattil Furniture Sharjah Showroom" class="w-full h-auto aspect-[16/9] object-cover" loading="lazy">
                        </div>
                    </div>
                    <div class="p-6"><h3 class="text-xl font-bold text-brand mb-4">Sharjah Showroom</h3></div>
                    <div class="map-container w-full h-[300px] border-t border-[#333] !rounded-t-none">
                        <iframe title="Theyyampattil Furniture Sharjah Map Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.566589515765!2d55.525350280131626!3d25.251518920115227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef58bdd23d1dd61%3A0x3cc186217397123e!2sTheyyampattil%20Furniture%20-%20Sharjah!5e0!3m2!1sen!2sae!4v1778409398913!5m2!1sen!2sae" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="bg-darkCard rounded-3xl overflow-hidden border border-[#333] flex flex-col group">
                    <div class="showroom-image-container w-full overflow-hidden">
                        <div class="transition-transform duration-500 ease-in-out group-hover:scale-110">
                            <img src="assets/images/showrooms/abhu-dhabhi/ABU DHABI SHOWROOM DESKTOP.jpeg" alt="Theyyampattil Furniture Abu Dhabi Showroom" class="w-full h-auto aspect-[16/9] object-cover" loading="lazy">
                        </div>
                    </div>
                    <div class="p-6"><h3 class="text-xl font-bold text-brand mb-4">Abu Dhabi Showroom</h3></div>
                    <div class="map-container w-full h-[300px] border-t border-[#333] !rounded-t-none">
                        <iframe title="Theyyampattil Furniture Abu Dhabi Map Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.5117728468485!2d54.63605947513298!3d24.293777778303568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e373e0cbb4ed5%3A0x55026639313ea980!2sTheyyampattil%20Furniture%20-%20Abu%20Dhabi!5e0!3m2!1sen!2sae!4v1778409421945!5m2!1sen!2sae" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/fixed-floating-buttons.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize the phone input setup
            const phoneInput = document.querySelector("#phone");
            const countryHidden = document.querySelector("#country_code");
            const form = document.querySelector("#modern-contact-form");
            let iti = null;

            // CRITICAL SYSTEM FIX: Ensure the hidden country field has a valid form name attribute
            if (countryHidden && !countryHidden.hasAttribute('name')) {
                countryHidden.setAttribute('name', 'country_code');
            }

            if (window.intlTelInput && phoneInput) {
                iti = window.intlTelInput(phoneInput, {
                    initialCountry: "auto",
                    geoIpLookup: function(success, failure) {
                        fetch('https://ipinfo.io/json').then(res => res.json()).then(data => {
                            success(data.country);
                            if(countryHidden) countryHidden.value = data.country.toUpperCase();
                        }).catch(() => {
                            success("ae");
                            if(countryHidden) countryHidden.value = "AE";
                        });
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                });

                // Listen for manual dial-code/country modifications from the interface list drop-down
                phoneInput.addEventListener('countrychange', function() {
                    if (iti && countryHidden) {
                        const currentCountryData = iti.getSelectedCountryData();
                        if (currentCountryData && currentCountryData.iso2) {
                            countryHidden.value = currentCountryData.iso2.toUpperCase();
                        }
                    }
                });
            }

            // AJAX Form Submission
            $('#modern-contact-form').on('submit', function(e) {
                e.preventDefault();
                var $form = $(this);
                var $btn = $form.find('button[type="submit"]');
                var $toast = $('#form-status-toast');
                
                // Format the phone number to full global string before collecting serialized data
                if (iti && phoneInput) {
                    phoneInput.value = iti.getNumber(); // Overwrites value with full +971500000000 string
                    
                    // Backup check to guarantee code is bound right before compiling dataset
                    const currentCountryData = iti.getSelectedCountryData();
                    if (countryHidden && currentCountryData && currentCountryData.iso2) {
                        countryHidden.value = currentCountryData.iso2.toUpperCase();
                    }
                }

                $btn.addClass('btn-loading').prop('disabled', true);
                $toast.hide(); 
                
                $.ajax({
                    type: 'POST',
                    url: $form.attr('action'),
                    data: $form.serialize(), // Now properly bundles name="country_code" into the raw string payload
                    success: function(response) {
                        $btn.removeClass('btn-loading').prop('disabled', false);
                        var cleanResponse = response.trim();
                        
                        if (cleanResponse === "success") {
                            showToast("✓ Thank you! Your message has been sent successfully.", "success");
                            $form[0].reset(); 
                            setTimeout(function(){ location.reload(); }, 2000); // Reload to get fresh captcha
                        } else if (cleanResponse === "invalid_captcha") {
                            showToast("✕ Incorrect Captcha answer. Please try again.", "error");
                        } else {
                            showToast("✕ Error: " + cleanResponse, "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        $btn.removeClass('btn-loading').prop('disabled', false);
                        showToast("✕ Connection Failed: " + error, "error");
                    }
                });
            });

            function showToast(message, type) {
                var $toast = $('#form-status-toast');
                $toast.text(message)
                    .removeClass('toast-success toast-error')
                    .addClass('toast-' + type)
                    .fadeIn();
                var timeout = (type === 'error') ? 7000 : 5000;
                setTimeout(function() { $toast.fadeOut(); }, timeout);
            }
        });
    </script>
</body>
</html>