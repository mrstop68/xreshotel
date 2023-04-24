    <footer>
        <div class="wrapfooter">
            <div class="footercontent">
                <h4>Dream World Palace</h4>
                <p>Where Dreams Come True</p>
            </div>
        </div>

        <div class="contactfooter">
            <div class="footercontent2">
                <div class="fbody">
                    <h6>LOCATION</h6>
                    <div class="footerli"><img src="../images/svg/map.svg" alt="" width="18"><span>Turizm cad. 07600 - Çolaklı / Manavgat / Antalya / Turkey</span>
                    </div>
                </div>
                <div class="fbody">
                    <h6>CONTACT</h6>
                    <div class="footerli"><img src="../images/svg/phone.svg" alt="" width="18"><span id="phonefooter">Reservation: +90 242 745 09 86</span>
                    </div>
                    <div class="footerli"><img src="../images/svg/phone.svg" alt="" width="18"><span>Hotel: +90 242 777 00 97</span>
                    </div>
                    <!-- <div class="footerli"><img src="../images/svg/envelope.svg" alt="" width="18"><a href="mailto: "><span> </span></a>
                    </div> -->

                </div>
                <div class="fbody">
                    <h6>FOLLOW US</h6>
                    <div class="footerli">
                        <div class="socialimg"><a href="https://www.facebook.com/pages/category/Hotel/Dream-World-Palace-101969818031665/" target="_blank"><img src="../images/social/facebook.svg" alt=""></a></div>
                        <div class="socialimg"><a href="https://www.instagram.com/dreamworldpalace/" target="_blank"><img src="../images/social/instagram.svg" alt=""></a></div>
                        <!-- <div class="socialimg"><a href="" target="_blank"><img src="../images/social/twitter.svg" alt=""></a></div> -->
                        <div class="socialimg"><a href="https://www.youtube.com/channel/UCECekPhwBhPKiiqyO0aCQag" target="_blank"><img src="../images/social/youtube.svg" alt=""></a></div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="footerlogo"><img src="../images/palace_logo_white.png" alt=""></div>
            <div class="fend">
                <div class="endleft">
                    <!-- <span><a href="/KVKKPolitikasi.pdf" target="_blank"> KVKK Politikası </a> | </span>
                    <span id="ppData" class="ppData"> Çerez Politikası | </span>
                    <span id="ppSecurity" class="ppSecurity"> Aydınlatma Metni | </span>
                    <span><a href="/KVKKBasvuruFormu.pdf" target="_blank"> KVKK Basvuru Formu </a> </span> -->
                </div>
                <div class="endright">
                    <span class="copyy">Copyright © <?php echo date('Y') ?> All rights reserved | </span> <a href="https://resclick.com" target="_blank"> <img src="https://resclick.com/images/resclick-logo-black.svg" alt="" width="100"></a>
                </div>
            </div>
        </div>

    </footer>


    <div id="rezervasyon-widget"></div>
    <!-- tatilbudur widget -->

    <!-- <div id="myModalkvkk" class="modalx2"></div>
    <div id="myModalsozlesme" class="modalx3"></div> -->
    <div><a class="back" id="backtoTop" onclick="scrollToTop();return false;" href="#"><img src="../images/arrow.svg" alt="" width="20"></a></div>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("backtoTop").style.display = "block";

            } else {
                document.getElementById("backtoTop").style.display = "none";

            }
        }
    </script>

    <rc-widget id="rs-widget" locale="en"></rc-widget>
    <div id=phoneRes><img src="../images/callcenter.svg" alt=""></div>
    <script type="application/javascript">
        function geoip(json) {
            // Get country code based on IP
            var country_code = json.country_code;
            console.log(country_code);

            if (country_code == "TR") {
                const reservationWidget = document.getElementById("rezervasyon-widget");
                reservationWidget.innerHTML = `
               <div class="handle" id="handleid">
				<div class="rezervasyon-ok"><span>&lt;</span></div>
				<div class="rezervasyon-trigger">Reservation</div>
			</div>
			<iframe width="100%" height="500" frameborder="0" src="/reservation-iframe.html" scrolling="auto"></iframe>
                `;
                document.getElementById("rs-widget").style.display = "none";
                document.getElementById("phoneRes").style.display = "none";
            } else if (country_code == "undefined") {

                document.getElementById("tbres").style.display = "none";
                document.getElementById("tbphone").style.display = "none";

                var rcWidget = document.getElementsByTagName("rc-widget")[0];
                rcWidget.setAttribute("token", "6023f1732a486f00219b91cc");
                // console.log(rcWidget);
                var body = document.getElementsByTagName('body').item(0);
                var script = document.createElement("script");
                script.setAttribute("type", "module");
                script.setAttribute("src", "https://widget.resclick.com/rc-widget.min.js");
                body.appendChild(script);
                window.onload = function() {

                    var phoneRes = document.querySelector('#phoneRes');
                    var aRes = document.createElement("a");
                    aRes.setAttribute("href", "tel:+902422121886");
                    aRes.innerText = "+90 242 212 18 86";
                    phoneRes.appendChild(aRes);

                };
                document.getElementById("phonefooter").textContent = "Reservation: +90 242 212 18 86";
                document.getElementById("phonecontact").textContent = "+90 242 212 18 86";
            } else {
                document.getElementById("tbres").style.display = "none";
                document.getElementById("tbphone").style.display = "none";
                var rcWidget = document.getElementsByTagName("rc-widget")[0];
                rcWidget.setAttribute("token", "6023f1732a486f00219b91cc");
                console.log(rcWidget);
                var body = document.getElementsByTagName('body').item(0);
                var script = document.createElement("script");
                script.setAttribute("type", "module");
                script.setAttribute("src", "https://widget.resclick.com/rc-widget.min.js");
                body.appendChild(script);
                window.onload = function() {

                    var phoneRes = document.querySelector('#phoneRes');
                    var aRes = document.createElement("a");
                    aRes.setAttribute("href", "tel:+902422121886");
                    aRes.innerText = "+90 242 212 18 86";
                    phoneRes.appendChild(aRes);


                };
                document.getElementById("phonefooter").textContent = "Reservation: +90 242 212 18 86";
                document.getElementById("phonecontact").textContent = "+90 242 212 18 86";
            }
        }
        // <!-- tatilbudur widget -->
        const reservationWidget = document.getElementById("rezervasyon-widget");
        window.onload = function() {
            const handleId = document.getElementById("handleid");
            handleId.onclick = function() {
                reservationWidget.classList.toggle("active");
            }
        }


        // <!-- tatilbudur widget -->
    </script>
    <script async src="https://get.geojs.io/v1/ip/geo.js"></script>