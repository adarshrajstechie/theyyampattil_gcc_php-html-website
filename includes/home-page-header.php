<header id="site-header" style="position:fixed;top:0;left:0;width:100%;z-index:1000;background:transparent;will-change:background,box-shadow;contain:layout style">

  <style>
    /* ── RESET / BASE ── */
    #site-header *,#site-header *::before,#site-header *::after{box-sizing:border-box}
    #site-header a{text-decoration:none!important}

    /* ── SCROLL STATE ── */
    #site-header.scrolled{
      background:rgba(8,8,8,.97)!important;
      box-shadow:0 1px 0 rgba(201,167,106,.2),0 4px 30px rgba(0,0,0,.6);
      backdrop-filter:blur(20px);
      -webkit-backdrop-filter:blur(20px)
    }

    /* ── TOP BAR ── */
    .header-top-bar{
      background:transparent;
      border-bottom:1px solid rgba(255,255,255,.1);
      padding:10px 40px;
      display:flex;
      align-items:center;
      justify-content:center;
      gap:20px;
      transition:opacity .3s,height .3s;
    }
    #site-header.scrolled .header-top-bar{display:none}

    .header-social-link{
      color:#fff;
      font-size:1.1rem;
      transition:color .3s,transform .2s;
      display:inline-flex;
      align-items:center;
      line-height:1;
    }
    .header-social-link:hover{color:#c9a76a;transform:translateY(-2px)}
    .header-social-link svg{width:1em;height:1em;fill:currentColor;display:block}

    /* ── MAIN NAV ── */
    .nav-main{
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:0px 40px;
      transition:padding .3s;
      width:100%
    }
    #site-header.scrolled .nav-main{padding:12px 40px}

    /* ── LOGO ── */
    .nav-logo{flex-shrink:0;line-height:0}
    .nav-logo img{
      height:80px;
      width:auto;
      transition:height .3s;
      display:block;
      color:transparent /* hide alt text during load */
    }
    #site-header.scrolled .nav-logo img{height:50px}

    /* ── DESKTOP LINKS ── */
    .nav-links{display:flex;align-items:center;gap:2px;flex-wrap:nowrap}
    .nav-item{position:relative}
    .nav-item>a{
      display:block;
      padding:0px 12px;
      font-size:13px;
      font-weight:700;
      letter-spacing:.055em;
      text-transform:uppercase;
      color:#fff;
      text-shadow:0 1px 4px rgba(0,0,0,.85),0 0 12px rgba(0,0,0,.6);
      transition:color .2s;
      white-space:nowrap
    }
    .nav-item>a:hover,.nav-item>a.active{color:#c9a76a}

    .nav-item>a.has-dropdown::after{
      content:'';
      display:inline-block;
      margin-left:5px;
      width:0;height:0;
      border-left:4px solid transparent;
      border-right:4px solid transparent;
      border-top:5px solid currentColor;
      vertical-align:middle;
      transition:transform .2s
    }
    .nav-item:hover>a.has-dropdown::after{transform:rotate(180deg)}

    /* ── DROPDOWN ── */
    .dropdown{
      position:absolute;
      top:100%;left:50%;
      transform:translateX(-50%);
      min-width:200px;
      padding-top:10px;
      opacity:0;visibility:hidden;pointer-events:none;
      transition:opacity .25s,visibility .25s
    }
    .dropdown-inner{
      background:rgba(14,14,14,.98);
      border:1px solid rgba(255,255,255,.1);
      border-radius:4px;
      padding:8px 0;
      box-shadow:0 20px 50px rgba(0,0,0,.7)
    }
    .nav-item:hover .dropdown{opacity:1;visibility:visible;pointer-events:all}
    .dropdown a{
      display:block;
      padding:9px 20px;
      font-size:.8rem;
      font-weight:500;
      letter-spacing:.04em;
      color:#b5a99a;
      transition:color .2s,padding-left .2s;
      border-left:2px solid transparent
    }
    .dropdown a:hover{color:#c9a76a;padding-left:26px;border-left-color:#c9a76a}

    /* ── CTA ── */
    .nav-cta{
      background:#c9a76a!important;
      color:#fff!important;
      padding:9px 18px!important;
      border-radius:2px;
      font-weight:700!important;
      text-shadow:none!important;
      transition:background .2s!important;
      text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5) !important;
    }
    .nav-cta:hover{background:#e2c28a!important}

    /* ── HAMBURGER ── */
    .nav-toggle{
      display:none;
      flex-direction:column;
      gap:5px;
      cursor:pointer;
      padding:10px;
      background:none;
      border:none;
      position:relative;
      z-index:2000;
      -webkit-tap-highlight-color:transparent;
      text-shadow:0 1px 3px rgba(0,0,0,.8) /* cheaper than drop-shadow filter */
    }
    .nav-toggle span{
      display:block;
      width:26px;height:2px;
      background:#fff;
      border-radius:2px;
      transition:all .3s
    }
    .nav-toggle.active span{background:#c9a76a}
    .nav-toggle.active span:nth-child(1){transform:translateY(7px) rotate(45deg)}
    .nav-toggle.active span:nth-child(2){opacity:0}
    .nav-toggle.active span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}

    /* ── MOBILE NAV ── */
    .mobile-nav{
      display:none;
      position:fixed;
      top:0;left:0;
      width:100%;height:100vh;
      background:#080808;
      z-index:1500;
      padding:80px 32px 40px;
      overflow-y:auto;
      flex-direction:column;
      gap:0;
      -webkit-overflow-scrolling:touch
    }
    .mobile-nav.open{display:flex}
    .mobile-nav a{
      display:block;
      padding:14px 0;
      font-size:1rem;
      font-weight:600;
      color:#fff;
      border-bottom:1px solid rgba(255,255,255,.1);
      letter-spacing:.04em;
      transition:color .2s,padding-left .2s;
      -webkit-tap-highlight-color:transparent
    }
    .mobile-nav a:hover,.mobile-nav a:active{color:#c9a76a;padding-left:8px}
    .mobile-section-label{
      font-size:.7rem;
      font-weight:700;
      letter-spacing:.12em;
      color:#c9a76a;
      text-transform:uppercase;
      padding:20px 0 6px
    }

    /* ── RESPONSIVE ── */
    @media(max-width:1024px){
      .nav-links{display:none}
      .nav-toggle{display:flex}
      .header-top-bar{padding:10px 20px}
      .nav-logo img{height:60px}
      #site-header.scrolled .nav-logo img{height:36px}
      /* Disable expensive filters & transitions on mobile */
      #site-header.scrolled{backdrop-filter:none;-webkit-backdrop-filter:none}
    }

    /* ── SMOOTH SCROLL (respects a11y preference) ── */
    @media(prefers-reduced-motion:no-preference){
      html{scroll-behavior:smooth;scroll-padding-top:80px}
    }
    
    #site-header.scrolled {
  border-bottom: 1px solid var(--gold);
}
  </style>

  <!-- TOP BAR: social icons as inline SVG — zero external requests, zero render-blocking -->
  <div class="header-top-bar">
    <!-- TikTok -->
    <a href="https://www.tiktok.com/@theyyampatill_furniture" class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.27 8.27 0 0 0 4.84 1.55V6.79a4.85 4.85 0 0 1-1.07-.1z"/></svg>
    </a>
    <!-- Facebook -->
    <a href="https://www.facebook.com/people/theyyampattil_furniture_dubai/100063486432779/?mibextid=wwXIfr" class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.413c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
    </a>
    <!-- Instagram -->
    <a href="https://www.instagram.com/theyyampattil_furniture_dubai" class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
    </a>
    <!-- X / Twitter -->
    <a href="https://x.com/TheyyampattilF" class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L2.02 2.25H8.08l4.253 5.622 5.912-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
    </a>
    <!-- YouTube -->
    <a href="https://www.youtube.com/@TheyyampattilFurnitureuae/featured" class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
    </a>
    <!-- WhatsApp -->
    <a href="https://wa.me/971559132200?text=Hello,%20I%20am%20inquiring%20via%20the%20Theyyampattil%20GCC%20website.%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="header-social-link" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
    </a>
  </div>

  <nav class="nav-main" role="navigation" aria-label="Main Navigation">
    <a href="https://theyyampattilgcc.com/" class="nav-logo" aria-label="Theyyampattil Furniture Home">
      <img src="assets/images/home-page/logo/theyyampattil-header-logo.avif"
           alt="Theyyampattil Luxury Furniture"
           width="180" height="80"
           loading="eager"
           fetchpriority="high"
           decoding="async">
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
    <a href="blogs/" style="color:#c9a76a;font-weight:700;margin-top:12px">Blogs</a>
    <a href="contact/" style="color:#c9a76a;font-weight:700;margin-top:12px">Contact Us</a>
  </div>

  <script>
    /* Minimal, non-blocking inline script — no external deps */
    (function(){
      var h=document.getElementById('site-header');
      var t=document.getElementById('navToggle');
      var m=document.getElementById('mobileNav');
      var ticking=false;

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

      t.addEventListener('click',function(){
        var open=m.classList.toggle('open');
        t.classList.toggle('active',open);
        t.setAttribute('aria-expanded',open);
        document.body.style.overflow=open?'hidden':'';
      });

      m.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click',function(){
          m.classList.remove('open');
          t.classList.remove('active');
          t.setAttribute('aria-expanded','false');
          document.body.style.overflow='';
        });
      });

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








