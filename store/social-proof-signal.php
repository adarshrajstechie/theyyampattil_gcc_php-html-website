
<div id="social-proof-popup" style="visibility: hidden; opacity: 0;">
  <div class="sp-content">
    <div class="sp-image">🛋️</div>
    <div class="sp-text">
      <p id="sp-buyer-name">Someone</p>
      <p id="sp-product">just inquired about a New Item</p>
      <span id="sp-time">2 minutes ago</span>
    </div>
    <button onclick="closeSPPopup()" class="sp-close">&times;</button>
  </div>
</div>

<style>
  #social-proof-popup {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background: rgba(255, 255, 255, 0.98);
    border-radius: 12px;
    padding: 12px 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    display: flex;
    align-items: center;
    z-index: 999999;
    font-family: 'Plus Jakarta Sans', sans-serif;
    border: 1px solid rgba(0,0,0,0.05);
    min-width: 280px;
    max-width: 350px;
    backdrop-filter: blur(5px);
  }

  .sp-content { display: flex; align-items: center; width: 100%; position: relative; }
  .sp-image { font-size: 24px; margin-right: 12px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)); }
  .sp-text p { margin: 0; font-size: 13px; color: #1a1a1a; line-height: 1.4; }
  #sp-buyer-name { font-weight: 700; color: #c5a367; }
  #sp-time { font-size: 10px; color: #999; text-transform: uppercase; margin-top: 2px; display: block; letter-spacing: 0.5px; }
  
  .sp-close {
    position: absolute;
    right: -8px;
    top: -8px;
    background: #eee;
    border: none;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 14px;
    cursor: pointer;
    color: #666;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Mobile Optimization */
  @media (max-width: 480px) {
    #social-proof-popup {
      left: 10px;
      right: 10px;
      bottom: 80px; /* Elevated to avoid blocking mobile UI buttons */
      min-width: 0;
      max-width: none;
      padding: 10px;
    }
    .sp-text p { font-size: 12px; }
  }


</style>

<script>
  (function() {
    // Data Array
    var purchaseData = [
      { name: "Siddharth from JVC", product: "a Custom Luxury Kitchen", time: "5 mins ago" },
      { name: "Someone from Dubai Marina", product: "a Bespoke Dressing Room", time: "14 mins ago" },
      { name: "Mark from Palm Jumeirah", product: "Modern TV Wall Paneling", time: "1 hour ago" },
      { name: "Someone from Downtown Dubai", product: "a Premium Walk-in Closet", time: "32 mins ago" },
      { name: "Elena from Arabian Ranches", product: "Custom Architectural Doors", time: "45 mins ago" },
      { name: "Sarah from Mirdif", product: "Modern Wall Cladding", time: "2 hours ago" },
      { name: "Vikram from Business Bay", product: "a Custom Decorative Partition", time: "10 mins ago" },
      { name: "Someone from JLT", product: "Luxury Bed Panels", time: "18 mins ago" },
      { name: "Fatima from Al Barsha", product: "a Custom Welcome Unit", time: "55 mins ago" },
      { name: "Hans from The Greens", product: "Bespoke Kitchen Cabinets", time: "3 hours ago" },
      { name: "Someone from Discovery Gardens", product: "Modern TV Wall Design", time: "22 mins ago" },
      { name: "James from Emirates Hills", product: "Architectural Wall Paneling", time: "40 mins ago" },
      { name: "Isabella from Blue Waters", product: "a Minimalist Walk-in Wardrobe", time: "7 mins ago" },
      { name: "Rahul from Silicon Oasis", product: "Custom Bedroom Solutions", time: "12 mins ago" },
      { name: "Someone from City Walk", product: "Luxury Dressing Table Setup", time: "28 mins ago" },
      { name: "Ahmed from Meydan", product: "Modern Wooden Partitions", time: "50 mins ago" },
      { name: "Linda from Motor City", product: "Premium Wall Cladding", time: "1 hour ago" },
      { name: "Sanjay from Al Furjan", product: "a Custom Kitchen Island", time: "4 mins ago" },
      { name: "Someone from Damac Hills", product: "Bespoke TV Wall Units", time: "16 mins ago" },
      { name: "Michael from Sports City", product: "Architectural Doors", time: "35 mins ago" },
      { name: "Someone from Mudon", product: "Luxury Walk-in Closet", time: "21 mins ago" },
      { name: "Robert from JBR", product: "Modern Decorative Wall Panels", time: "9 mins ago" },
      { name: "Ananya from Town Square", product: "Custom Bed Headboard Panels", time: "48 mins ago" },
      { name: "Kevin from Dubai Hills", product: "a Full Kitchen Renovation", time: "1 hour ago" },
      { name: "Someone from Remraam", product: "Custom Welcome Units", time: "15 mins ago" },
      { name: "Arjun from International City", product: "Modern TV Unit Design", time: "59 mins ago" },
      { name: "Olivia from Expo City", product: "Bespoke Dressing Room", time: "6 mins ago" },
      { name: "Someone from Al Quoz", product: "Architectural Woodwork", time: "33 mins ago" },
      { name: "Natasha from Victory Heights", product: "Premium Wall Paneling", time: "2 hours ago" },
      { name: "Rohan from Nad Al Sheba", product: "a Custom Kitchen Setup", time: "11 mins ago" },
      { name: "Lily from Al Sufouh", product: "Luxury Bed Panels", time: "26 mins ago" },
      { name: "Mustafa from Deira", product: "Modern Doors & Frames", time: "42 mins ago" },
      { name: "Someone from Arabian Ranches 3", product: "Walk-in Closet Design", time: "5 mins ago" },
      { name: "Yusuf from Al Jaddaf", product: "Custom TV Wall Solutions", time: "19 mins ago" },
      { name: "Amelia from Sustainable City", product: "Eco-Friendly Kitchen Woodwork", time: "52 mins ago" },
      { name: "Someone from Dubai South", product: "Modern Wall Cladding", time: "37 mins ago" },
      { name: "Clara from Meydan South", product: "Bespoke Partition Walls", time: "13 mins ago" },
      { name: "Samer from Dubai Creek Harbour", product: "Premium Architectural Doors", time: "24 mins ago" },
      { name: "Someone from Al Rashidiya", product: "Luxury Dressing Area", time: "46 mins ago" },
      { name: "Thomas from Jumeirah Golf Estates", product: "Custom Kitchen Cabinets", time: "8 mins ago" },
      { name: "Kavita from Mira", product: "Modern TV Unit Paneling", time: "31 mins ago" },
      { name: "Someone from Tilal Al Ghaf", product: "Luxury Walk-in Wardrobe", time: "57 mins ago" },
      { name: "Nour from Culture Village", product: "Bespoke Bed Wall Panels", time: "1 hour ago" },
      { name: "Ryan from Dubai Production City", product: "Custom Wall Decorations", time: "23 mins ago" },
      { name: "Someone from Pearl Jumeirah", product: "Premium Architectural Woodwork", time: "17 mins ago" },
      { name: "Sameer from Al Khail Heights", product: "Modern Kitchen Solutions", time: "44 mins ago" },
      { name: "Jessica from Villanova", product: "Custom Dressing Room", time: "29 mins ago" },
      { name: "Someone from Meydan Gated Community", product: "Modern TV Wall Setup", time: "10 mins ago" },
      { name: "Preeti from Living Legends", product: "Architectural Door Design", time: "38 mins ago" },
      { name: "William from Serenia Residences", product: "Full Luxury Kitchen Design", time: "51 mins ago" }
    ];

    var popup = document.getElementById('social-proof-popup');

    function showPopup() {
      var rand = purchaseData[Math.floor(Math.random() * purchaseData.length)];
      var actions = ["just inquired about ", "requested quote for "];
      
      document.getElementById('sp-buyer-name').innerText = rand.name;
      document.getElementById('sp-product').innerText = actions[Math.floor(Math.random() * actions.length)] + rand.product;
      document.getElementById('sp-time').innerText = rand.time;

      // GSAP Optimized Entrance
      gsap.set(popup, { visibility: "visible", y: 50, opacity: 0, scale: 0.9 });
      gsap.to(popup, {
        duration: 0.8,
        y: 0,
        opacity: 1,
        scale: 1,
        ease: "back.out(1.7)"
      });

      // Auto-hide after 6 seconds
      gsap.to(popup, {
        delay: 6,
        duration: 0.5,
        y: 20,
        opacity: 0,
        ease: "power2.in",
        onComplete: () => { gsap.set(popup, { visibility: "hidden" }); }
      });
    }

    setTimeout(() => {
      showPopup();
      setInterval(showPopup, 15000); // Repeat every 15 seconds
    }, 3000);
  })();

  function closeSPPopup() {
    gsap.to("#social-proof-popup", { duration: 0.3, opacity: 0, scale: 0.9, y: 20 });
  }
</script>
