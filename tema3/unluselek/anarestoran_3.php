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
    <!-- <link rel="stylesheet" href="css/glide.core.min.css"> -->
    <link rel="stylesheet" href="/tema3/css/fonts.css">
    <link rel="stylesheet" href="/tema3/css/style.css">
    <link rel="stylesheet" href="/tema3/css/sub-style.css">
    <link rel="stylesheet" href="/tema3/css/aos.css" />
    <link rel="stylesheet" href="/global_style.css">
    <style>
        .swiper {
            width: 100%;
            height: 350px;
            box-sizing: border-box;
        }
    </style>

    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <section style="margin-top: 120px;">
        <div class="rcontainer" data-aos="fade-down">
            <div class="acontent">
                <div class="aheader">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent')); $num=0; ?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>
                    <div class="aimg" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>'); "></div>
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
            <div style="margin: 40px 0px;"></div>

            <div style="margin: 40px 0px;"></div>

        </div>
    </section>
    <section>
        <div class="horizontalcontainer">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));?>
            <?php  foreach($filtergroupcontent as $content) { ?>
            <div class="horizontalcontent" data-aos="fade-up">
                <div class="horizontalimg"><img src="<?=$imagesLink?><?php $num++; if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"> </div>
                <div class="horizontalbody">
                    <?=$content->content?>
                </div>
            </div>
            <?php  } ?>
        </div>
    </section>
    <section style="margin-top: 120px;">
        <div class="rcontainer" data-aos="fade-up">
            <div class="acontent">
                <div class="aheader">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>
                    <div class="aimg" style="background-image:url('<?=$imagesLink?><?php $num++; if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>'); "></div>
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('5'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                       <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
            <div style="margin: 40px 0px;"></div>
        </div>
    </section>
    <section>
        <div class="horizontalcontainer">
        <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('6'), 'groupNumberinContent'));?>
            <?php  foreach($filtergroupcontent as $content) { ?>
            <div class="horizontalcontent" data-aos="fade-up">
                <div class="horizontalimg"><img src="<?=$imagesLink?><?php $num++; if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"> </div>
                <div class="horizontalbody">
                    <?=$content->content?>
                </div>
            </div>
            <?php  } ?>
        </div>
       
    </section>
    <!-- ************************************************************************************ -->
    <div style="margin: 70px 0px;"></div>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <script src="/tema3/js/swiper-bundle.min.js"></script>
    <!-- <script src="js/glide.min.js"></script> -->
    <script src="/tema3/js/aos.js"></script>
    <script src="/tema3/js/script.js"></script>
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
                nextEl: ".swiper-button-nextr1",
                prevEl: ".swiper-button-prevr1",
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
                nextEl: ".swiper-button-nextr1",
                prevEl: ".swiper-button-prevr1",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
     <?php include 'widget.php' ?>
    <script src="/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>