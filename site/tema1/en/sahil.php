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
    <!-- <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/swiper-slide.css"> -->
    <link rel="stylesheet" href="../css/lightgallery.css">
    <link rel="stylesheet" href="../css/justifiedGallery.css">
    <link rel="stylesheet" href="../css/lg-thumbnail.css">
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
        <div class="img-top" style="background-image:url('../images/home/40.jpg') ;">
            <!-- <img src="../images/home/swim1.jpg" alt=""> -->
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>BEACH</h3>
            <div class="card-body">
                <p>
                    Our beach bar and snack restaurant are at your service all day long for you to spend all day on our private fine sandy beach that gradually deepens.
                </p><br><br>
                <p>The facility is approximately 400 meters from the beach and we have a free shuttle service to the beach.
                </p><br><br>
                <p>The sun loungers and umbrellas are free of charge in the pool and beach area.</p>
            </div>
        </div>

        <div class="fixedimg2" style="background-image:url('../images/home/57.jpg') ;">
        </div>
        <div class="rcontainer">
            <h3>POOL</h3>
            <div class="card-body">
                <p>
                    It has been carefully designed for you or your children to have a good time in a large slide complex.
                </p><br>
                <p>
                    It includes a Children's Slide Pool and many slides that appeal to adults as well as children.
                </p><br>
                <p>While our Dream World Palace facility turns it into an indispensable dream for families with children, it also offers a child-free pool pleasure for adults with its +18-year-old pool.</p>
                <br>
                <div class="propertySub">• Aqua park operates between April 15 and October 15.
                    These dates may change depending on the weather conditions.
                </div>
            </div>
        </div>

        <div class="fixedimg2" style="background-image:url('../images/home/54.jpg') ;">
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3>MORE</h3>
            <div class="gallery-container" id="animated-thumbnails-gallery">
                <?php for ($i = 57; $i <= 59; $i++) { ?>
                    <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/<?php echo $i ?>.jpg">
                        <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                    </a>
                <?php } ?>
                <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/10.jpg">
                    <img class="img-responsive" src="../images/galeri/10.jpg" />
                </a>
                <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/12.jpg">
                    <img class="img-responsive" src="../images/galeri/12.jpg" />
                </a>
                <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/30.jpg">
                    <img class="img-responsive" src="../images/galeri/30.jpg" />
                </a>
                <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/34.jpg">
                    <img class="img-responsive" src="../images/galeri/34.jpg" />
                </a>
                <?php for ($i = 41; $i <= 53; $i++) { ?>
                    <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="../images/galeri/<?php echo $i ?>.jpg">
                        <img class="img-responsive" src="../images/galeri/<?php echo $i ?>.jpg" />
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include 'en/inc/footer.php' ?>
    <script src="../js/script.js"></script>
    <!-- lightbox JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/lightgallery.umd.js"></script>
    <script src="../js/lg-zoom.umd.js"></script>
    <script src="../js/jquery.justifiedGallery.js"></script>
    <script src="../js/lg-thumbnail.umd.js"></script>
    <script>
        jQuery("#animated-thumbnails-gallery")
            .justifiedGallery({
                captions: false,
                lastRow: "hide",
                rowHeight: 180,
                margins: 5
            })
            .on("jg.complete", function() {
                window.lightGallery(
                    document.getElementById("animated-thumbnails-gallery"), {
                        autoplayFirstVideo: false,
                        pager: false,
                        galleryId: "nature",
                        plugins: [lgZoom, lgThumbnail],
                        // mobileSettings: {
                        //     controls: false,
                        //     showCloseIcon: false,
                        //     download: false,
                        //     rotate: false
                        // }
                    }
                );
            });
    </script>
    </body>

</html>