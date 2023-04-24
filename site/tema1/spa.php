<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Theme | Spa & Wellness</title>
    <link rel="apple-touch-icon" href="images/favicon.ico" />
    <link rel="icon" href="images/favicon.ico" />
    <meta name="description" content="ResClick Theme" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta name="classification" content="ResClick Theme | ANTALYA" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper-slide.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub-style.css">
    <style>
        .swiper {
            width: 100%;
            height: 375px;
            box-sizing: border-box;
        }
    </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('images/home/16.webp') ;">

        </div>
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>SPA & WELLNESS</h3>
            <div class="rbody">
                <div class="rcontent">
                    <div class="roomPropertySub">
                        <p>Maecenas egestas massa tortor, in ullamcorper massa auctor sit amet. Duis rhoncus nibh a justo pretium, eget semper nulla iaculis.</p>
                            <br>
                        <p>Vestibulum iaculis lacus et turpis elementum, non dictum dolor rutrum.</p>
                        <!-- <div class="propertySub">- </div> -->
                    </div>
                </div>
                <div class="rcontent hr45">
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom2">
                        <div class="swiper-wrapper">
                 
                            <?php for ($i = 15; $i <= 17; $i++) { ?>
                                <div class="swiper-slide">
                                    <img alt="ResClick Theme | Spa & Wellness" src="images/home/<?php echo $i ?>.webp" />
                                </div>

                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="img-top" style="background-image:url('images/home/17.webp') ;">

        </div>
    </section>

    <?php include 'inc/footer.php' ?>
    <script src="js/script.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
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
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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