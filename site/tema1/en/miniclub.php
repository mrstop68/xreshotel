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
        <div class="img-top" style="background-image:url('../images/home/121.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>CHILDREN'S DREAMS COME TRUE HERE</h3>
            <div class="rbody">
                <div class="rcontent">
                    <div class="roomPropertySub">
                        <p>Our experienced children's club team, which speaks many foreign languages, offers various activities during the day to our children between the ages of 4 and 12. </p>
                        <p>A large slide complex has been carefully designed for you to have a good time with your children.</p>
                        <br>
                        <hr class="hr">
                        <div class="propertySub">• We also have a children's buffet in our main restaurant.</div>
                        <div class="propertySub">• There is also a child's highchair here. </div>
                    </div>
                </div>
                <div class="rcontent">
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../images/galeri/120.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/121.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/50.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/galeri/51.jpg" />
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
                    Our experienced children's club team offers a variety of activities throughout the day to our child guests.
                </p><br><br>
            </div>
        </div>
        <div class="img-top" style="background-image:url('../images/home/51.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
        </div>
        <div class="rcontainer">
            <div class="card-body card-center">
                <p style="text-align: center;">Children's dreams come true here</p><br><br>
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