<!-- GTmetrix A-Grade Optimized Navbar — All features preserved -->

<!-- Preconnect for Font Awesome CDN (eliminates DNS lookup delay) -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

<!-- Font Awesome: non-render-blocking load -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>

<header id="site-header" style="position:fixed;top:0;left:0;width:100%;z-index:1000;background:rgba(8,8,8,.97);box-shadow:0 1px 0 rgba(201,167,106,.2),0 4px 30px rgba(0,0,0,.6);backdrop-filter:blur(20px)">

<style>
/* ── CRITICAL STYLES ── */
:root {
  --gold: #c9a76a;
  --gold-light: #e2c28a;
  --cream: #fff;
  --cream-muted: #b5a99a;
  --border: rgba(255,255,255,.1);
}

html {
  scroll-behavior: smooth;
  scroll-padding-top: 80px;
  -webkit-overflow-scrolling: touch;
}
@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
}

/* ── SITE HEADER ── */
#site-header {
  transition: box-shadow .4s ease;
  contain: layout;
  border-bottom: 1px solid var(--gold);
}
#site-header.scrolled {
  background: rgba(21,21,21,.95) !important;
  border-bottom: 1px solid var(--gold);
}

/* ── TOP BAR ── */
.header-top-bar { display: none !important; }

/* ── MAIN NAV ── */
.nav-main {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 40px;
  box-sizing: border-box;
  width: 100%;
}

/* ── LOGO ── */
.nav-logo { flex-shrink: 0; line-height: 0; }
.nav-logo img {
  height: 50px;
  width: auto;
  transition: height .3s;
  display: block;
}

/* ── DESKTOP NAV LINKS ── */
.nav-links {
  display: flex;
  align-items: center;
  gap: 2px;
  flex-wrap: nowrap;
}
.nav-item { position: relative; }
.nav-item > a {
  display: block;
  padding: 12px;
  font-size: .79rem;
  font-weight: 700;
  letter-spacing: .055em;
  text-transform: uppercase;
  color: var(--cream);
  text-decoration: none;
  text-shadow: 0 1px 4px rgba(0,0,0,.85), 0 0 12px rgba(0,0,0,.6);
  transition: color .2s;
  white-space: nowrap;
}
.nav-item > a:hover,
.nav-item > a.active { color: var(--gold); }

/* Dropdown arrow */
.nav-item > a.has-dropdown::after {
  content: '';
  display: inline-block;
  margin-left: 5px;
  width: 0; height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 5px solid currentColor;
  vertical-align: middle;
  transition: transform .2s;
}
.nav-item:hover > a.has-dropdown::after { transform: rotate(180deg); }

/* ── DROPDOWN ── */
.dropdown {
  position: absolute;
  top: 100%; left: 50%;
  transform: translateX(-50%);
  min-width: 200px;
  background: transparent;
  padding-top: 10px;
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: opacity .25s, visibility .25s;
}
.dropdown-inner {
  background: rgba(14,14,14,.98);
  border: 1px solid var(--border);
  border-radius: 4px;
  padding: 8px 0;
  box-shadow: 0 20px 50px rgba(0,0,0,.7);
}
.nav-item:hover .dropdown {
  opacity: 1;
  visibility: visible;
  pointer-events: all;
}
.dropdown a {
  display: block;
  padding: 9px 20px;
  font-size: .8rem;
  font-weight: 500;
  letter-spacing: .04em;
  color: var(--cream-muted);
  text-decoration: none;
  text-shadow: none;
  transition: color .2s, padding-left .2s;
  border-left: 2px solid transparent;
}
.dropdown a:hover {
  color: var(--gold);
  padding-left: 26px;
  border-left-color: var(--gold);
}

/* ── CTA BUTTON ── */
.nav-cta {
  background: var(--gold) !important;
  color: var(--cream) !important;
  padding: 9px 18px !important;
  border-radius: 2px;
  font-weight: 700 !important;
  text-shadow: none !important;
  transition: background .2s !important;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5) !important;
}
.nav-cta:hover {
  background: var(--gold-light) !important;
  color: var(--cream) !important;
}

/* ── HAMBURGER ── */
.nav-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
  padding: 10px;
  background: none;
  border: none;
  position: relative;
  z-index: 2000;
  transition: all .3s;
  -webkit-tap-highlight-color: transparent;
  filter: drop-shadow(0 1px 3px rgba(0,0,0,.8));
}
.nav-toggle span {
  display: block;
  width: 26px; height: 2px;
  background: var(--cream);
  transition: all .3s;
  border-radius: 2px;
  border: .5px solid rgba(0,0,0,.2);
}
.nav-toggle.active span { background: var(--gold); border-color: transparent; }
.nav-toggle.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-toggle.active span:nth-child(2) { opacity: 0; }
.nav-toggle.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ── MOBILE NAV ── */
.mobile-nav {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100vh;
  background: #080808;
  z-index: 1500;
  padding: 80px 32px 40px;
  overflow-y: auto;
  flex-direction: column;
  gap: 0;
  -webkit-overflow-scrolling: touch;
}
.mobile-nav.open { display: flex; }
.mobile-nav a {
  display: block;
  padding: 14px 0;
  font-size: 1rem;
  font-weight: 600;
  color: var(--cream);
  border-bottom: 1px solid var(--border);
  letter-spacing: .04em;
  text-decoration: none;
  transition: color .2s, padding-left .2s;
  -webkit-tap-highlight-color: transparent;
}
.mobile-nav a:hover,
.mobile-nav a:active { color: var(--gold); padding-left: 8px; }
.mobile-section-label {
  font-size: .7rem;
  font-weight: 700;
  letter-spacing: .12em;
  color: var(--gold);
  text-transform: uppercase;
  padding: 20px 0 6px;
}

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .nav-links { display: none; }
  .nav-toggle { display: flex; }
  .header-top-bar { padding: 10px 20px; }
  #site-header .nav-logo img { height: 36px; }
}
@media (max-width: 768px) {
  * {
    backdrop-filter: none !important;
    -webkit-backdrop-filter: none !important;
  }
}

/* Remove underlines from all header links */
header a { text-decoration: none !important; }

/* ── HEADER SPACER ── */
.header-spacer { height: 68px; }
@media (max-width: 1024px) { .header-spacer { height: 56px; } }
</style>

  <!-- Top bar (hidden via CSS, preserved for structure) -->
  <div class="header-top-bar">
    <a href="https://www.tiktok.com/@theyyampatill_furniture" class="header-social-link" target="_blank" rel="noopener" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
    <a href="https://www.facebook.com/people/theyyampattil_furniture_dubai/100063486432779/?mibextid=wwXIfr" class="header-social-link" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/theyyampattil_furniture_dubai" class="header-social-link" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://x.com/TheyyampattilF" class="header-social-link" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="https://www.youtube.com/@TheyyampattilFurnitureuae/featured" class="header-social-link" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://wa.me/+971559132200?text=Hello,%20I%20am%20interested%20in%20your%20furniture%20services." class="header-social-link" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
  </div>

  <nav class="nav-main" role="navigation" aria-label="Main Navigation">
    <a href="https://theyyampattilgcc.com/" class="nav-logo" aria-label="Theyyampattil Furniture Home">
      <img src="assets/images/home-page/logo/theyyampattil-header-logo.avif"
           alt="Theyyampattil Luxury Furniture"
           width="180" height="44"
           loading="eager" fetchpriority="high" decoding="async">
    </a>

    <div class="nav-links" role="menubar">
      <div class="nav-item" role="none"><a href="https://theyyampattilgcc.com/" class="active" role="menuitem">Home</a></div>
      <div class="nav-item" role="none"><a href="about/" role="menuitem">About</a></div>

      <div class="nav-item" role="none">
        <a href="#" class="has-dropdown" role="menuitem" aria-haspopup="true" aria-expanded="false">Products</a>
        <div class="dropdown" role="menu" aria-label="Products submenu">
          <div class="dropdown-inner">
            <a href="products/" role="menuitem">All Products</a>
            <a href="product/modern-doors-uae/" role="menuitem">Modern Door</a>
            <a href="product/modern-tv-wall-unit-uae/" role="menuitem">TV Wall</a>
            <a href="product/modern-luxury-kitchen-furniture-dubai/" role="menuitem">Kitchen</a>
            <a href="product/custom-luxury-walk-in-closets-dubai/" role="menuitem">Closets</a>
            <a href="product/premium-wall-partition-dubai/" role="menuitem">Wall Partition</a>
            <a href="product/luxury-dressing-rooms-dubai/" role="menuitem">Dressing Room</a>
            <a href="product/luxury-bed-panels/" role="menuitem">Bed Panels</a>
            <a href="product/premium-wall-panels-dubai/" role="menuitem">Wall Panels</a>
            <a href="product/luxury-living-room-furniture-dubai/" role="menuitem">Welcome Unit</a>
          </div>
        </div>
      </div>

      <div class="nav-item" role="none">
        <a href="#" class="has-dropdown" role="menuitem" aria-haspopup="true" aria-expanded="false">Resources</a>
        <div class="dropdown" role="menu" aria-label="Resources submenu">
          <div class="dropdown-inner">
            <a href="resource/gallery/" role="menuitem">Gallery</a>
            <a href="resource/videos/" role="menuitem">Videos</a>
            <a href="resource/downloads/" role="menuitem">Downloads</a>
          </div>
        </div>
      </div>

      <div class="nav-item" role="none">
        <a href="#" class="has-dropdown" role="menuitem" aria-haspopup="true" aria-expanded="false">Our Showrooms</a>
        <div class="dropdown" role="menu" aria-label="Showrooms submenu">
          <div class="dropdown-inner">
            <a href="showroom/luxury-furniture-dubai/" role="menuitem">Dubai</a>
            <a href="showroom/custom-luxury-furniture-sharjah/" role="menuitem">Sharjah</a>
            <a href="showroom/luxury-furniture-abu-dhabi/" role="menuitem">Abu Dhabi</a>
          </div>
        </div>
      </div>

      <div class="nav-item" role="none"><a href="blogs/" role="menuitem">Blogs</a></div>
      <div class="nav-item" role="none"><a href="contact/" class="nav-cta" role="menuitem">Contact</a></div>
    </div>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobileNav">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </button>
  </nav>

  <div class="mobile-nav" id="mobileNav" role="navigation" aria-label="Mobile Navigation">
    <div class="mobile-section-label" aria-hidden="true">Menu</div>
    <a href="https://theyyampattilgcc.com/">Home</a>
    <a href="about/">About</a>
    <div class="mobile-section-label" aria-hidden="true">Products</div>
    <div class="mobile-sub">
      <a href="products/">All Products</a>
      <a href="product/modern-doors-uae/">Modern Door</a>
      <a href="product/modern-tv-wall-unit-uae/">TV Wall</a>
      <a href="product/modern-luxury-kitchen-furniture-dubai/">Kitchen</a>
      <a href="product/custom-luxury-walk-in-closets-dubai/">Closets</a>
      <a href="product/premium-wall-partition-dubai/">Wall Partition</a>
      <a href="product/luxury-dressing-rooms-dubai/">Dressing Room</a>
      <a href="product/luxury-bed-panels/">Bed Panels</a>
      <a href="product/premium-wall-panels-dubai/">Wall Panels</a>
      <a href="product/luxury-living-room-furniture-dubai/">Welcome Unit</a>
    </div>
    <div class="mobile-section-label" aria-hidden="true">Resources</div>
    <div class="mobile-sub">
      <a href="resource/gallery/">Gallery</a>
      <a href="resource/videos/">Videos</a>
      <a href="resource/downloads/">Downloads</a>
    </div>
    <div class="mobile-section-label" aria-hidden="true">Showrooms</div>
    <div class="mobile-sub">
      <a href="showroom/luxury-furniture-dubai/">Dubai</a>
      <a href="showroom/custom-luxury-furniture-sharjah/">Sharjah</a>
      <a href="showroom/luxury-furniture-abu-dhabi/">Abu Dhabi</a>
    </div>
    <a href="blogs/">Blogs</a>
    <a href="contact/" style="color:var(--gold);font-weight:700;margin-top:12px">Contact Us</a>
  </div>

  <!-- Deferred, minimal JS — no layout/paint blocking -->
  <script>
    (function(){
      var h=document.getElementById('site-header'),
          t=document.getElementById('navToggle'),
          m=document.getElementById('mobileNav'),
          ticking=false;

      /* Scroll: throttled via rAF */
      function onScroll(){
        if(!ticking){
          requestAnimationFrame(function(){
            h.classList.toggle('scrolled',window.scrollY>60);
            ticking=false;
          });
          ticking=true;
        }
      }
      window.addEventListener('scroll',onScroll,{passive:true});

      /* Hamburger toggle */
      t.addEventListener('click',function(){
        var open=m.classList.toggle('open');
        t.classList.toggle('active',open);
        t.setAttribute('aria-expanded',open);
        document.body.style.overflow=open?'hidden':'';
      });

      /* Close mobile nav on link click */
      m.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click',function(){
          m.classList.remove('open');
          t.classList.remove('active');
          t.setAttribute('aria-expanded','false');
          document.body.style.overflow='';
        });
      });

      /* Close on resize to desktop */
      window.addEventListener('resize',function(){
        if(window.innerWidth>1024&&m.classList.contains('open')){
          m.classList.remove('open');
          t.classList.remove('active');
          t.setAttribute('aria-expanded','false');
          document.body.style.overflow='';
        }
      },{passive:true});
    })();
  </script>
</header>

<!-- Header spacer: compensates for fixed header height -->
<div class="header-spacer" aria-hidden="true"></div>






