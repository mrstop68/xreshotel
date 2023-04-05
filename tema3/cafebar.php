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
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.2),rgba(0,0,0,0)), url('images/home/9.webp'); background-position: center;background-size: cover;">
                </div>
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.2),rgba(0,0,0,0)), url('images/home/23.webp'); background-position: center;background-size: cover;">
                </div>
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.2),rgba(0,0,0,0)), url('images/home/24.webp'); background-position: center;background-size: cover;">
                </div>

                <span class="roomName">Cafe Bar</span>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section data-aos="fade-up">
        <div class="roomdetail">
            <div class="detailcontent">
                <div class="sub-body detailleft">
                    <h2>Cafe Bar</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem sed risus ultricies tristique nulla. </p>
                    <h6>Özellikler</h6>
                    <div class="PropertySub2">
                        <div> Tempor orci dapibus ultrices in iaculis nunc.</div>

                    </div>
                </div>
                <div class="sub-body detailrigt">
                    <div><img src="images/home/24.webp" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="multiple-gallery" data-aos="fade-up">
        <div class="lightgallery">
            <h2>
                Cafe Bar Mini Galeri
            </h2>
        </div>
        <div class="cont">
            <div class="demo-gallery">
                <ul id="lightgallery">

                    <li data-src="images/home/23.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/23.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>
                    <li data-src="images/home/24.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/24.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>

                    <li data-src="images/home/9.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/9.webp" />
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
            <h3>Diğer Barlar</h3>
            <div class="columcontent">
                <div class="columbody" data-aos="fade-up">
                    <a href="lobibar"><img src="images/home/29.webp" alt=""></a>
                    <h2>Lobi Bar</h2>
                    <p>Elementum tempus egestas sed sed risus pretium quam. Sed viverra ipsum nunc aliquet bibendum. Id semper risus in hendrerit gravida. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Dui nunc mattis enim ut tellus.</p>
                    <a href="lobibar"><button>Daha Fazlası</button></a>
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