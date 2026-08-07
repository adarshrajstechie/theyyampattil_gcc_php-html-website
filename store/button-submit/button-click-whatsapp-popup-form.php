<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
    :root {
        --bg-color-wa: #151515;
        --card-bg-wa: #1c1c1c;
        --brand-color-wa: #c9a76a;
        --brand-hover-wa: #b39258;
        --text-main-wa: #ffffff;
        --text-muted-wa: #a0a0a0;
        --input-bg-wa: #222222;
        --overlay-bg-wa: rgba(10, 10, 10, 0.85);
    }

    /* Popup Modal Overlay Backdrop */
    .contact-popup-overlay-wa {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--overlay-bg-wa);
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
    .contact-popup-overlay-wa.is-active {
        opacity: 1;
        visibility: visible;
    }

    /* Ultra Modern Modal Container */
    .contact-popup-card-wa {
        background: var(--card-bg-wa);
        border: 2px solid var(--brand-color-wa);
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
    .contact-popup-overlay-wa.is-active .contact-popup-card-wa {
        transform: translateY(0) scale(1);
    }

    /* Close Button Layout Positioning */
    .contact-popup-close-wa {
        position: absolute;
        top: 20px;
        right: 20px;
        background: transparent;
        border: none;
        color: var(--text-muted-wa);
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
    .contact-popup-close-wa:hover {
        color: var(--brand-color-wa);
        background-color: rgba(201, 167, 106, 0.1);
        transform: rotate(90deg);
    }

    /* Form Inner Elements Styling */
    .card-header-popup-wa {
        text-align: center;
        margin-bottom: 30px;
        padding-right: 10px;
    }

    .card-header-popup-wa h1 {
        color: var(--brand-color-wa);
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 10px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .card-header-popup-wa p {
        color: var(--text-muted-wa);
        font-size: 14px;
        margin: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-group-popup-wa {
        margin-bottom: 22px;
        display: flex;
        flex-direction: column;
    }

    .form-group-popup-wa label {
        font-size: 13px;
        font-weight: 500;
        color: var(--brand-color-wa);
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .form-control-popup-wa {
        background-color: var(--input-bg-wa);
        border: 1px solid var(--brand-color-wa);
        color: var(--text-main-wa);
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 15px;
        padding: 14px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }

    .form-control-popup-wa:focus {
        outline: none;
        border-color: var(--brand-color-wa);
        box-shadow: 0 0 0 2px rgba(201, 167, 106, 0.4);
    }

    /* Intl-tel-input structural overrides within modal */
    .contact-popup-card-wa .iti {
        width: 100% !important;
        display: block !important;
    }
    
    .contact-popup-card-wa .iti__country-list {
        background-color: #222222 !important;
        border: 1px solid var(--brand-color-wa) !important;
        color: #fff !important;
        z-index: 1001;
    }
    
    .contact-popup-card-wa .iti__country:hover, 
    .contact-popup-card-wa .iti__country.iti__highlight {
        background-color: var(--brand-color-wa) !important;
        color: #000 !important;
    }

    textarea.form-control-popup-wa {
        resize: vertical;
        min-height: 90px;
    }

    .submit-btn-popup-wa {
        background-color: var(--brand-color-wa);
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

    .submit-btn-popup-wa:hover {
        background-color: var(--brand-hover-wa);
    }

    .submit-btn-popup-wa:active {
        transform: scale(0.99);
    }

    .submit-btn-popup-wa:disabled {
        background-color: var(--brand-hover-wa);
        cursor: not-allowed;
        opacity: 0.8;
    }

    /* Ultra Responsive Device Optimization rulesets */
    @media (max-width: 768px) {
        .contact-popup-card-wa {
            padding: 30px 25px;
        }
    }
    @media (max-width: 480px) {
        .contact-popup-overlay-wa {
            padding: 10px;
        }
        .contact-popup-card-wa {
            padding: 25px 20px;
            border-radius: 16px;
        }
        .contact-popup-close-wa {
            top: 12px;
            right: 12px;
            font-size: 18px;
            width: 32px;
            height: 32px;
        }
        .card-header-popup-wa {
            margin-bottom: 20px;
            padding-right: 25px;
            text-align: left;
        }
        .card-header-popup-wa h1 {
            font-size: 22px;
        }
        .form-control-popup-wa {
            padding: 12px 14px;
            font-size: 14px;
        }
    }
</style>

<div class="contact-popup-overlay-wa" id="contactPopupOverlayWhatsApp">
    <div class="contact-popup-card-wa">
        <button type="button" class="contact-popup-close-wa" id="closeContactPopupWhatsApp" aria-label="Close form">
            <i class="fa-solid fa-xmark"></i>
        </button>
        
        <div class="card-header-popup-wa">
            <h1><i class="fa-brands fa-whatsapp"></i>&nbsp; Fill Form & Chat Now</h1>
            <p>Please provide your requirements to initiate your direct sales chat line.</p>
        </div>

        <form id="verificationPopupFormWhatsApp">
            <div class="form-group-popup-wa">
                <label for="pop_fullname_wa">Full Name *</label>
                <input type="text" id="pop_fullname_wa" name="fullname" class="form-control-popup-wa" placeholder="John Doe" required>
            </div>

            <div class="form-group-popup-wa">
                <label for="pop_phone_wa">Phone Number *</label>
                <input type="tel" id="pop_phone_wa" name="phone" class="form-control-popup-wa" required>
                <input type="hidden" id="pop_full_phone_wa" name="full_phone">
            </div>

            <div class="form-group-popup-wa">
                <label for="pop_email_wa">Email Address *</label>
                <input type="email" id="pop_email_wa" name="email" class="form-control-popup-wa" placeholder="name@example.com" required>
            </div>

            <div class="form-group-popup-wa">
                <label for="pop_furniture_type_wa">Furniture Type *</label>
                <select id="pop_furniture_type_wa" name="furniture_type" class="form-control-popup-wa" required>
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

            <div class="form-group-popup-wa">
                <label for="pop_requirements_wa">Additional Requirements (Optional)</label>
                <textarea id="pop_requirements_wa" name="requirements" class="form-control-popup-wa" placeholder="Describe any specific configurations or measurements..."></textarea>
            </div>

            <button type="submit" id="pop_submitBtn_wa" class="submit-btn-popup-wa">
                <i class="fa-brands fa-whatsapp"></i> Submit & Chat Now
            </button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const overlayWA = document.getElementById("contactPopupOverlayWhatsApp");
        const closeBtnWA = document.getElementById("closeContactPopupWhatsApp");
        const phoneInputWA = document.querySelector("#pop_phone_wa");
        const fullPhoneHiddenWA = document.querySelector("#pop_full_phone_wa");
        const submitBtnWA = document.querySelector("#pop_submitBtn_wa");
        const formWA = document.querySelector("#verificationPopupFormWhatsApp");

        // 1. POPUP WINDOW MANAGEMENT ENGINE
        function openPopupWA(e) {
            e.preventDefault();
            overlayWA.classList.add("is-active");
            document.body.style.overflow = "hidden";
        }

        function closePopupWA() {
            overlayWA.classList.remove("is-active");
            document.body.style.overflow = "";
        }

        // Attach event listener dynamically to elements globally utilizing 'button-whatsapp' classes
        document.addEventListener("click", function(e) {
            if (e.target && e.target.closest(".button-whatsapp")) {
                openPopupWA(e);
            }
        });

        // Close listeners
        closeBtnWA.addEventListener("click", closePopupWA);
        overlayWA.addEventListener("click", function(e) {
            if (e.target === overlayWA) {
                closePopupWA();
            }
        });
        
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && overlayWA.classList.contains("is-active")) {
                closePopupWA();
            }
        });

        // 2. INTERNATIONAL PHONE ROUTINE CONFIGURATION
        const itiWA = window.intlTelInput(phoneInputWA, {
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
        formWA.addEventListener("submit", function(e) {
            e.preventDefault(); 
            
            submitBtnWA.disabled = true;
            const originalButtonContent = submitBtnWA.innerHTML;
            submitBtnWA.innerHTML = `<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...`;

            // Standardize phone layout string
            fullPhoneHiddenWA.value = itiWA.getNumber();

            const formData = new FormData(formWA);

            fetch('store/button-submit/send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                handleCallAndCloseWA(originalButtonContent);
            })
            .catch(error => {
                console.warn("Mail background dispatcher network warning:", error);
                handleCallAndCloseWA(originalButtonContent);
            });

            function handleCallAndCloseWA(originalContent) {
                const name = document.getElementById("pop_fullname_wa").value;
                const phone = fullPhoneHiddenWA.value;
                const email = document.getElementById("pop_email_wa").value;
                const furniture = document.getElementById("pop_furniture_type_wa").value;
                const reqs = document.getElementById("pop_requirements_wa").value || "None provided";

                const serviceLine = "Hello Sales Team, I would like to initiate a custom design consultation regarding my furniture requirements.";

                const messageText = `${serviceLine}\n\n` +
                                    `*--- New Inquiry Details ---*\n` +
                                    `*Name:* ${name}\n` +
                                    `*Phone:* ${phone}\n` +
                                    `*Email:* ${email}\n` +
                                    `*Furniture Type:* ${furniture}\n` +
                                    `*Requirements:* ${reqs}`;

                const encodedText = encodeURIComponent(messageText);

                // Execute WhatsApp routing link
                window.open(`https://api.whatsapp.com/send?phone=971559132200&text=${encodedText}`, '_blank');

                submitBtnWA.disabled = false;
                submitBtnWA.innerHTML = originalContent;

                closePopupWA();
                formWA.reset();
            }
        });
    });
</script>