var swiper = new Swiper(".bestseller-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    450: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 7,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 8,
      spaceBetween: 40,
    },
  },
});

var swiper = new Swiper(".toprated-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    450: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 7,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 8,
      spaceBetween: 40,
    },
  },
});
