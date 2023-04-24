<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Theme | ANTALYA</title>
    <link rel="apple-touch-icon" href="images/favicon.ico" />
    <link rel="icon" href="images/favicon.ico" />
    <meta name="description" content="ResClick Theme" />
    <meta name="classification" content="ResClick Theme | ANTALYA" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="https://www.resclick.com/" />
    <meta property="og:title" content="ResClick Theme | ANTALYA" />
    <meta property="og:description" content="ResClick Theme" />
    <link rel="alternate" hreflang="tr" href="https://www.resclick.com/" />
    <link rel="alternate" hreflang="en" href="https://www.resclick.com/en/" />
    <link rel="alternate" hreflang="de" href="https://www.resclick.com/de/" />
    <link rel="alternate" hreflang="ru" href="https://www.resclick.com/ru/" />
    <link rel="stylesheet" href="tema1/css/fonts.css">
    <link rel="stylesheet" href="tema1/css/swiper-slide.css">
    <link rel="stylesheet" href="tema1/css/style.css">
    <?php include 'inc/header.php' ?>

    <section>
        <!-- Swiper -->
        <div class="swiper mySwiper swiperroom">
            <div class="swiper-wrapper">
                <?php
               
                foreach($dataIMG as $k=>$img){
                        // if( $img->slider ) {echo  '<div class="swiper-slide" style="background-image: url('.$apiURL.'//img/'.$img->imgName.'); background-position: center;background-size: cover;"></div>';}
                        if($img->slider === true) {?><div class="swiper-slide" style="background-image: url('<?=$apiURL?>/img/<?=$img->imgName?>'); background-position: center;background-size: cover;"></div> <?php }
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('images/home/1.webp');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy"></div>
                        <div class="bodyy bodyRight">
                            <h2>ResClick Theme</h2>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices lacus. Maecenas cursus, leo eu iaculis dictum, mauris ante facilisis metus, vitae porta lorem ipsum eu felis.
                                <br><br>
                                Proin sed est commodo, vestibulum est vitae, rhoncus felis. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('images/home/14.webp');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy bodyLeft">
                            <h2>ODALAR</h2>
                            <p>Praesent in sapien libero. Cras semper vitae augue a viverra. 
                                <br><br>
                                Sed eget dolor fringilla, varius purus pharetra, dignissim est. Mauris pretium laoreet dolor at blandit.
                            </p>
                            <a href="konaklama"><button class="btn-firts">KEŞFET</button></a>
                        </div>
                        <div class="bodyy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('images/home/10.webp');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy"></div>
                        <div class="bodyy bodyRight">
                            <h2>RESTORAN</h2>
                            <p>Vestibulum dui nibh, condimentum eget eleifend nec, sodales a neque. Aliquam et maximus magna. Cras pharetra, libero et consectetur mollis, leo purus hendrerit sem, sed placerat odio mi et ligula.
                                <br><br>
                            </p>
                            <a href="restoran"><button class="btn-firts">KEŞFET</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('images/home/3.webp');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy bodyLeft">
                            <h2>SAHİL & HAVUZ</h2>
                            <p>Vestibulum consectetur faucibus dictum. Praesent justo magna, blandit sed elit eget, bibendum lobortis justo.
                                <br><br>
                                Praesent nisl justo, lacinia vel bibendum eu, volutpat eget erat.
                            </p>
                            <a href="sahil-havuz"><button class="btn-firts">KEŞFET</button></a>
                        </div>
                        <div class="bodyy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapperContainer">
            <div class="wcontent"><img src="images/home/1.webp" alt="ResClick Theme | Tesis">
                <a href="tesis">
                    <div class="wbody">
                        <h3>Tesis</h3>
                    </div>
                </a>
            </div>
            <div class="wcontent"><img src="images/home/8.webp" alt="ResClick Theme | Galeri">
                <a href="galeri">
                    <div class="wbody">
                        <h3>Galeri</h3>
                    </div>
                </a>
            </div>
            <div class="wcontent"><img src="images/home/4.webp" alt="ResClick Theme | İletişim">
                <a href="iletisim">
                    <div class="wbody">
                        <h3>İletişim</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('images/home/16.webp');">
                <div class="containerr">
                    <div class="contentt">
                        <div class="bodyy bodyLeft">
                            <h2>SPA & WELLNESS</h2>
                            <p>Cras luctus nunc ex, facilisis laoreet enim egestas a. Vestibulum sit amet risus convallis, eleifend sem sit amet, interdum neque.
                            Nullam bibendum risus eros, id vestibulum mauris ullamcorper et. 
                            </p>
                            <a href="spa"><button class="btn-firts">KEŞFET</button></a>
                        </div>
                        <div class="bodyy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php' ?>
    <script src="tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script src="tema1/js/swiper-bundle.min.js"></script>
    <script>
        // homepage first slider 
        var swiper = new Swiper(".mySwiper", {
            // spaceBetween: 15,
            // centeredSlides: true,
            loop: true,
            grabCursor: true,
            speed: 1200,
            // effect: "creative",
            // creativeEffect: {
            //     prev: {
            //         shadow: true,
            //         translate: [0, 0, -400],
            //     },
            //     next: {
            //         translate: ["100%", 0, 0],
            //     },
            // },
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
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            // cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //mousewheel: true,
            keyboard: true,
        });
    </script>
    </body>

</html>