 function geoip(json) {
            // Get country code based on IP
            var country_code = json.country_code;
            console.log(country_code);

            if (country_code == "TR") {
                const reservationWidget = document.getElementById("rezervasyon-widget");
                reservationWidget.innerHTML = `
               <div class="handle" id="handleid">
				<div class="rezervasyon-ok"><span>&lt;</span></div>
				<div class="rezervasyon-trigger">Rezervasyon</div>
			</div>
			<iframe width="100%" height="500" frameborder="0" src="reservation-iframe.html" scrolling="auto"></iframe>
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
                document.getElementById("phonefooter").textContent = "Rezervasyon: +90 242 212 18 86";
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
                document.getElementById("phonefooter").textContent = "Rezervasyon: +90 242 212 18 86";
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