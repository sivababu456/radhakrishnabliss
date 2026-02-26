
function openMenu() {
  document.getElementById("mobileMenu").classList.add("active");
}

function closeMenu() {
  document.getElementById("mobileMenu").classList.remove("active");
}




document.addEventListener("DOMContentLoaded", () => {
  const counter = document.querySelector(".count-number");
  const target = +counter.getAttribute("data-count");
  let count = 0;

  const updateCount = () => {
    const increment = target / 80;

    if (count < target) {
      count += increment;
      counter.innerText = Math.ceil(count);
      setTimeout(updateCount, 30);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});



new Swiper(".amenities-swiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  centeredSlides: true,
  speed: 700,
  navigation: {
    nextEl: ".amenities-next",
    prevEl: ".amenities-prev",
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});


