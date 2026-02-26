<header class="main-header">
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <div class="logo">
        <img src="{{asset('images/Bliss-Final-logo.png')}}" alt="Jains Radhakrishna Bliss">
      </div>

      <!-- Desktop Menu -->
      <nav class="desktop-menu d-none d-lg-flex">
        <a href="#overview">Overview</a>
        <a href="#amenities">Amenities</a>
        <a href="#plans">Floor Plans</a>
        <a href="#location">Location</a>
        <a href="#gallery">Gallery</a>
        <a href="#specs">Specifications</a>
      </nav>

      <!-- CTA + Hamburger -->
      <div class="d-flex align-items-center">
        <a href="#" class="btn brochure-btn d-none d-lg-block">BROCHURE</a>

        <!-- Hamburger -->
        <div class="hamburger d-lg-none" onclick="openMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- Mobile Slide Menu -->
<div class="mobile-menu" id="mobileMenu">
  <div class="close-btn" onclick="closeMenu()">×</div>

  <a href="#overview">Overview</a>
  <a href="#amenities">Amenities</a>
  <a href="#plans">Floor Plans</a>
  <a href="#location">Location</a>
  <a href="#gallery">Gallery</a>
  <a href="#specs">Specifications</a>

  <a href="#" class="btn brochure-btn mt-4">BROCHURE</a>
</div>