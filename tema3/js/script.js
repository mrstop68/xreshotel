 
            //menu
              const iconBar = document.getElementById("icon-bar");
                const navMenu = document.getElementById("nav-menu");

                iconBar.onclick = function () {
                    iconBar.classList.toggle("change");
                    navMenu.classList.toggle("responsive");
                }
                // When the user scrolls down 600px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("myBtn").style.display = "block";

              
            } else {
                document.getElementById("myBtn").style.display = "none";
              
            }
            
        }
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