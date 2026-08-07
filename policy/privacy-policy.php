<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Theyyampattil Furniture</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }
        body { background-color: #272727; color: #ffffff; line-height: 1.6; overflow-x: hidden; }
        
        /* Fixed Header */
        header {
            position: fixed; top: 0; width: 100%; height: 70px;
            background: rgba(39, 39, 39, 0.95); backdrop-filter: blur(10px);
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 5%; z-index: 1000; border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .home-btn {
            color: #ffffff; text-decoration: none; font-weight: 600; font-size: 14px;
            text-transform: uppercase; letter-spacing: 1px; padding: 8px 20px;
            border: 1px solid #b09577; border-radius: 4px; transition: 0.3s;
        }
        .home-btn:hover { background: #b09577; color: #272727; }

        /* Content Layout */
        .container { max-width: 900px; margin: 120px auto 60px; padding: 0 20px; }
        .policy-card {
            background: rgba(255, 255, 255, 0.03); padding: 40px;
            border-radius: 15px; border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        h1 { font-size: 2.5rem; color: #b09577; margin-bottom: 30px; text-align: center; }
        h2 { font-size: 1.4rem; color: #b09577; margin: 30px 0 15px; border-bottom: 1px solid rgba(176, 149, 119, 0.3); padding-bottom: 5px; }
        p { margin-bottom: 15px; color: rgba(255,255,255,0.8); font-size: 16px; }
        ul { margin-bottom: 20px; padding-left: 20px; list-style-type: square; color: #b09577; }
        li { margin-bottom: 10px; }
        li span { color: rgba(255,255,255,0.8); }

        /* Responsive */
        @media (max-width: 768px) {
            h1 { font-size: 1.8rem; }
            .policy-card { padding: 25px; }
            .container { margin-top: 100px; }
        }
    </style>
</head>
<body>



<!-- Header -->
<?php include '../includes/header.php'; ?>




    <div class="container">
        <div class="policy-card">
            <h1>Privacy Policy</h1>
            <p>Theyyampattil Furniture Trading LLC values the privacy and security of our customers. This Privacy Policy explains how we collect, use, and protect the information provided by visitors and customers through our website.</p>

            <h2>1. Information We Collect</h2>
            <p>When you contact us or use our services, we may collect the following information:</p>
            <ul>
                <li><span>Name</span></li>
                <li><span>Phone number</span></li>
                <li><span>Email address</span></li>
                <li><span>Delivery or project location</span></li>
                <li><span>Project or design requirements</span></li>
                <li><span>Payment details (processed through secure banking gateways)</span></li>
            </ul>

            <h2>2. How We Use Information</h2>
            <p>The information collected may be used for responding to inquiries, preparing quotations, processing orders, coordinating delivery, and improving our communication. We do not sell, rent, or share personal customer information with third parties for marketing purposes.</p>

            <h2>3. Payment Security</h2>
            <p>All payments are processed through secure and approved banking payment gateways. Theyyampattil Furniture Trading LLC does not store or have direct access to customers' credit or debit card information.</p>

            <h2>4. Information Protection</h2>
            <p>We take reasonable precautions to protect customer information from unauthorized access. Access to customer data is restricted to authorized personnel only.</p>

            <h2>5. Contact Information</h2>
            <p>If you have any questions regarding this Privacy Policy, please contact us at:</p>
            <p><strong>Email:</strong> accounts@theyyampattilgcc.com</p>
        </div>
    </div>


<!-- Footer -->
<?php include '../includes/footer.php'; ?>


<!-- Floating Buttons -->
<?php include '../includes/fixed-floating-buttons.php'; ?>





</body>
</html>