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
    <link rel="stylesheet" href="../css/lightgallery.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sub-style.css">

    <?php include 'en/inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('../images/home/3.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
        </div>
    </section>
    <section>
        <div class="galericontainer">
            <div class="cheader">
                <h2>Gallery</h2>
            </div>
            <div class="">
                <div class="filter-btns">
                    <button class="filter-button" data-filter="all">All</button>
                    <button class="filter-button" data-filter="category1">General</button>
                    <button class="filter-button" data-filter="category6">Terrace</button>
                    <button class="filter-button" data-filter="category2">Accommodation</button>
                    <button class="filter-button" data-filter="category5">Aqua & Beach & Pool</button>
                    <button class="filter-button" data-filter="category3">Restaurant & Bar</button>
                    <button class="filter-button" data-filter="category4">Spa & Wellness</button>
                </div>
            </div>
        </div>

        <br />
        <div class="row phtos">
            <div class="cont">
                <div class="demo-gallery">
                    <ul id="lightgallery">
                        <!-- category1 -->

                        <?php for ($i = 1; $i <= 27; $i++) { ?>
                            <li class="gallery_product filter category1" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category6 -->

                        <?php for ($i = 30; $i <= 37; $i++) { ?>
                            <li class="gallery_product filter category6" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- category2-->
                        <?php for ($i = 90; $i <= 101; $i++) { ?>
                            <li class="gallery_product filter category2" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category5-->
                        <?php for ($i = 40; $i <= 59; $i++) { ?>
                            <li class="gallery_product filter category5" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <!-- category3-->
                        <?php for ($i = 70; $i <= 80; $i++) { ?>
                            <li class="gallery_product filter category3" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- category4 -->
                        <?php for ($i = 110; $i <= 114; $i++) { ?>
                            <li class="gallery_product filter category4" data-src="../images/galeri/<?php echo $i ?>.jpg">
                                <a href="">
                                    <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                                    <div class="demo-gallery-poster">
                                        <img src="../images/zoom.png" />
                                    </div>
                                </a>
                            </li>
                        <?php } ?>



                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'en/inc/footer.php' ?>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/script.js"></script>
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
    <script src="../js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
    </body>

</html>