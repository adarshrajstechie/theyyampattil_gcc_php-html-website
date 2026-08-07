<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
    :root {
        --bg-color: #151515;
        --card-bg: #1c1c1c;
        --brand-color: #c9a76a;
        --brand-hover: #b39258;
        --text-main: #ffffff;
        --text-muted: #a0a0a0;
        --input-bg: #222222;
        --overlay-bg: rgba(10, 10, 10, 0.85);
    }

    /* Popup Modal Overlay Backdrop */
    .contact-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--overlay-bg);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: 2147483647 !important;
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Aligns to top when content overflows so top text is never cut off */
        overflow-y: auto; /* Fixes tiny screen viewport clipping issues natively */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.4s;
        padding: 20px;
        box-sizing: border-box;
    }

    /* Active State For Backdrop */
    .contact-popup-overlay.is-active {
        opacity: 1;
        visibility: visible;
    }

    /* Ultra Modern Modal Container */
    .contact-popup-card {
        background: var(--card-bg);
        border: 2px solid var(--brand-color);
        border-radius: 20px;
        width: 100%;
        max-width: 550px;
        margin: auto; /* Dynamically centers horizontally and vertically when screen size allows */
        padding: 40px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        box-sizing: border-box;
        position: relative;
        transform: translateY(30px) scale(0.95);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    /* Active State For Animation Scaling */
    .contact-popup-overlay.is-active .contact-popup-card {
        transform: translateY(0) scale(1);
    }

    /* Close Button Layout Positioning */
    .contact-popup-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: transparent;
        border: none;
        color: var(--text-muted);
        font-size: 22px;
        cursor: pointer;
        width: 36px;
        height: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        z-index: 10;
    }
    .contact-popup-close:hover {
        color: var(--brand-color);
        background-color: rgba(201, 167, 106, 0.1);
        transform: rotate(90deg);
    }

    /* Form Inner Elements Styling */
    .card-header-popup {
        text-align: center;
        margin-bottom: 30px;
        padding-right: 10px;
    }

    .card-header-popup h1 {
        color: var(--brand-color);
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 10px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .card-header-popup p {
        color: var(--text-muted);
        font-size: 14px;
        margin: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-group-popup {
        margin-bottom: 22px;
        display: flex;
        flex-direction: column;
    }

    .form-group-popup label {
        font-size: 13px;
        font-weight: 500;
        color: var(--brand-color);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-control-popup {
        background-color: var(--input-bg);
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

    .form-control-popup:focus {
        outline: none;
        border-color: var(--brand-color);
        box-shadow: 0 0 0 2px rgba(201, 167, 106, 0.4);
    }

    /* Intl-tel-input structural overrides within modal */
    .contact-popup-card .iti {
        width: 100% !important;
        display: block !important;
    }
    
    .contact-popup-card .iti__country-list {
        background-color: #222222 !important;
        border: 1px solid var(--brand-color) !important;
        color: #fff !important;
        z-index: 1001;
    }
    
    .contact-popup-card .iti__country:hover, 
    .contact-popup-card .iti__country.iti__highlight {
        background-color: var(--brand-color) !important;
        color: #000 !important;
    }

    textarea.form-control-popup {
        resize: vertical;
        min-height: 90px;
    }

    .submit-btn-popup {
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

    .submit-btn-popup:hover {
        background-color: var(--brand-hover);
    }

    .submit-btn-popup:active {
        transform: scale(0.99);
    }

    .submit-btn-popup:disabled {
        background-color: var(--brand-hover);
        cursor: not-allowed;
        opacity: 0.8;
    }

    /* Ultra Responsive Device Optimization rulesets */
    @media (max-width: 768px) {
        .contact-popup-card {
            padding: 30px 25px;
        }
    }
    @media (max-width: 480px) {
        .contact-popup-overlay {
            padding: 10px;
        }
        .contact-popup-card {
            padding: 25px 20px;
            border-radius: 16px;
        }
        .contact-popup-close {
            top: 12px;
            right: 12px;
            font-size: 18px;
            width: 32px;
            height: 32px;
        }
        .card-header-popup {
            margin-bottom: 20px;
            padding-right: 25px; /* Keeps heading layout safe from hitting the close button */
            text-align: left; /* Better readability on tiny devices */
        }
        .card-header-popup h1 {
            font-size: 22px;
        }
        .form-control-popup {
            padding: 12px 14px;
            font-size: 14px;
        }
    }
</style>

<div class="contact-popup-overlay" id="contactPopupOverlay">
    <div class="contact-popup-card">
        <button type="button" class="contact-popup-close" id="closeContactPopup" aria-label="Close form">
            <i class="fa-solid fa-xmark"></i>
        </button>
        
        <div class="card-header-popup">
            <h1><i class="fa-solid fa-phone"></i> &nbsp;Fill Form & Call Now</h1>
            <p>Please provide your requirements to initiate your direct phone line.</p>
        </div>

        <form id="verificationPopupForm">
            <div class="form-group-popup">
                <label for="pop_fullname">Full Name *</label>
                <input type="text" id="pop_fullname" name="fullname" class="form-control-popup" placeholder="John Doe" required>
            </div>

            <div class="form-group-popup">
                <label for="pop_phone">Phone Number *</label>
                <input type="tel" id="pop_phone" name="phone" class="form-control-popup" required>
                <input type="hidden" id="pop_full_phone" name="full_phone">
            </div>

            <div class="form-group-popup">
                <label for="pop_email">Email Address *</label>
                <input type="email" id="pop_email" name="email" class="form-control-popup" placeholder="name@example.com" required>
            </div>

            <div class="form-group-popup">
                <label for="pop_furniture_type">Furniture Type *</label>
                <select id="pop_furniture_type" name="furniture_type" class="form-control-popup" required>
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

            <div class="form-group-popup">
                <label for="pop_requirements">Additional Requirements (Optional)</label>
                <textarea id="pop_requirements" name="requirements" class="form-control-popup" placeholder="Describe any specific configurations or measurements..."></textarea>
            </div>

            <button type="submit" id="pop_submitBtn" class="submit-btn-popup">
                <i class="fa-solid fa-phone"></i> Submit & Call Now
            </button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const overlay = document.getElementById("contactPopupOverlay");
        const closeBtn = document.getElementById("closeContactPopup");
        const phoneInput = document.querySelector("#pop_phone");
        const fullPhoneHidden = document.querySelector("#pop_full_phone");
        const submitBtn = document.querySelector("#pop_submitBtn");
        const form = document.querySelector("#verificationPopupForm");

        // 1. POPUP WINDOW MANAGEMENT ENGINE
        function openPopup(e) {
            e.preventDefault();
            overlay.classList.add("is-active");
            document.body.style.overflow = "hidden"; // Prevent background content shifting and scroll leaks
        }

        function closePopup() {
            overlay.classList.remove("is-active");
            document.body.style.overflow = ""; // Reactivate core window scrolling cleanly
        }

        // Attach event listener dynamically to elements globally utilizing 'button-call' classes
        document.addEventListener("click", function(e) {
            if (e.target && e.target.closest(".button-call")) {
                openPopup(e);
            }
        });

        // Close on close-button selection click or clicking outside modal envelope frame area
        closeBtn.addEventListener("click", closePopup);
        overlay.addEventListener("click", function(e) {
            if (e.target === overlay) {
                closePopup();
            }
        });
        
        // Escape Keyboard key closing routine support 
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && overlay.classList.contains("is-active")) {
                closePopup();
            }
        });

        // 2. INTERNATIONAL PHONE ROUTINE CONFIGURATION
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

        // 3. BACKGROUND ASYNC FORM INTERCEPTION DISPATCHER
        form.addEventListener("submit", function(e) {
            e.preventDefault(); 
            
            submitBtn.disabled = true;
            const originalButtonContent = submitBtn.innerHTML;
            submitBtn.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...`;

            // Standardize full global layout phone strings prior to distribution execution pipelines
            fullPhoneHidden.value = iti.getNumber();

            const formData = new FormData(form);

            // Transmit dataset background payload to original processing destination relative to root paths
            fetch('store/button-submit/send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                handleCallAndClose(originalButtonContent);
            })
            .catch(error => {
                console.warn("Mail background dispatcher network warning:", error);
                handleCallAndClose(originalButtonContent);
            });

            function handleCallAndClose(originalContent) {
                // Initialize internal device dialer link natively 
                window.location.href = "tel:+971559132200";

                // Re-enable submit button and restore text state
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalContent;

                // Close the popup and clean up inputs without external page redirection
                closePopup();
                form.reset();
            }
        });
    });
</script>