<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Tema 2</title>
    <link rel="apple-touch-icon" href="images/icon.png" />
    <link rel="icon" href="images/icon.png" />
    <meta name="description" content="ResClick Theme 2" />
    <meta property="og:site_name" content="ResClick Theme 2" />
    <meta name="classification" content="ResClick Theme 2" />
    <meta name="abstract" content="ResClick Theme 2" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sub.css" />
    <link rel="stylesheet" href="css/lightgallery.css">

    <?php include 'inc/header.php' ?>

    <div class="img-top" style="background-image:url('images/home/5.webp') ;"></div>
    
    <section>
        <div class="galericontainer">
            <div class="cheader">
              
            </div>
            <div class="">
                <div class="filter-btns">
                    <button class="filter-button" data-filter="all">Hepsi</button>
                    <button class="filter-button" data-filter="category1">Genel</button>
                    <button class="filter-button" data-filter="category2">Konaklama</button>
                    <button class="filter-button" data-filter="category3">Sahil & Havuz</button>
                    <button class="filter-button" data-filter="category4">Restoran & Bar</button>
                    <button class="filter-button" data-filter="category5">Tesis & Eğlence</button>
                </div>
            </div>
        </div>

        <br />
        <div class="row phtos">
            <div class="cont">
                <div class="demo-gallery">
                    <ul id="lightgallery">
                        <!-- category1 -->

                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <li class="gallery_product filter category1" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- category2-->
                        <?php for ($i = 16; $i <= 19; $i++) { ?>
                            <li class="gallery_product filter category2" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category3-->
                        <?php for ($i = 8; $i <= 10; $i++) { ?>
                            <li class="gallery_product filter category3" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category4-->
                        <?php for ($i = 11; $i <= 15; $i++) { ?>
                            <li class="gallery_product filter category4" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img src="images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- category5 -->
                        <?php for ($i = 5; $i <= 7; $i++) { ?>
                            <li class="gallery_product filter category5" data-src="images/home/<?php echo $i ?>.webp">
                                <a href="">
                                    <img class="img-responsive" src="images/home/<?php echo $i ?>.webp" />
                                    <div class="demo-gallery-poster">
                                        <img src="images/zoom.png" />
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