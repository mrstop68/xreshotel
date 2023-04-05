// homepage first slider
var swiper = new Swiper(".mySwiper", {
  // spaceBetween: 15,
  // centeredSlides: true,
  loop: true,
  grabCursor: true,
  speed: 1200,
  effect: "fade",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: [0, 0, -400],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  // cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  //mousewheel: true,
  keyboard: true,
});
// Homepage konaklama (ikinci) slider
var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 1,
  centeredSlides: false,
  slidesPerGroupSkip: 1,
  speed: 1000,
  grabCursor: true,
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    769: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  navigation: {
    nextEl: ".swiper-button-next2",
    prevEl: ".swiper-button-prev2",
  },
  // pagination: {
  //     el: ".swiper-pagination2",
  //     clickable: true,
  // },
});

//   Homepage third (PAGES)   sldier glides
const config = {
  type: "carousel",
  startAt: 0,
  perView: 2,
  focusAt: "center",
  breakpoints: {
    900: { perView: 2 },
  },
};
new Glide(".glide", config).mount();
