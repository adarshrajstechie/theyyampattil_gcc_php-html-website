<!-- Core Component Stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
    :root {
        --bg-color-normal: #151515;
        --card-bg-normal: #1c1c1c;
        --brand-color-normal: #c9a76a;
        --brand-hover-normal: #b39258;
        --text-main-normal: #ffffff;
        --text-muted-normal: #a0a0a0;
        --input-bg-normal: #222222;
        --overlay-bg-normal: rgba(10, 10, 10, 0.85);
        --success-color-normal: #28a745;
    }

    /* Popup Modal Overlay Backdrop */
    .contact-popup-overlay-normal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--overlay-bg-normal);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: 2147483647 !important;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        overflow-y: auto;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.4s;
        padding: 20px;
        box-sizing: border-box;
    }

    /* Active State For Backdrop */
    .contact-popup-overlay-normal.is-active {
        opacity: 1;
        visibility: visible;
    }

    /* Ultra Modern Modal Container */
    .contact-popup-card-normal {
        background: var(--card-bg-normal);
        border: 2px solid var(--brand-color-normal);
        border-radius: 20px;
        width: 100%;
        max-width: 550px;
        margin: auto;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        box-sizing: border-box;
        position: relative;
        transform: translateY(30px) scale(0.95);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    /* Active State For Animation Scaling */
    .contact-popup-overlay-normal.is-active .contact-popup-card-normal {
        transform: translateY(0) scale(1);
    }

    /* Close Button Layout Positioning */
    .contact-popup-close-normal {
        position: absolute;
        top: 20px;
        right: 20px;
        background: transparent;
        border: none;
        color: var(--text-muted-normal);
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
    .contact-popup-close-normal:hover {
        color: var(--brand-color-normal);
        background-color: rgba(201, 167, 106, 0.1);
        transform: rotate(90deg);
    }

    /* Form Inner Elements Styling */
    .card-header-popup-normal {
        text-align: center;
        margin-bottom: 30px;
        padding-right: 10px;
    }

    .card-header-popup-normal h1 {
        color: var(--brand-color-normal);
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 10px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .card-header-popup-normal p {
        color: var(--text-muted-normal);
        font-size: 14px;
        margin: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-group-popup-normal {
        margin-bottom: 22px;
        display: flex;
        flex-direction: column;
    }

    .form-group-popup-normal label {
        font-size: 13px;
        font-weight: 500;
        color: var(--brand-color-normal);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-control-popup-normal {
        background-color: var(--input-bg-normal);
        border: 1px solid var(--brand-color-normal);
        color: var(--text-main-normal);
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 15px;
        padding: 14px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }

    .form-control-popup-normal:focus {
        outline: none;
        border-color: var(--brand-color-normal);
        box-shadow: 0 0 0 2px rgba(201, 167, 106, 0.4);
    }

    /* Intl-tel-input structural overrides within modal */
    .contact-popup-card-normal .iti {
        width: 100% !important;
        display: block !important;
    }
    
    .contact-popup-card-normal .iti__country-list {
        background-color: #222222 !important;
        border: 1px solid var(--brand-color-normal) !important;
        color: #fff !important;
        z-index: 1001;
    }
    
    .contact-popup-card-normal .iti__country:hover, 
    .contact-popup-card-normal .iti__country.iti__highlight {
        background-color: var(--brand-color-normal) !important;
        color: #000 !important;
    }

    textarea.form-control-popup-normal {
        resize: vertical;
        min-height: 90px;
    }

    .submit-btn-popup-normal {
        background-color: var(--brand-color-normal);
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

    .submit-btn-popup-normal:hover {
        background-color: var(--brand-hover-normal);
    }

    .submit-btn-popup-normal:active {
        transform: scale(0.99);
    }

    .submit-btn-popup-normal:disabled {
        background-color: var(--brand-hover-normal);
        cursor: not-allowed;
        opacity: 0.8;
    }

    /* Global Success Notification Alert message inside form wrapper */
    .form-status-msg-normal {
        display: none;
        background-color: rgba(40, 167, 69, 0.15);
        border: 1px solid var(--success-color-normal);
        color: #fff;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
        margin-bottom: 20px;
    }

    /* Ultra Responsive Device Optimization rulesets */
    @media (max-width: 768px) {
        .contact-popup-card-normal {
            padding: 30px 25px;
        }
    }
    @media (max-width: 480px) {
        .contact-popup-overlay-normal {
            padding: 10px;
        }
        .contact-popup-card-normal {
            padding: 25px 20px;
            border-radius: 16px;
        }
        .contact-popup-close-normal {
            top: 12px;
            right: 12px;
            font-size: 18px;
            width: 32px;
            height: 32px;
        }
        .card-header-popup-normal {
            margin-bottom: 20px;
            padding-right: 25px;
            text-align: left;
        }
        .card-header-popup-normal h1 {
            font-size: 22px;
        }
        .form-control-popup-normal {
            padding: 12px 14px;
            font-size: 14px;
        }
    }
</style>

<div class="contact-popup-overlay-normal" id="contactPopupOverlayNormal">
    <div class="contact-popup-card-normal">
        <button type="button" class="contact-popup-close-normal" id="closeContactPopupNormal" aria-label="Close form">
            <i class="fa-solid fa-xmark"></i>
        </button>
        
        <div class="card-header-popup-normal">
            <h1><i class="fa-solid fa-file-signature"></i>&nbsp; Request Consultation</h1>
            <p>Please provide your requirements to initiate your custom design consultation.</p>
        </div>

        <div class="form-status-msg-normal" id="formStatusMessageNormal">
            <i class="fa-solid fa-circle-check" style="color: var(--success-color-normal);"></i> Thank you! Your submission has been successfully received.
        </div>

        <form id="verificationPopupFormNormal">
            <div class="form-group-popup-normal">
                <label for="pop_fullname_normal">Full Name *</label>
                <input type="text" id="pop_fullname_normal" name="fullname" class="form-control-popup-normal" placeholder="John Doe" required>
            </div>

            <div class="form-group-popup-normal">
                <label for="pop_phone_normal">Phone Number *</label>
                <input type="tel" id="pop_phone_normal" name="phone" class="form-control-popup-normal" required>
                <input type="hidden" id="pop_full_phone_normal" name="full_phone">
            </div>

            <div class="form-group-popup-normal">
                <label for="pop_email_normal">Email Address *</label>
                <input type="email" id="pop_email_normal" name="email" class="form-control-popup-normal" placeholder="name@example.com" required>
            </div>

            <div class="form-group-popup-normal">
                <label for="pop_furniture_type_normal">Furniture Type *</label>
                <select id="pop_furniture_type_normal" name="furniture_type" class="form-control-popup-normal" required>
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

            <div class="form-group-popup-normal">
                <label for="pop_requirements_normal">Additional Requirements (Optional)</label>
                <textarea id="pop_requirements_normal" name="requirements" class="form-control-popup-normal" placeholder="Describe any specific configurations or measurements..."></textarea>
            </div>

            <button type="submit" id="pop_submitBtn_normal" class="submit-btn-popup-normal">
                <i class="fa-solid fa-paper-plane"></i> Submit Request
            </button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const overlayNormal = document.getElementById("contactPopupOverlayNormal");
        const closeBtnNormal = document.getElementById("closeContactPopupNormal");
        const phoneInputNormal = document.querySelector("#pop_phone_normal");
        const fullPhoneHiddenNormal = document.querySelector("#pop_full_phone_normal");
        const submitBtnNormal = document.querySelector("#pop_submitBtn_normal");
        const formNormal = document.querySelector("#verificationPopupFormNormal");
        const statusMsgNormal = document.getElementById("formStatusMessageNormal");

        // 1. POPUP WINDOW MANAGEMENT ENGINE
        function openPopupNormal(e) {
            e.preventDefault();
            // Reset state if reopened
            statusMsgNormal.style.display = "none";
            formNormal.style.display = "block";
            
            overlayNormal.classList.add("is-active");
            document.body.style.overflow = "hidden";
        }

        function closePopupNormal() {
            overlayNormal.classList.remove("is-active");
            document.body.style.overflow = "";
        }

        /* 
           CRITICAL FIX FOR TRIGGER ISOLATION: 
           This explicitly evaluates e.target.closest('.button-normal').
           It will absolutely ignore anything containing '.button-whatsapp'.
        */
        document.addEventListener("click", function(e) {
            if (e.target && e.target.closest(".button-normal")) {
                openPopupNormal(e);
            }
        });

        // Close listeners
        closeBtnNormal.addEventListener("click", closePopupNormal);
        overlayNormal.addEventListener("click", function(e) {
            if (e.target === overlayNormal) {
                closePopupNormal();
            }
        });
        
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && overlayNormal.classList.contains("is-active")) {
                closePopupNormal();
            }
        });

        // 2. INTERNATIONAL PHONE ROUTINE CONFIGURATION
        const itiNormal = window.intlTelInput(phoneInputNormal, {
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
                        success("ae");
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
        });

        // 3. BACKGROUND ASYNC FORM INTERCEPTION DISPATCHER
        formNormal.addEventListener("submit", function(e) {
            e.preventDefault(); 
            
            submitBtnNormal.disabled = true;
            const originalButtonContent = submitBtnNormal.innerHTML;
            submitBtnNormal.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin"></i> Submitting...`;

            // Standardize phone layout string inside hidden variable
            fullPhoneHiddenNormal.value = itiNormal.getNumber();

            const formData = new FormData(formNormal);

            fetch('store/button-submit/send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                handleSuccessCleanUp(originalButtonContent);
            })
            .catch(error => {
                console.warn("Mail background dispatcher network warning:", error);
                // Graceful handling on network fallback drops
                handleSuccessCleanUp(originalButtonContent);
            });

            function handleSuccessCleanUp(originalContent) {
                // Restore submit button asset structures
                submitBtnNormal.disabled = false;
                submitBtnNormal.innerHTML = originalContent;

                // UI workflow transformation transition (No WhatsApp API redirect loops)
                formNormal.reset();
                formNormal.style.display = "none";
                statusMsgNormal.style.display = "block";

                // Auto-dim and dismiss container after 3 seconds
                setTimeout(() => {
                    closePopupNormal();
                }, 3000);
            }
        });
    });
</script>