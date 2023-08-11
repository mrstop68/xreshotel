<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/icon.png" />
    <title>ResClick Theme | Galeri</title>
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
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="css/swiper-slide.css">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="css/lightgallery.css">
    <!-- <link rel="stylesheet" href="css/gallery.css"> -->

</head>

<body>
    <?php include 'inc/header.php' ?>
    <section>
        <!-- ************************************************************************************ -->
        <section class="portfolio" id="portfolio" style="margin-top: 120px;">
            <div class="galericontainer">
                <div class="cheader">
                    <h2>Galeri</h2>
                </div>
                <div class="">
                    <div class="filter-btns">
                        <button class="filter-button" data-filter="all">Hepsi</button>
                        <button class="filter-button" data-filter="category1">Genel</button>
                        <button class="filter-button" data-filter="category2">Sahil & Havuz</button>
                        <button class="filter-button" data-filter="category3">Konaklama</button>
                        <button class="filter-button" data-filter="category4">Restoran</button>
                        <button class="filter-button" data-filter="category5">Spa & Sağlık</button>
                        <button class="filter-button" data-filter="category6">Mini Club</button>
                    </div>
                </div>
            </div>

            <br />
            <div class="row phtos">
                <div class="cont">
                    <div class="demo-gallery">
                        <ul id="lightgallery">
                            <!-- category1 -->
                            <?php for ($i = 1; $i <= 22; $i++) { ?>
                            <li class="gallery_product filter category1" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                            <!-- category2 -->
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <li class="gallery_product filter category2" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                            <!-- category3 -->
                            <?php for ($i = 12; $i <= 16; $i++) { ?>
                            <li class="gallery_product filter category3" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                
                            <!-- category4 -->
                            <?php for ($i = 8; $i <= 11; $i++) { ?>
                            <li class="gallery_product filter category4" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                        <?php for ($i = 23; $i <= 29; $i++) { ?>
                            <li class="gallery_product filter category4" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                            <!-- category5 -->
                            <?php for ($i = 17; $i <= 19; $i++) { ?>
                            <li class="gallery_product filter category5" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                            <!-- category6 -->
                            <?php for ($i = 20; $i <= 22; $i++) { ?>
                            <li class="gallery_product filter category6" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

           
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ************************************************************************************ -->

        <?php include 'inc/footer.php' ?>
        <!-- Swiper JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- <script src="js/swiper-bundle.min.js"></script> -->
        <!-- <script src="js/glide.min.js"></script> -->
        <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
        <script src="js/script.js"></script>
        <script>
            //animasyon yönetim
            AOS.init({
                offset: 100,
                // delay:5000,
                duration: 800,
                mirror: false,
            });
        </script>
        <script>
            /*	gallery */
            $(document).ready(function() {

                $(".filter-button").click(function() {
                    var value = $(this).attr('data-filter');

                    if (value == "all") {
                        $('.filter').show('1000');
                    } else {
                        $(".filter").not('.' + value).hide('3000');
                        $('.filter').filter('.' + value).show('3000');

                    }

                    if ($(".filter-button").removeClass("active")) {
                        $(this).removeClass("active");
                    }
                    $(this).addClass("active");
                });
            });
            /*	end gallery */
        </script>
        <script src="js/lightgallery.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'))
        </script>
</body>

</html>