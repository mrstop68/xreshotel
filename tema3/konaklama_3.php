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
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="<?=$dataHOTEL->website?>/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        }
    ?> 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/swiper-slide.css">
    <!-- <link rel="stylesheet" href="css/glide.core.min.css"> -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/fonts.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/sub-style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/aos.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <style>
    .swiper {
            width: 100%;
            height: 350px;
            box-sizing: border-box;
            margin-top: 40px;
        }
    </style>

    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->

    <section style="margin-top: 120px;">
        <div class="rcontainer">
            <div class="acontent" data-aos="fade-down">
                <div class="aheader">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>
                    <div class="aimg" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[0]->imgName)) echo $newArrayImg[0]->imgName?>'); "></div>
                    <div class="atext">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>    
                    </div>
            </div>
            <div style="margin: 40px 0px;"></div>
            <div class="rbody">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));?>
                <?php $num=0;  foreach($filtergroupcontent as $content) { ?>
                <div class="rcontent" data-aos="fade-up">
                    <!-- <h3>Standart Oda</h3> -->
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom1">
                        <div class="swiper-wrapper">
                        <?php  if (isset($content->showpicturenumber))
                                {$picnumber=$content->showpicturenumber+$num;}
                                else {$picnumber=1+$num; }
                            while ( $num < $picnumber ) { ?>
                            <div class="swiper-slide">
                                <img alt="<?=$seoData->imagetag?>" src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" />
                            </div>
                            <?php $num++; } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <?=$content->content?>
                    
                </div>
                <?php  } ?>
                
            </div>
            <div style="margin: 40px 0px;"></div>
            
        
        </div>
    </section>
    <!-- ************************************************************************************ -->
    <div style="margin: 40px 0px;"></div>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <script src="<?=$dataHOTEL->website?>/tema3/js/swiper-bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema3/js/aos.js"></script>
    <!-- <script src="js/glide.min.js"></script> -->
    <script src="<?=$dataHOTEL->website?>/tema3/js/script.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            // delay:5000,
            duration: 800,
            mirror: false,
        });
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
        });
    </script>
     <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>