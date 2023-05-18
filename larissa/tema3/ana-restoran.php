<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/icon.png" />
    <title>ResClick Theme | Restoran</title>
    <meta name="description" content="ResClick Theme " />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="https://resclick.com/" />
    <meta property="og:title" content="ResClick Theme" />
    <meta property="og:description" content="ResClick Theme" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta name="classification" content="ResClick Theme" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="ResClick Theme" />
    <meta name="twitter:title" content="ResClick Theme" />
    <meta name="twitter:site" content="https://resclick.com/" />
    <meta name="twitter:creator" content="@ResClick" />
      <!-- Link Swiper's CSS -->

      <link rel="stylesheet" href="css/swiper-slide.css">
    <style>
        .swiper {
            width: 100%;
            height: 92vh;
            /* height: calc(100vh - 42px); */
        }

        .swiper-pagination-bullet-active {
            transform: scale(1.2);
        }
    </style>
    <!-- <link rel="stylesheet" href="css/glide.core.min.css"> -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub-style.css">
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/lightgallery.css">
</head>

<body>
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <!-- Swiper -->
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.2),rgba(0,0,0,0)), url('images/home/8.webp'); background-position: center;background-size: cover;">
                </div>
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.2),rgba(0,0,0,0)), url('images/home/11.webp'); background-position: center;background-size: cover;">
                </div>

                <span class="roomName">Slogan</span>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section style="margin-top: 120px;">
        <div class="rcontainer" data-aos="fade-down">
            <div class="acontent">
                <div class="aheader">
                    <h4>ANA RESTORAN</h4>
                    <h2>Lorem ipsum dolor sit amet!</h2>
                    <div class="aimg" style="background-image:url('images/home/10.webp'); "></div>
                    <div class="atext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Neque egestas congue quisque egestas.
                    <br><br>
                        <div class="columtwo">
                            <div class="colums">
                                • Neque egestas congue quisque egestas.<br>
                                • Neque egestas congue quisque egestas.<br>
                                • Neque egestas congue quisque egestas.<br>
                     
                            </div>
                            <div class="colums">
                                • Neque egestas congue quisque egestas.<br>
                                • Neque egestas congue quisque egestas.<br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="margin: 40px 0px;"></div>

        </div>
    </section>

    <section class="multiple-gallery" data-aos="fade-up">
        <div class="lightgallery">
            <h2>
               Ana Restoran Mini Galeri
            </h2>
        </div>
        <div class="cont">
            <div class="demo-gallery">
                <ul id="lightgallery">

                    <li data-src="images/home/8.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/8.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>
                    <li data-src="images/home/10.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/10.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>

                    <li data-src="images/home/11.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/11.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>
                    


                </ul>
            </div>
        </div>
    </section>
   
    <section>
        <div class="colum">
            <h3>Diğer Restoranlar</h3>
            <div class="columcontent">
                <div class="columbody" data-aos="fade-up">
                    <a href="alacarte-restoran"><img src="images/home/28.webp" alt=""></a>
                    <h2>Ala Carte Restoran</h2>
                    <p>Elementum tempus egestas sed sed risus pretium quam. Sed viverra ipsum nunc aliquet bibendum. Id semper risus in hendrerit gravida. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Dui nunc mattis enim ut tellus.</p>
                    <a href="alacarte-restoran"><button>Daha Fazlası</button></a>
                </div>

            </div>
        </div>
    </section>
    <!-- ************************************************************************************ -->

    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <script>
        // homepage first slider 
        var swiper = new Swiper(".mySwiper", {
            // spaceBetween: 15,
            // centeredSlides: true,
            loop: true,
            grabCursor: true,
            speed: 1200,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-20%", 0, -1],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },

            // cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            //mousewheel: true,
            keyboard: true,
        });
    </script>
    <!-- <script src="js/glide.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            // delay:5000,
            duration: 800,
            mirror: false,
        });
    </script>
    <script src="js/script.js"></script>
    <script src="js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
</body>

</html>