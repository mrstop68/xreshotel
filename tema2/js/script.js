document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    const selectHeader = document.querySelector("#header");
    if (selectHeader) {
        document.addEventListener("scroll", () => {
            window.scrollY > 100 ?
                selectHeader.classList.add("sticked") :
                selectHeader.classList.remove("sticked");
        });
    }

    const scrollTop = document.querySelector(".scroll-top");
    if (scrollTop) {
        const togglescrollTop = function() {
            window.scrollY > 100 ?
                scrollTop.classList.add("active") :
                scrollTop.classList.remove("active");
        };
        window.addEventListener("load", togglescrollTop);
        document.addEventListener("scroll", togglescrollTop);
        scrollTop.addEventListener(
            "click",
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            })
        );
    }

    const mobileNavShow = document.querySelector(".mobile-nav-show");
    const mobileNavHide = document.querySelector(".mobile-nav-hide");

    document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
        el.addEventListener("click", function(event) {
            event.preventDefault();
            mobileNavToogle();
        });
    });

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavShow.classList.toggle("d-none");
        mobileNavHide.classList.toggle("d-none");
    }

    document.querySelectorAll("#navbar a").forEach((navbarlink) => {
        if (!navbarlink.hash) return;

        // let section = document.querySelector(navbarlink.hash);
        // if (!section) return;

        navbarlink.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });

    const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

    navDropdowns.forEach((el) => {
        el.addEventListener("click", function(event) {
            if (document.querySelector(".mobile-nav-active")) {
                event.preventDefault();
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("dropdown-active");

                let dropDownIndicator = this.querySelector(".dropdown-indicator");
                dropDownIndicator.classList.toggle("bi-chevron-up");
                dropDownIndicator.classList.toggle("bi-chevron-down");
            }
        });
    });

    new Swiper(".slides-1", {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

// for popup
document.addEventListener("DOMContentLoaded", function() {
    function Close() {
      popupWrapper.classList.add("none");
    }
  const popupWrapper = document.querySelector(".popupWrapper");
  const wrapper = document.getElementById("wrapper_popup");
  const popup = document.getElementById("maxui_popup");
  const close = document.getElementById("maxui_close");
  
  if(wrapper){
  wrapper.addEventListener("click", () => Close());
  }
  if(close){
    close.addEventListener("click", () => Close());
    }
  });