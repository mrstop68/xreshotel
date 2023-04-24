<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Theme | Galeri</title>
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
    <link rel="stylesheet" href="css/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub-style.css">

    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('images/home/4.webp') ;">

        </div>
    </section>
    <section>
        <div class="galericontainer">
            <div class="cheader">
                <h2>GALERİ</h2>
            </div>
            <div class="">
                <div class="filter-btns">
                    <button class="filter-button" data-filter="all">Hepsi</button>
                    <button class="filter-button" data-filter="category1">Genel</button>
                    <button class="filter-button" data-filter="category2">Konaklama</button>
                    <button class="filter-button" data-filter="category3">Sahil & Havuz</button>
                    <button class="filter-button" data-filter="category4">Restoran & Bar</button>
                    <button class="filter-button" data-filter="category5">Spa & Wellness</button>
                </div>
            </div>
        </div>

        <br />
        <div class="row phtos">
            <div class="cont">
                <div class="demo-gallery">
                    <ul id="lightgallery">
                        <!-- category1 -->

                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <li class="gallery_product filter category1" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category2-->
                        <?php for ($i = 12; $i <= 14; $i++) { ?>
                            <li class="gallery_product filter category2" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category3-->
                        <?php for ($i = 4; $i <= 8; $i++) { ?>
                            <li class="gallery_product filter category3" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category4-->
                        <?php for ($i = 9; $i <= 11; $i++) { ?>
                            <li class="gallery_product filter category4" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img alt="ResClick Theme | Galeri" class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img alt="ResClick Theme | Galeri" src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category5-->
                        <?php for ($i = 15; $i <= 17; $i++) { ?>
                            <li class="gallery_product filter category5" data-src="images/home/<?php echo $i ?>.webp">
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

    <?php include 'inc/footer.php' ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Swiper JS -->
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