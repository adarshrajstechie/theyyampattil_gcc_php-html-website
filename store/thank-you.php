<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../">
    <meta name="robots" content="noindex, follow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Theyyampattil Furniture</title>
    <meta http-equiv="refresh" content="5;url=store/furniture-solutions">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=300;400;600;700&family=Playfair+Display:wght=700&display=swap" rel="stylesheet">
    <link class="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    
    <style>
        :root {
            --gold: #c5a367;
            --custom-gold: #c9a76a;
            --obsidian: #121212;
            --charcoal: #1c1c1c;
        }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--obsidian); 
            color: #f8f8f8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0;
        }
        h1 { font-family: 'Playfair Display', serif; }

        /* Centering container for the card dynamically resizing across devices */
        .main-content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .glass-card {
            background: rgba(28, 28, 28, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(197, 163, 103, 0.2);
            padding: 3rem 2rem;
            border-radius: 2rem;
            text-align: center;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .countdown-bar {
            height: 4px;
            background: var(--gold);
            width: 100%;
            margin-top: 2rem;
            border-radius: 2px;
            transform-origin: left;
        }
        
        /* Mobile scaling updates */
        @media (max-width: 640px) {
            .glass-card {
                padding: 2.5rem 1.25rem;
                border-radius: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- PHP Header Included Safely -->
    <?php include '../includes/header.php'; ?>

    <!-- Main Dynamic Section to preserve layout logic across screens -->
    <main class="main-content">
        <div class="glass-card" id="thank-you-content">
            <div class="mb-8 flex justify-center">
                <div class="bg-[#c5a367]/20 p-4 rounded-full">
                    <svg class="w-12 h-12 text-[#c5a367]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">THANK YOU</h1>
            <p class="text-gray-400 text-base md:text-lg leading-relaxed mb-6">
                Your enquiry has been received. Our luxury consultants will contact you shortly to discuss your project.
            </p>

            <p class="text-sm text-[#c5a367] font-semibold tracking-widest uppercase">
                Redirecting in <span id="timer">5</span> seconds...
            </p>
            
            <div class="countdown-bar" id="progress"></div>

            <!-- Enhanced Responsive Button -->
            <div class="mt-8 px-2 sm:px-4">
                <a href="store/furniture-solutions.php" 
                   class="inline-block w-full sm:w-auto px-6 py-3.5 text-sm md:text-base font-medium normal-case text-white rounded-xl border border-[#c9a76a] bg-[#c9a76a]/10 hover:bg-[#c9a76a] hover:text-black transition-all duration-300 ease-in-out shadow-lg shadow-[#c9a76a]/5 hover:shadow-[#c9a76a]/20 transform hover:-translate-y-0.5 active:translate-y-0">
                    Click here if you are not redirected automatically
                </a>
            </div>
        </div>
    </main>

    <!-- PHP Fixed Floating Buttons Included Safely -->
    <?php include '../includes/fixed-floating-buttons.php'; ?>

    <!-- PHP Footer Included Safely -->
    <?php include '../includes/footer.php'; ?>

    <script>
        // Animations
        window.addEventListener('load', () => {
            const tl = gsap.timeline();
            
            tl.from("#thank-you-content", {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power4.out"
            })
            .from("#progress", {
                scaleX: 1,
                duration: 5,
                ease: "none"
            }, "-=0.5");

            // Timer display update
            let timeLeft = 5;
            const timerElement = document.getElementById('timer');
            const countdown = setInterval(() => {
                timeLeft--;
                timerElement.textContent = timeLeft;
                if (timeLeft <= 0) clearInterval(countdown);
            }, 1000);
        });
    </script>

</body>
</html>