
<section class="hero-section">
  <div class="hero-overlay"></div>

  <div class="hero-content">
    <h1>
      Where Life Finds <br>
      <span>Rhythm</span>
    </h1>

    <p>
      An iconic 40-floor tower in LB Nagar. Elevated living, redefined.
    </p>

    <a href="#contact" class="hero-btn">Contact Us</a>
  </div>
</section>

<section class="about-section">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <span class="about-subtitle">Welcome to</span>

        <h2 class="about-title">
          RadhaKrishna Bliss
        </h2>

        <p class="about-text">
          An iconic 40-floor tower, crafted for elevated living in LB Nagar.
          This singular residential address brings together expansive 3 & 4 BHK homes
          ranging from 1,980 to 2,935 sq. ft., designed for those who value space,
          privacy, and understated luxury.
        </p>

        <p class="about-text">
          Rising gracefully above the city, the tower offers panoramic views,
          thoughtful planning, and a living experience defined by calm,
          comfort, and refinement.
        </p>

        <div class="about-buttons">
          <a href="#enquire" class="btn-primary-custom">ENQUIRE NOW</a>
          <a href="#brochure" class="btn-secondary-custom">BROCHURE</a>
        </div>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 position-relative">
        <div class="about-image-box">
          <img src="{{asset('images/tower-render.jpg')}}" alt="RadhaKrishna Bliss Tower">
        </div>

        <!-- COUNT BOX -->
        <div class="floor-count">
          <span class="count-number" data-count="40">0</span>
          <small>Floors</small>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="highlights-section">
  <div class="container">

    <h2 class="highlights-title">Key Highlights</h2>

    <div class="highlights-grid">

      <!-- CARD 1 -->
      <div class="highlight-card">
        <div class="icon-circle">
          <i class="fa-solid fa-building"></i>
        </div>
        <h4>40-Floor</h4>
        <p>Single Tower</p>
      </div>

      <!-- CARD 2 -->
      <div class="highlight-card">
        <div class="icon-circle">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <h4>1.5 Acres</h4>
        <p>Spread Across</p>
      </div>

      <!-- CARD 3 -->
      <div class="highlight-card">
        <div class="icon-circle">
          <i class="fa-solid fa-house-chimney"></i>
        </div>
        <h4>23,000 sq.ft.</h4>
        <p>Clubhouse</p>
      </div>

      <!-- CARD 4 -->
      <div class="highlight-card">
        <div class="icon-circle">
          <i class="fa-solid fa-house"></i>
        </div>
        <h4>3BHK & 4BHK</h4>
        <p>Apartments</p>
      </div>

      <!-- CARD 5 (SPECIAL HOVER) -->
      <div class="highlight-card special">
        <div class="icon-circle filled">
          <i class="fa-solid fa-ruler-combined"></i>
        </div>
        <h4>1980 – 2935</h4>
        <p>Sq. Ft.</p>
      </div>

    </div>

  </div>
</section>

<section class="amenities-section">

  <div class="amenities-heading">
    <span>World-Class</span>
    <h2>Amenities</h2>
  </div>

  <div class="amenities-wrapper">

    <!-- LEFT ARROW -->
    <div class="amenity-nav amenity-prev">❮</div>

    <!-- SWIPER -->
    <div class="swiper amenities-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="amenity-card">
            <div class="icon">🏀</div>
            <h4>Basketball Court</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="amenity-card active">
            <div class="icon filled">🧒</div>
            <h4>Kids Play Area</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="amenity-card">
            <div class="icon">🎾</div>
            <h4>Tennis Court</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="amenity-card">
            <div class="icon">🪑</div>
            <h4>Seating Zone</h4>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="amenity-card">
            <div class="icon">🏊</div>
            <h4>Swimming Pool</h4>
          </div>
        </div>

      </div>
    </div>

    <!-- RIGHT ARROW -->
    <div class="amenity-nav amenity-next">❯</div>

  </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".amenities-swiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: 3,
    spaceBetween: 30,
    grabCursor: true,
    speed: 700,
    navigation: {
      nextEl: ".amenity-next",
      prevEl: ".amenity-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
      }
    }
  });
});
</script>



<section class="siteplan-section">
    <div class="container">

  <h2 class="siteplan-title">Site Plan</h2>

  <div class="siteplan-wrapper" style="width:80%">
    <img src="{{asset('images/site-plan.png')}}" alt="Site Plan" >
  </div>

</section>

<section class="floorplans-section">

  <h2 class="floorplans-title">Floor Plans</h2>

  <div class="floorplans-container">

    <!-- LEFT : IMAGE -->
    <div class="floorplan-image">
      <img src="{{asset('images/floor-plans.png')}}" alt="Floor Plan">
    </div>

    <!-- RIGHT : PRICE TABLE -->
    <div class="floorplan-pricing">

      <h4 class="price-title">Price</h4>

      <div class="price-table">

        <div class="price-header">
          <span>TYPE</span>
          <span>AREA</span>
          <span>PRICE</span>
        </div>

        <div class="price-row">
          <span>3 BHK</span>
          <span>1980 sq.ft.</span>
          <a href="#enquire" class="price-btn">UNLOCK PRICE</a>
        </div>

        <div class="price-row">
          <span>3 BHK</span>
          <span>2050 sq.ft.</span>
          <a href="#enquire" class="price-btn">UNLOCK PRICE</a>
        </div>

        <div class="price-row">
          <span>4 BHK</span>
          <span>2935 sq.ft.</span>
          <a href="#enquire" class="price-btn">UNLOCK PRICE</a>
        </div>

      </div>
    </div>

  </div>
  </div>

</section>


<section class="location-section">

  <!-- Heading -->
  <div class="location-heading">
    <span>Prime Connectivity</span>
    <h2>Location Advantage</h2>
  </div>

  <div class="location-container">

    <!-- LEFT CONTENT -->
    <div class="location-list">

      <div class="location-card">
        <div class="location-number">02</div>
        <p>Minutes from LB Nagar Metro</p>
        <span class="pin">📍</span>
      </div>

      <div class="location-card">
        <div class="location-number">10</div>
        <p>Minutes Drive from Nagole</p>
      </div>

      <div class="location-card">
        <div class="location-number">08</div>
        <p>Minutes Drive to DMart</p>
      </div>

      <div class="location-card">
        <div class="location-number">06</div>
        <p>Minutes to Delhi Intl. School</p>
      </div>

    </div>

    <!-- RIGHT MAP -->
    <div class="location-map">
      <img src="{{asset('images/location.png')}}" alt="Location Map">
    </div>

  </div>

</section>

<section class="gallery-section">

  <h2 class="gallery-title">Gallery</h2>

  <div class="gallery-wrapper">

    <!-- Left Arrow -->
    <div class="gallery-nav gallery-prev">❮</div>

    <!-- Swiper -->
    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="images/gallery-1.jpg" alt="Gallery Image">
        </div>

        <div class="swiper-slide">
          <img src="images/gallery-2.jpg" alt="Gallery Image">
        </div>

        <div class="swiper-slide">
          <img src="images/gallery-3.jpg" alt="Gallery Image">
        </div>

      </div>
    </div>

    <!-- Right Arrow -->
    <div class="gallery-nav gallery-next">❯</div>

  </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".gallery-swiper", {
    loop: true,
    speed: 700,
    grabCursor: true,
    slidesPerView: 1,
    navigation: {
      nextEl: ".gallery-next",
      prevEl: ".gallery-prev",
    },
    mousewheel: false,
    keyboard: true
  });
});
</script>


<section class="specs-section">

  <!-- Heading -->
  <div class="specs-heading">
    <span>Quality Standards</span>
    <h2>Specifications</h2>
  </div>

  <div class="specs-container">

    <!-- LEFT COLUMN -->
    <div class="specs-column">

      <details open class="spec-item">
        <summary>Plastering in Typical Floors</summary>
        <div class="spec-content">
          Internal and external wall plastering with smooth finish using cement mortar.
        </div>
      </details>

      <details class="spec-item">
        <summary>Structure</summary>
        <div class="spec-content">
          RCC framed structure designed for seismic resistance as per IS standards.
        </div>
      </details>

      <details class="spec-item">
        <summary>Painting</summary>
        <div class="spec-content">
          Premium interior emulsion paint with weatherproof exterior finish.
        </div>
      </details>

      <details class="spec-item">
        <summary>Joinery Door Works</summary>
        <div class="spec-content">
          Engineered wooden frames with premium laminated flush doors.
        </div>
      </details>

      <details class="spec-item">
        <summary>Flooring</summary>
        <div class="spec-content">
          High-quality vitrified tiles in living, dining & bedrooms.
        </div>
      </details>

      <details class="spec-item">
        <summary>Dadoing</summary>
        <div class="spec-content">
          Ceramic tiles dado up to lintel level in bathrooms and utilities.
        </div>
      </details>

      <details class="spec-item">
        <summary>Kitchen</summary>
        <div class="spec-content">
          Granite platform with stainless steel sink and provision for appliances.
        </div>
      </details>

    </div>

    <!-- RIGHT COLUMN -->
    <div class="specs-column">

      <details class="spec-item">
        <summary>Electrical</summary>
        <div class="spec-content">
          Concealed copper wiring with modular switches and adequate power points.
        </div>
      </details>

      <details class="spec-item">
        <summary>Lifts</summary>
        <div class="spec-content">
          High-speed automatic elevators with power backup.
        </div>
      </details>

      <details class="spec-item">
        <summary>Parking</summary>
        <div class="spec-content">
          Adequate covered parking with well-marked circulation areas.
        </div>
      </details>

      <details class="spec-item">
        <summary>Car Wash Facility</summary>
        <div class="spec-content">
          Dedicated car wash bays within the premises.
        </div>
      </details>

      <details class="spec-item">
        <summary>Generator</summary>
        <div class="spec-content">
          Power backup for common areas, lifts, and essential services.
        </div>
      </details>

      <details class="spec-item">
        <summary>STP</summary>
        <div class="spec-content">
          Sewage treatment plant with water reuse for landscaping.
        </div>
      </details>

      <details class="spec-item">
        <summary>Telecom / Internet / DTH / Door Management / Security</summary>
        <div class="spec-content">
          Provision for high-speed internet, DTH, video door phone, and CCTV.
        </div>
      </details>

    </div>

  </div>

</section>

<section class="aboutjc-section">

  <div class="aboutjc-container">

    <!-- LEFT CONTENT -->
    <div class="aboutjc-content">
      <h2>About Jain Constructions</h2>

      <p>
        Founded with the vision of creating integrated townships and meaningful
        lifestyle environments, Jain Constructions goes beyond building homes
        to shaping enduring living experiences. Each development reflects a
        thoughtful approach to design, functionality, and long-term value.
      </p>

      <p>
        Guided by a commitment to benchmark quality, a customer-centric philosophy,
        and uncompromising business ethics, Jain Constructions believes in building
        with integrity, transparency, and timeless values at its core.
      </p>
    </div>

    <!-- RIGHT STATS -->
    <div class="aboutjc-stats">

      <div class="stat-card">
        <h3><span class="count" data-target="2500">0</span>+</h3>
        <p>Happy Customers</p>
      </div>

      <div class="stat-card">
        <h3><span class="count" data-target="38">0</span></h3>
        <p>Completed Projects</p>
      </div>

      <div class="stat-card">
        <h3><span class="count" data-target="6">0</span></h3>
        <p>Ongoing Projects</p>
      </div>

      <div class="stat-card">
        <h3><span class="count" data-target="3">0</span></h3>
        <p>Upcoming Projects</p>
      </div>

    </div>

  </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".count");

  counters.forEach(counter => {
    const target = +counter.getAttribute("data-target");
    let current = 0;
    const increment = target / 80;

    const updateCounter = () => {
      if (current < target) {
        current += increment;
        counter.innerText = Math.ceil(current);
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = target;
      }
    };

    updateCounter();
  });
});
</script>


<section class="callback-section">

  <!-- Heading -->
  <div class="callback-heading">
    <span>Get In Touch</span>
    <h2>Request a Call Back</h2>
  </div>

  <div class="callback-container">

    <!-- LEFT : FORM -->
    <div class="callback-form">

      <form action="submit-form.php" method="POST">

        <label>NAME</label>
        <input type="text" name="name" placeholder="Name" required>

        <label>PHONE NUMBER</label>
        <input type="tel" name="phone" placeholder="Phone Number" required>

        <label>EMAIL</label>
        <input type="email" name="email" placeholder="Email">

        <label>MESSAGE</label>
        <textarea name="message" placeholder="Message"></textarea>

        <button type="submit">SUBMIT ENQUIRY</button>

      </form>

    </div>

    <!-- RIGHT : IMAGE -->
    <div class="callback-image">
      <img src="{{asset('images/tower-render.jpg')}}" alt="Building Image">
    </div>

  </div>

</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $name    = htmlspecialchars(trim($_POST["name"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Basic validation
    if (empty($name) || empty($phone)) {
        echo "Name and Phone Number are required.";
        exit;
    }

    // Email settings
    $to = "your-email@example.com";   // 🔴 CHANGE THIS
    $subject = "New Callback Request";
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "
        <h3>New Enquiry</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    // Send mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! We will contact you soon.";
    } else {
        echo "Error sending message. Please try again.";
    }
}
?>
