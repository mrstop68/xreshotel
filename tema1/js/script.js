const withNavbar = window.screen.width;
if (withNavbar >= 800) {
  function openNav() {
    // document.documentElement.scrollIntoView(true);
    document.getElementById("mySidebar").style.width = "30%";
    document.querySelector("body").style.marginRight = "30%";
    document.querySelector("body").style.marginLeft = "-30%";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.querySelector("body").style.marginRight = "0";
    document.querySelector("body").style.marginLeft = "0px";
  }
} else {
  function openNav() {
    // document.documentElement.scrollIntoView(true);
    document.getElementById("mySidebar").style.width = "220px";
    document.querySelector("body").style.marginRight = "220px";
    document.querySelector("body").style.marginLeft = "-220px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.querySelector("body").style.marginRight = "0";
    document.querySelector("body").style.marginLeft = "0px";
  }
}
// Homepage video
// var video = document.getElementById("myVideo");
// var btn = document.getElementById("myBtn");

// function myFunction() {
//   if (video.paused) {
//     video.play();
//     btn.innerHTML = "||";
//   } else {
//     video.pause();
//     btn.innerHTML = ">";
//   }
// }

//safya aşağı scrool yapıldığında menu stcky olayı
// const navBar = document.getElementById("navbar");
// var aColor = document.querySelectorAll(".navMenu ul li a");
// var stellaLogo = document.querySelector(".header-logo img");

// window.onscroll = function () {
// scrollFunction();
// if (
// document.body.scrollTop > 250 ||
// document.documentElement.scrollTop > 250
// ) {
// navBar.style.position = "sticky";
// navBar.style.top = "0px";
// navBar.style.background = "#fff";
// navBar.style.animation = "stickyBar 1.2s ";
// stellaLogo.style.width = "60%";
// navBar.style.boxShadow = "0px 0px 8px #cfad64";
// navBar.style.zIndex = "999";
// document.querySelector(".header-logo img").src =
//     "/stella/images/stella3.png";

// for (let i = 0; i <= aColor.length; i++) {
//     aColor[i].style.color = "#000";
// }
// } else {
// navBar.style.position = "absolute";
// navBar.style.background = "#fff0";
// navBar.style.backgroundImage =
// "linear-gradient(to right, #ffffff, #3395b2)";
// navBar.style.animation = "stickyBar2 1s";
// navBar.style.boxShadow = "none";
// stellaLogo.style.width = "60%";
// document.querySelector(".header-logo img").src =
//     "/stella/images/stella.png";
// for (let i = 0; i <= aColor.length; i++) {
//     aColor[i].style.color = "#fff";
// }
// }
// };

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
// window.onscroll = function() {
//     scrollFunction()
// };

function scrollFunction() {
  if (
    document.body.scrollTop > 600 ||
    document.documentElement.scrollTop > 600
  ) {
    document.getElementById("backtoTop").style.display = "block";
  } else {
    document.getElementById("backtoTop").style.display = "none";
  }
}
