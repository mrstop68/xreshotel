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
    <meta property="og:url" content="<?=$dataHOTEL->website?>"/>
    <meta property="og:title" content="<?php if(isset($seoData->title))echo $seoData->title?>" />
    <meta property="og:description" content="<?php if(isset($seoData->description))echo $seoData->description?>" />
    <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo strtolower($dataHOTEL->LangCode); } else {echo strtolower($data->LangCode);} ?>" href="<?=$dataHOTEL->website?>/<?php if( $data->LangCode=='mainlang' ){echo strtolower($dataHOTEL->LangCode); } else {echo strtolower($data->LangCode);}?>/" />
            <?php
        }
    ?> 
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/swiper-slide.css">

    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/sub-style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <style>
        .swiper {
            width: 100%;
            height: 360px;
            box-sizing: border-box;
        }

    </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>'">
        </div>
    </section>
    <section>
        <div class="rcontainer">
        <!-- <h3><?=$activePage->pagename?></h3> -->
            <?php foreach($activePage->content as $content){ ?>
            <?=$content->content?>
            <?php  }  ?>
        </div>
    </section>
    <?php include 'inc/footer.php' ?>
    <?php include 'global_html.php' ?>
    <?php include 'widget.php' ?>
    <style>
        .menu-btn .menu {
            display: block;
            width: 100%;
            height: 2px;
            border-radius: 2px;
            background: #111;
        }
    </style>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script src="<?=$dataHOTEL->website?>/tema1/js/swiper-bundle.min.js"></script> 
    <script>
           var swiper = new Swiper(".mySwiperroom1", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
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
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
        var swiper = new Swiper(".mySwiperroom2", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
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
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
    </script>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
    </body>
</html>