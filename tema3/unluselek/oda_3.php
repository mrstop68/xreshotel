<?php include 'code.php' ?>
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
    <meta property="og:url" content="/"/>
    <meta property="og:title" content="<?php if(isset($seoData->title))echo $seoData->title?>" />
    <meta property="og:description" content="<?php if(isset($seoData->description))echo $seoData->description?>" />
     <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        }
    ?> 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/tema3/css/swiper-slide.css">
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
    <link rel="stylesheet" href="/tema3/css/fonts.css">
    <link rel="stylesheet" href="/tema3/css/style.css">
    <link rel="stylesheet" href="/tema3/css/sub-style.css">
    <link rel="stylesheet" href="/tema3/css/aos.css" />
    <link rel="stylesheet" href="/tema3/css/lightgallery.css">
    <link rel="stylesheet" href="/global_style.css">
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <!-- Swiper -->
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
           
            <?php foreach($newArrayImg as $sliderImg){ ?>
                <div class="swiper-slide" style="background-image:linear-gradient(to top,rgba(0,0,0,0.5),rgba(0,0,0,0)), url('<?=$imagesLink?><?=$sliderImg->imgName?>'); background-position: center;background-size: cover;"></div>
            <?php } ?>
                <span class="roomName">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?> 
                       <?=$content->content?>
                    <?php } ?>
                </span>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section>
        <div class="roomdetail" data-aos="fade-up">
            <?php $num=0; $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
            <?php  foreach($filtergroupcontent as $content){?> 
                <div class="detailcontent">
                    <div class="sub-body detailleft">
                       <?=$content->content?>
                    </div>
                    <div class="sub-body detailrigt">
                        <div><img src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) {echo $newArrayImg[$num]->imgName;}?>" alt="<?=$seoData->imagetag?>"></div>
                            <?php if (isset($content->showpicturenumber))
                            {$picnumber=$content->showpicturenumber+$num;}
                            else {$picnumber=1+$num; }
                            while ( $num < $picnumber ) { ?>
                            <?php $num++; } ?>
                        </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section>
        <div class="wifi" data-aos="fade-up">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));?>
            <?php  foreach($filtergroupcontent as $content){?> 
                <?=$content->content?>
            <?php } ?>
        </div>
    </section>
    <section class="multiple-gallery" data-aos="fade-up">
        <div class="lightgallery">
            <h2>
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent'));?>
            <?php  foreach($filtergroupcontent as $content){?> 
                <?=$content->content?>
            <?php } ?>
            </h2>
        </div>
        <div class="cont">
            <div class="demo-gallery">
                <ul id="lightgallery">
                <?php foreach($newArrayImg as $sliderImg){ ?>
                    <li data-src="<?=$imagesLink?><?=$sliderImg->imgName?>" data-sub-html="<h4></h4><p></p>">
                        <a href="">
                            <img class="img-responsive" src="<?=$imagesLink?><?=$sliderImg->imgName?>" />
                            <div class="demo-gallery-poster">
                                <img src="/tema3/images/zoom.png" />
                            </div>
                        </a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </section>
    <!-- ************************************************************************************ -->
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <script src="/tema3/js/swiper-bundle.min.js"></script>
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
    <script src="/tema3/js/aos.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            // delay:5000,
            duration: 800,
            mirror: false,
        });
    </script>
    <script src="/tema3/js/script.js"></script>
    <script src="/tema3/js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
     <?php include 'widget.php' ?>
    <script src="/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>