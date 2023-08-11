<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($seoData->title))echo $seoData->title?></title>
    <link rel="apple-touch-icon" href="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->icon->iconname)) echo $dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->icon->iconname))echo $dataHOTEL->icon->iconname?>" />
    <meta name="description" content="<?php if(isset($seoData->description))echo $seoData->description?>" />
    <meta property="og:site_name" content="<?php if(isset($seoData->title))echo $seoData->title?>" />
    <meta name="classification" content="<?php if(isset($seoData->title))echo $seoData->title?>" />
    <meta name="abstract" content="Hotel Website" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="ResClick" />
    <meta property="og:site_name" content="<?=$dataHOTEL->name?>" />
    <meta property="og:locale" content="<?php if(isset($seoData->LangCode))echo $seoData->LangCode?>" />
    <meta property="og:url" content="<?=$dataHOTEL->website?>"/>
    <meta property="og:title" content="<?php if(isset($seoData->title))echo $seoData->title?>" />
    <meta property="og:description" content="<?php if(isset($seoData->description))echo $seoData->description?>" />
     <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="<?=$dataHOTEL->website?>/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        }
    ?> 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/lightgallery.css">
</head>

<body>
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <!-- Swiper -->
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.5),rgba(0,0,0,0)), url('images/home/17.webp'); background-position: center;background-size: cover;">
                </div>
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.5),rgba(0,0,0,0)), url('images/home/19.webp'); background-position: center;background-size: cover;">
                </div>
             
                <span class="roomName">Spa & Wellness</span>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section>
        <div class="roomdetail" data-aos="fade-up">
            <div class="detailcontent">
                <div class="sub-body detailleft">
                    <h4>Slogan</h4>
                    <hr class="roomhr">

                    <h2>Spa & Wellness</h2>
                    <p>Porta nibh venenatis cras sed felis eget velit aliquet sagittis. Lacus vel facilisis volutpat est velit. Lorem sed risus ultricies tristique nulla aliquet enim.
                        <br>
                        • Sed adipiscing diam donec adipiscing tristique. Purus ut faucibus pulvinar elementum integer enim neque volutpat.<br>
                        • Sed adipiscing diam donec adipiscing tristique. Purus ut faucibus pulvinar elementum integer enim neque volutpat.<br>
                    </p>
                    <!-- <div class="roomPropertySub">
                        <div class="propertySub">• ........</div>
                    </div> -->
                </div>
                <div class="sub-body detailrigt">
                    <div><img src="images/home/17.webp" alt=""></div>
                </div>
            </div>
            <div class="detailcontent">
                <div class="sub-body detailleft">
                    <h4>Sağlık</h4>
                    <hr class="roomhr">

                    <h2>Spor</h2>

                    <p> Sed adipiscing diam donec adipiscing tristique. <br>
                        • Purus ut faucibus pulvinar elementum integer enim neque volutpat.
                       
                    </p>
                    <!-- <div class="roomPropertySub">
                        <div class="propertySub">• ........</div>
                    </div> -->
                </div>
                <div class="sub-body detailrigt">
                    <div><img src="images/home/18.webp" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="multiple-gallery" data-aos="fade-up">
        <div class="lightgallery">
        <br>
            <h2>
                Spa & Wellness Mini Galeri
            </h2>
        </div>
        <div class="cont">
            <div class="demo-gallery">
                <ul id="lightgallery">

                    <li data-src="images/home/17.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/17.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>
                    <li data-src="images/home/18.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/18.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>

                    <li data-src="images/home/19.webp" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="images/home/19.webp" />
                            <div class="demo-gallery-poster">
                                <img src="images/zoom.png" />
                            </div>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
      
    </section>
    <!-- ************************************************************************************ -->

    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // homepage first slider 
        var swiper = new Swiper(".mySwiper", {
            // spaceBetween: 205,
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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