function geoip(json) {
    var country_code = json.country_code;
    console.log(country_code);
    if (country_code != "TR") {
        var rcWidget = document.getElementsByTagName("rc-widget")[0];
        rcWidget.setAttribute("token", "6023afcd2a486f00219b7665");
        var body = document.getElementsByTagName("body").item(0);
        var script = document.createElement("script");
        script.setAttribute("type", "module");
        script.setAttribute("src", "https://widget.resclick.com/rc-widget.min.js");
        body.appendChild(script);
        window.onload = function() {
            if (document.getElementById("tbres"))
                document.getElementById("tbres").style.display = "none";
            if (document.getElementById("tbphone"))
                document.getElementById("tbphone").style.display = "none";
            if (document.getElementById("phonefooter"))
                document.getElementById("phonefooter").textContent =
                "Rezervasyon: +90 242 212 18 86";
            if (document.getElementById("phonecontact"))
                document.getElementById("phonecontact").textContent =
                "+90 242 212 18 86";
        };
    } else {
        const reservationWidget = document.getElementById("rezervasyon-widget");
        reservationWidget.innerHTML = `
               <div class="handle" id="handleid">
				<div class="rezervasyon-ok"><span>&lt;</span></div>
				<div class="rezervasyon-trigger">Rezervasyon</div>
			</div>
			<iframe width="100%" height="500" frameborder="0" src="/reservation-iframe.html" scrolling="auto"></iframe>
                `;
        window.onload = function() {
            if (document.getElementById("phoneRes"))
                document.getElementById("phoneRes").style.display = "none";
            if (document.getElementById("rs-widget"))
                document.getElementById("rs-widget").style.display = "none";
            if (document.getElementById("rezervasyon-widget")) {
                const reservationWidget = document.getElementById("rezervasyon-widget");
                const handleId = document.getElementById("handleid");
                handleId.onclick = function() {
                    reservationWidget.classList.toggle("active");
                };
            }
        };
    }
}