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
    </style>
    <?php include 'en/inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('../images/home/46.jpg') ;">
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>ACTIVITY & ENTERTAINMENT</h3>
            <div class="rbody">
                <div class="rcontent">
                    <div class="roomPropertySub">
                        <p>Apart from the shows and activities offered by our professional animation team, there are various entertainments, night shows and live music on certain days and evenings of the week.</p>
                        <br>

                        <div class="propertySub">• We have volleyball area, mini football field, table tennis, boça, dart, fitness room, activity pool areas for sports fans. </div>
                        <div class="propertySub">• You will be revived in these areas with our professional animation team. </div>
                        <div class="propertySub">• Our mini club where your children will have a good time is right next to the children's world.</div>

                    </div>
                </div>
                <div class="rcontent">
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../images/galeri/45.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/48.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/49.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/41.jpg" />
                            </div>


                        </div>
                        <!-- <div class="swiper-button-nextr1"></div>
                            <div class="swiper-button-prevr1"></div> -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rcontainer">
            <div class="card-body card-center">
                <p>
                    Water sports on the beach are chargeable. (Parachute, Jet Ski, Water Ski, etc.)
                </p><br><br>
            </div>
        </div>
        <div class="img-top" style="background-image:url('../images/home/42.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
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