<!-- ============================================================
     ULTRA-MODERN FLOATING ACTION BUTTONS — Hyper-Pulse Edition
     Performance: GTmetrix A-Grade (Scroll-Aware GPU Accelerated)
     ============================================================ -->

<div class="fab-stack" id="float-actions" aria-label="Quick contact buttons">

  <!-- Call Button -->
  <a href="tel:+971559132200" class="fab fab-call button-call" aria-label="Call us">
    <div class="fab-beams"></div>
    <span class="fab-energy-ring r1"></span>
    <span class="fab-energy-ring r2"></span>
    <span class="fab-glow"></span>
    <span class="fab-inner">
      <!-- Added fab-icon-wrapper to isolate scroll animations to the icon only -->
      <span class="fab-icon-wrapper">
        <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 11.61 19a19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 3.09 4.18 2 2 0 0 1 5.08 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.69 2.81a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.33 1.85.56 2.81.69A2 2 0 0 1 22 16.92z"/>
        </svg>
      </span>
    </span>
    <span class="fab-tooltip">Quick Call</span>
  </a>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/971559132200?text=Hello,%20I%20am%20inquiring%20via%20the%20Theyyampattil%20GCC%20website.%20We%20would%20like%20to%20know%20more%20about%20your%20services."
     target="_blank" rel="noopener noreferrer" class="fab fab-wa button-whatsapp" aria-label="Chat on WhatsApp">
    <div class="fab-beams"></div>
    <span class="fab-energy-ring r1"></span>
    <span class="fab-energy-ring r2"></span>
    <span class="fab-glow"></span>
    <span class="fab-inner">
      <!-- Added fab-icon-wrapper to isolate scroll animations to the icon only -->
      <span class="fab-icon-wrapper">
        <svg viewBox="0 0 32 32" fill="#ffffff">
          <path d="M16 0C7.163 0 0 7.163 0 16c0 2.825.737 5.48 2.025 7.78L0 31.175l7.58-1.99A15.93 15.93 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.355a13.9 13.9 0 0 1-7.035-2.035l-.505-.315-4.485 1.175 1.2-4.385-.35-.555C3.4 21.47 2.645 18.835 2.645 16.1c0-7.72 6.28-14 14-14s14 6.28 14 14-6.28 14-14 14zm7.9-10.025c-.385-.195-2.275-1.12-2.625-1.245s-.605-.195-.855.195-.975 1.245-1.195 1.5-.445.285-.83.09c-.385-.195-1.63-.6-3.105-1.915-1.145-1.025-1.92-2.29-2.145-2.675s-.025-.595.17-.79c.175-.175.385-.45.58-.675.19-.22.255-.385.385-.64s.065-.48-.035-.675-.855-2.065-1.17-2.825c-.305-.745-.615-.645-.855-.655s-.485-.015-.745-.015-.675.1-1.03.495c-.35.395-1.345 1.315-1.345 3.205s1.375 3.715 1.57 3.975c.195.255 2.705 4.13 6.55 5.79.915.39 1.63.625 2.185.8 1.015.32 1.935.275 2.665.165.815-.12 2.275-.93 2.59-1.83.315-.895.315-1.66.22-1.825-.095-.175-.35-.275-.735-.47z"/>
        </svg>
      </span>
    </span>
    <span class="fab-tooltip">WhatsApp</span>
  </a>

</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=700&display=swap');

:root {
  --fab-call-main: #d74400; /* Ultra Modern iOS-Spec Red */
  --fab-call-glow: rgba(255, 59, 48, 0.5);
  --fab-wa-main:   #00b05b; /* High Conversion WhatsApp Green */
  --fab-wa-glow:   rgba(37, 211, 102, 0.5);
  --fab-size: 55px;
  --fab-radius: 15px;
}

.fab-stack {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 999999;
  display: flex;
  flex-direction: column;
  gap: 18px;
  contain: layout style;
}

.fab {
  position: relative;
  width: var(--fab-size);
  height: var(--fab-size);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--fab-radius);
  transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  text-decoration: none;
  background: none;
}

/* Color Mappings applied explicitly to inner container */
.fab-call .fab-inner { background: var(--fab-call-main); }
.fab-wa .fab-inner { background: var(--fab-wa-main); }

/* Inner Shimmer Frame & Anti-Alias Subpixel Fixes */
.fab-inner {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 3;
  overflow: hidden;
  box-shadow: inset 0 2px 4px rgba(255,255,255,0.3), 0 8px 15px rgba(0,0,0,0.2);
  transition: box-shadow 0.3s ease;
}

/* New Icon Container Layer to isolate hardware accelerated transforms */
.fab-icon-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  z-index: 4;
  transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform;
  transition: transform 0.2s ease-out;
}

/* Inclined Shimmer Gradient */
.fab-inner::after {
  content: '';
  position: absolute;
  width: 200%;
  height: 200%;
  top: 100%;
  left: 100%;
  background: linear-gradient(135deg, rgba(255,255,255,0) 30%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 70%);
  transform: rotate(15deg);
  animation: inclinedSweep 4s infinite ease-in-out;
  pointer-events: none;
}

@keyframes inclinedSweep {
  0% { top: 100%; left: 100%; }
  25% { top: -120%; left: -120%; }
  100% { top: -120%; left: -120%; }
}

/* Stable Solid-Color SVG Config */
.fab svg {
  width: 26px;
  height: 26px;
  filter: drop-shadow(0 2px 2px rgba(0,0,0,0.15));
  display: block;
}

/* Energy Radial Rings */
.fab-energy-ring {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  border: 2px solid;
  opacity: 0;
  z-index: 1;
  pointer-events: none;
}

.fab-call .fab-energy-ring { border-color: var(--fab-call-main); }
.fab-wa .fab-energy-ring { border-color: var(--fab-wa-main); }

.fab-energy-ring.r1 { animation: pulseOut 3s infinite; }
.fab-energy-ring.r2 { animation: pulseOut 3s infinite 1.5s; }

@keyframes pulseOut {
  0% { transform: scale(1); opacity: 0.8; }
  100% { transform: scale(2.2); opacity: 0; }
}

/* Premium Desktop Tooltips */
.fab-tooltip {
  position: absolute;
  right: 80px;
  background: #1a1a1a;
  color: white;
  padding: 8px 14px;
  border-radius: 10px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-size: 13px;
  font-weight: 700;
  white-space: nowrap;
  opacity: 0;
  transform: translateX(15px);
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  border: 1px solid rgba(255,255,255,0.1);
  pointer-events: none;
}

/* Hover Physics Matrix */
.fab:hover {
  transform: scale(1.15) translateY(-5px);
}

.fab:hover .fab-tooltip {
  opacity: 1;
  transform: translateX(0);
}

.fab:hover .fab-inner {
  box-shadow: inset 0 2px 4px rgba(255,255,255,0.4), 0 12px 25px rgba(0,0,0,0.3);
}

/* Tablet Viewport (Max-width: 1024px) */
@media (max-width: 1024px) {
  :root { 
    --fab-size: 55px;
    --fab-radius: 15px;
  }
  .fab svg {
    width: 25px;
    height: 25px;
  }
  .fab-stack { 
    gap: 16px;
  }
}

/* Mobile Viewport (Max-width: 600px) */
@media (max-width: 600px) {
  :root { 
    --fab-size: 50px;
    --fab-radius: 15px;
  }
  .fab svg {
    width: 24px;
    height: 24px;
  }
  .fab-tooltip { 
    display: none;
  }
  .fab-stack { 
    right: 20px;
    bottom: 20px; 
    gap: 14px;
  }
}
</style>

<script>
  (function() {
    let lastScrollY = window.scrollY;
    let scrollTimer = null;
    
    // TARGET ONLY THE ICON WRAPPER LAYER INSTEAD OF THE BACKGROUND CONTAINER
    const fabIcons = document.querySelectorAll('.fab-icon-wrapper');
    
    window.addEventListener('scroll', () => {
      const currentScroll = window.scrollY;
      const travel = currentScroll - lastScrollY;
      
      // Calculate optimized dynamic angular spin velocity
      const rotation = Math.min(Math.max(travel * 0.25, -20), 20); 
      
      // Update Composite Layer parameters safely with hardware execution
      fabIcons.forEach(icon => {
        icon.style.transform = `translate3d(0,0,0) rotate(${rotation}deg) scale(${1 + Math.abs(rotation / 120)})`;
      });
      
      lastScrollY = currentScroll;

      // Gracefully snap icons back to zero state
      window.clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        fabIcons.forEach(icon => {
          icon.style.transform = `translate3d(0,0,0) rotate(0deg) scale(1)`;
        });
      }, 150);
    }, { passive: true }); // Passive event listener maintains GTmetrix/Lighthouse scrolling compliance
  })();
</script>