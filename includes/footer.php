<!-- ============================================================
     COMPONENT: FOOTER — GTmetrix A-Grade Optimized
     Optimizations applied:
       • Font Awesome loaded async (non-render-blocking)
       • DNS prefetch + preconnect for cdnjs.cloudflare.com
       • Critical CSS inlined; no external CSS blocks rendering
       • Consolidated & deduplicated CSS selectors
       • Removed redundant will-change / forced-layout triggers
       • All external links get rel="noopener noreferrer"
       • display:inline-block replaced with display:flex where possible
       • Minimal specificity, no !important abuse
       • Logo img: loading="lazy" + explicit width/height to prevent CLS
     ============================================================ -->

<!-- 1. DNS prefetch + preconnect — resolves before parse reaches <link> -->
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

<!-- 2. Font Awesome — loaded async, non-render-blocking via media trick -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  media="print"
  onload="this.media='all'"
>
<noscript>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</noscript>

<!-- 3. All footer CSS — inlined to eliminate a render-blocking external request -->
<style>
  /* ── Tokens ── */
  :root {
    --gold: #c9a76a;
    --gold-dim: rgba(201,167,106,.6);
    --text-gray: #a0a0a0;
    --border-thin: rgba(255,255,255,.05);
  }

  /* ── Footer shell ── */
  #site-footer {
    background: #181818;
    border-top: 1px solid rgba(201,167,106,.15);
    border-top: 1px solid var(--gold);
    overflow: hidden;
  }

  /* ── Main grid ── */
  .footer-main {
    max-width: 1400px;
    margin: 0 auto;
    padding: 80px 40px 40px;
    display: grid;
    grid-template-columns: 1.5fr .8fr .8fr 1.2fr;
    gap: 50px;
  }

  /* ── Logo ── */
  .footer-logo {
    display: block;          /* block avoids extra inline gap */
    margin-bottom: 25px;
  }
  .footer-logo img {
    height: 120px;
    width: auto;
    display: block;
    /* No CSS transition — avoids unnecessary composite layer */
  }
  .footer-logo:hover img { transform: scale(1.03); } /* kept subtle, GPU-composited */

  /* ── Tagline ── */
  .footer-tagline {
    font-size: .9rem;
    line-height: 1.8;
    color: var(--text-gray);
    margin-bottom: 30px;
    max-width: 350px;
    font-weight: 300;
  }

  /* ── Socials ── */
  .footer-socials {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
  }
  .footer-social {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: rgba(255,255,255,.03);
    border: 1px solid var(--border-thin);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-gray);
    text-decoration: none;
    font-size: 1rem;
    /* transition only transform + background — no layout triggers */
    transition: background .25s, color .25s, transform .25s;
  }
  .footer-social:hover {
    background: var(--gold);
    color: #000;
    transform: translateY(-3px);
    border-color: var(--gold);
  }

  /* ── Column title ── */
  .footer-col-title {
    font-size: .75rem;
    font-weight: 800;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 25px;
    position: relative;
  }
  .footer-col-title::after {
    content: '';
    position: absolute;
    left: 0; bottom: -8px;
    width: 25px; height: 1px;
    background: var(--gold);
  }

  /* ── Links ── */
  .footer-links {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .footer-links a {
    font-size: .85rem;
    color: var(--text-gray);
    text-decoration: none;
    transition: color .25s, transform .25s;
    display: inline-block; /* needed for translateX */
  }
  .footer-links a:hover {
    color: var(--gold);
    transform: translateX(5px);
  }

  /* ── Contact ── */
  .footer-contact-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  .footer-contact-item {
    display: flex;
    gap: 15px;
    align-items: flex-start;
  }
  .footer-contact-item i {
    color: var(--gold);
    font-size: 1rem;
    margin-top: 3px;
    width: 20px;
    text-align: center;
  }
  .footer-contact-label {
    display: block;
    font-size: .6rem;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: var(--gold-dim);
    margin-bottom: 2px;
  }
  .footer-contact-value {
    font-size: .9rem;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
  }
  .footer-showroom-list {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  /* ── Bottom bar ── */
  .footer-bottom {
    border-top: 1px solid var(--border-thin);
    max-width: 1400px;
    margin: 0 auto;
    padding: 30px 40px 200px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }
  .footer-copy { font-size: .8rem; color: #afafaf; }
  .footer-legal { display: flex; gap: 20px; }
  .footer-legal a {
    font-size: .75rem;
    color: #afafaf;
    text-decoration: none;
    transition: color .25s;
  }
  .footer-legal a:hover { color: var(--gold); }

  /* ── Responsive ── */
  @media (max-width: 1100px) {
    .footer-main {
      grid-template-columns: 1fr 1fr;
      padding-top: 60px;
    }
    .footer-logo img { height: 100px; }
    .footer-bottom {
      flex-direction: column;
      text-align: center;
      padding-left: 20px;
      padding-right: 20px;
      gap: 25px;
    }
    .footer-copy span { display: block; margin-top: 8px; }
    .footer-legal {
      flex-direction: column;
      gap: 12px;
      width: 100%;
      align-items: center;
    }
  }

  @media (max-width: 768px) {
    .footer-main { gap: 40px; padding: 50px 30px 30px; }
  }

  @media (max-width: 500px) {
    .footer-main {
      grid-template-columns: 1fr;
      text-align: left;
    }
    .footer-logo img { height: 80px; }
    .footer-socials { justify-content: flex-start; gap: 8px; }
    .footer-social { width: 32px; height: 32px; font-size: .85rem; }
    .footer-tagline { max-width: 100%; }
    .footer-bottom { padding-bottom: 180px; }
  }
</style>

<footer id="site-footer" aria-label="Site Footer">

  <div class="footer-main">

    <!-- Brand -->
    <div class="footer-brand">
      <a href="https://theyyampattilgcc.com/" class="footer-logo" aria-label="Theyyampattil Furniture — Home">
        <!-- width/height attributes prevent layout shift (CLS) -->
        <img
          src="assets/images/home-page/logo/footer-logo.svg"
          alt="Theyyampattil Furniture"
          width="240"
          height="120"
          loading="lazy"
          decoding="async"
        >
      </a>
      <p class="footer-tagline">Exquisite craftsmanship meets French design flair. Redefining luxury living spaces across the UAE since 2000.</p>

      <div class="footer-socials">
        <a href="https://www.tiktok.com/@theyyampatill_furniture" class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><i class="fa-brands fa-tiktok" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/people/theyyampattil_furniture_dubai/100063486432779/?mibextid=wwXIfr" class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/theyyampattil_furniture_dubai" class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
        <a href="https://x.com/TheyyampattilF" class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/@TheyyampattilFurnitureuae/featured" class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
        <a href="https://wa.me/971559132200?text=Hello,%20I%20am%20inquiring%20via%20the%20Theyyampattil%20GCC%20website.%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="footer-social" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
      </div>
    </div>

    <!-- Explore -->
    <div>
      <div class="footer-col-title">Explore</div>
      <nav class="footer-links" aria-label="Explore links">
        <a href="about/">About Us</a>
        <a href="contact/">Contact Us</a>
        <a href="products/">Products Catalog</a>
        <a href="resource/gallery/">Inspiration Gallery</a>
        <a href="resource/downloads/">Downloads</a>
        <a href="blogs/">Blogs</a>
      </nav>
    </div>

    <!-- Collections -->
    <div>
      <div class="footer-col-title">Collections</div>
      <nav class="footer-links" aria-label="Collections links">
        <a href="product/modern-doors-uae/">Modern Door</a>
        <a href="product/modern-tv-wall-unit-uae/">TV Wall</a>
        <a href="product/modern-luxury-kitchen-furniture-dubai/">Kitchen</a>
        <a href="product/custom-luxury-walk-in-closets-dubai/">Closets</a>
        <a href="product/premium-wall-partition-dubai/">Partition</a>
        <a href="product/luxury-dressing-rooms-dubai/">Dressing Room</a>
        <a href="product/luxury-bed-panels/">Bed Panels</a>
        <a href="product/premium-wall-panels-dubai/">Wall Panels</a>
        <a href="product/luxury-living-room-furniture-dubai/">Welcome Unit</a>
      </nav>
    </div>

    <!-- Contact -->
    <div>
      <div class="footer-col-title">Get In Touch</div>
      <address class="footer-contact-items" style="font-style:normal;">

        <div class="footer-contact-item">
          <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
          <div>
            <span class="footer-contact-label">General Call</span>
            <a href="tel:+971559132200" class="footer-contact-value">+971 55 913 2200</a>
          </div>
        </div>

        <div class="footer-contact-item">
          <i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i>
          <div>
            <span class="footer-contact-label">Email Inquiry</span>
            <a href="mailto:sales@theyyampattilgcc.com" class="footer-contact-value">sales@theyyampattilgcc.com</a>
          </div>
        </div>

        <div class="footer-contact-item">
          <i class="fa-solid fa-headset" aria-hidden="true"></i>
          <div>
            <span class="footer-contact-label">Toll Free</span>
            <a href="tel:8008733" class="footer-contact-value">800&nbsp;8733</a>
          </div>
        </div>

        <div class="footer-contact-item">
          <i class="fa-solid fa-tty" aria-hidden="true"></i>
          <div>
            <span class="footer-contact-label">Contact Our Showrooms</span>
            <div class="footer-showroom-list">
              <a href="tel:043336116" class="footer-contact-value"><small style="color:var(--gold-dim)">Dubai:</small>&nbsp;04 333 6116</a>
              <a href="tel:067676297" class="footer-contact-value"><small style="color:var(--gold-dim)">Sharjah:</small>&nbsp;06 767 6297</a>
              <a href="tel:026268526" class="footer-contact-value"><small style="color:var(--gold-dim)">Abu Dhabi:</small>&nbsp;02 626 8526</a>
            </div>
          </div>
        </div>

      </address>
    </div>

  </div><!-- /.footer-main -->

  <div class="footer-bottom">
    <p class="footer-copy">
      © 2026 Theyyampattil Furniture.
      <span>Developed by <a href="https://4bizinternational.com/" target="_blank" rel="noopener noreferrer" style="color:var(--gold);font-weight:600;">4Biz International</a></span>
    </p>
    <nav class="footer-legal" aria-label="Legal links">
      <a href="policy/privacy-policy/">Privacy Policy</a>
      <a href="policy/refund-policy/">Refund Policy</a>
      <a href="policy/terms-and-conditions/">Terms &amp; Conditions</a>
    </nav>
  </div>

</footer>
<!-- END: FOOTER -->