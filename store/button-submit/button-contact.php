<?php 
// Base URL path configuration as requested
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Verification | Theyyampattil GCC</title>
    <base href="../../">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        :root {
            --bg-color: #151515;
            --brand-color: #c9a76a;
            --brand-hover: #b39258;
            --text-main: #ffffff;
            --text-muted: #a0a0a0;
            --input-bg: #222222;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-wrapper {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .contact-card {
            background: #1c1c1c;
            /* Added direct requested border color */
            border: 2px solid var(--brand-color);
            border-radius: 16px;
            width: 100%;
            max-width: 550px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
        }

        .card-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .card-header h1 {
            color: var(--brand-color);
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 10px 0;
        }

        .card-header p {
            color: var(--text-muted);
            font-size: 14px;
            margin: 0;
        }

        .form-group {
            margin-bottom: 22px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 500;
            color: var(--brand-color);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control {
            background-color: var(--input-bg);
            /* Added explicit requested border color to fields */
            border: 1px solid var(--brand-color);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 15px;
            padding: 14px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--brand-color);
            box-shadow: 0 0 0 2px rgba(201, 167, 106, 0.4);
        }

        /* Essential breakdown protection fix for intl-tel-input components on block wrappers */
        .iti {
            width: 100% !important;
            display: block !important;
        }
        
        .iti__country-list {
            background-color: #222222 !important;
            border: 1px solid var(--brand-color) !important;
            color: #fff !important;
            z-index: 100;
        }
        
        .iti__country:hover, .iti__country.iti__highlight {
            background-color: var(--brand-color) !important;
            color: #000 !important;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            background-color: var(--brand-color);
            color: #151515;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            padding: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: var(--brand-hover);
        }

        .submit-btn:active {
            transform: scale(0.99);
        }

        .submit-btn:disabled {
            background-color: var(--brand-hover);
            cursor: not-allowed;
            opacity: 0.8;
        }

        /* Responsive Breakpoints */
        @media (max-width: 576px) {
            .form-wrapper {
                padding: 20px 12px;
            }
            .contact-card {
                padding: 25px 20px;
            }
            .card-header h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<?php include '../../includes/header.php'; ?>

<div class="form-wrapper">
    <div class="contact-card">
        <div class="card-header">
            <h1>Connect With Sales</h1>
            <p>Please provide your requirements to initiate your direct phone line.</p>
        </div>

        <form id="verificationForm">
            <div class="form-group">
                <label for="fullname">Full Name *</label>
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="John Doe" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
                <input type="hidden" id="full_phone" name="full_phone">
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="form-group">
                <label for="furniture_type">Furniture Type *</label>
                <select id="furniture_type" name="furniture_type" class="form-control" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="Modern Door">Modern Door</option>
                    <option value="TV Wall">TV Wall</option>
                    <option value="Kitchen">Kitchen</option>
                    <option value="Closets">Closets</option>
                    <option value="Wall Partition">Wall Partition</option>
                    <option value="Dressing Room">Dressing Room</option>
                    <option value="Bed Panels">Bed Panels</option>
                    <option value="Wall Panels">Wall Panels</option>
                    <option value="Welcome Unit">Welcome Unit</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="requirements">Additional Requirements (Optional)</label>
                <textarea id="requirements" name="requirements" class="form-control" placeholder="Describe any specific configurations or measurements..."></textarea>
            </div>

            <button type="submit" id="submitBtn" class="submit-btn">
                <i class="fa-solid fa-phone"></i> Verify & Call Now
            </button>
        </form>
    </div>
</div>


<?php include '../../includes/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const phoneInput = document.querySelector("#phone");
        const fullPhoneHidden = document.querySelector("#full_phone");
        const submitBtn = document.querySelector("#submitBtn");
        const form = document.querySelector("#verificationForm");

        // Fixed Dynamic Country Selection Routine mapping your index design logic cleanly
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                fetch('https://ipinfo.io/json')
                    .then(res => res.json())
                    .then(data => {
                        if (data && data.country) {
                            success(data.country.toLowerCase());
                        } else {
                            success("ae");
                        }
                    })
                    .catch(() => {
                        success("ae"); // Fallback safely to UAE on failure
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
        });

        form.addEventListener("submit", function(e) {
            e.preventDefault(); // Intercept default full page reload behavior
            
            // Disable button interaction to prevent form multi-click issues
            submitBtn.disabled = true;
            const originalButtonContent = submitBtn.innerHTML;
            submitBtn.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...`;

            // Populate the hidden element with the complete standardized global number before background transmission
            fullPhoneHidden.value = iti.getNumber();

            // Construct form request context payloads
            const formData = new FormData(form);

            // Send full dataset asynchronously to the email engine script in the background
            fetch('store/button-submit/send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Trigger simultaneous phone call launch protocol and primary framework relocation
                handleCallAndRedirect();
            })
            .catch(error => {
                console.warn("Mail background dispatcher network warning:", error);
                // Fallback: Proceed to link actions safely if cross-origin or local offline errors happen
                handleCallAndRedirect();
            });

            function handleCallAndRedirect() {
                // Initialize internal device dialer link natively 
                window.location.href = "tel:+971559132200";

                // Relocate target frame context cleanly over to primary layout domain after a 400ms delay 
                setTimeout(function() {
                    window.location.href = "store/button-submit/button-contact.php";
                }, 400);
            }
        });
    });
</script>
</body>
</html>