<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream World Palace | Manavgat - ANTALYA</title>
    <link rel="apple-touch-icon" href="../images/icon.png" />
    <link rel="icon" href="../images/icon.png" />
    <meta name="description" content="Dream World Palace, where elegance and the highest quality are felt; It is waiting for you for an unforgettable holiday with its beach, aqua, pools and comfortable rooms. " />
    <meta property="og:site_name" content="Dream World Palace" />
    <meta name="classification" content="Dream World Palace | Manavgat - ANTALYA" />
    <meta name="abstract" content="Dream World Palace" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="../css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/swiper-slide.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sub-style.css">
    <style>
        .swiper {
            width: 100%;
            height: 375px;
            box-sizing: border-box;
        }

        .img-top {
            height: 40vh;
            background-position: bottom;
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 50px;
            background-attachment: fixed;
        }
    </style>
    <?php include 'en/inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('../images/home/3.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
        </div>
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>ONLINE RESERVATION</h3>
            <div class="rbody">
                <meta http-equiv="Content-type" content="text/html; charset=utf-8">

                <div class="reservation-widget hotelDetails hotelReservationSteps reservation" id="tb-reservation" style="background: #fff;margin-bottom: 15px"></div>

                <script type="text/javascript">
                    var TB = {

                        data: {

                            adult: 2,

                            child: 0,

                            childAge: [],

                            hotelId: 'baca9cd1ce1049a89d8f7979a003fed9',

                            agencyId: 'c899b358ad494e5786a41bfd2a5fc820',

                            subsidiaryId: 0,

                            agentId: '6008',

                            productType: 'hotel',

                            version: Math.random(),

                            hotelPhone: ''

                        },

                        error: function() {

                            alert('Hata oluştu! Lütfen daha sonra tekrar deneyiniz.');

                        }

                    };

                    (function(d, s, id) {

                        var js, tbjs = d.getElementsByTagName(s)[0];

                        if (d.getElementById(id)) return;

                        js = d.createElement(s);

                        js.id = id;

                        js.src = "//www.tatilbudur.com/themes/tbnew/assets/widgets/reservation/tatilbudur-widgets.js?ver=" + TB.data.version;

                        tbjs.parentNode.insertBefore(js, tbjs);

                    }(document, 'script', 'tb-jssdk'));
                </script>

            </div>
        </div>
    </section>

    <?php include 'en/inc/footer.php' ?>
    <script src="../js/script.js"></script>
    <!-- Swiper JS -->
    <script src="../js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiperroom1", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-120%", 0, -500],
                },
                next: {
                    shadow: true,
                    translate: ["120%", 0, -500],
                },
            },
            navigation: {
                nextEl: ".swiper-button-nextr1",
                prevEl: ".swiper-button-prevr1",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
        var swiper = new Swiper(".mySwiperroom2", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-120%", 0, -500],
                },
                next: {
                    shadow: true,
                    translate: ["120%", 0, -500],
                },
            },
            navigation: {
                nextEl: ".swiper-button-nextr1",
                prevEl: ".swiper-button-prevr1",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
    </script>
    </body>

</html>