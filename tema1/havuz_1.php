<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($seoData->title))echo $seoData->title?></title>
    <link rel="apple-touch-icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname)) echo $dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname))echo $dataHOTEL->icon->iconname?>" />
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
    <link rel="alternate" hreflang="tr" href="<?php if(isset($dataHOTEL->website)) echo $dataHOTEL->website?>" />
     <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="<?=$dataHOTEL->website?>/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        }
    ?> 
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/lightgallery.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/justifiedGallery.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/lg-thumbnail.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/sub-style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <style>
        .swiper {
            width: 100%;
            height: 375px;
            box-sizing: border-box;
        }
    </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[0]->imgName)) echo $newArrayImg[0]->imgName?>')"></div>
    </section>
    <section>
    <?php 
            $num=1;
            $pageContents=$activePage->content;
            array_pop($pageContents);
            foreach($pageContents as $content){ 
                $randIMG2=rand(0,$randIMG);
                ?>
        <div class="rcontainer">
            <?=$content->content?>
        </div>

        <div class="fixedimg2" style="background-image:url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>"></div>
        <?php $num++; } ?>
       
        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3><?=((end($activePage->content))->content)?></h3>
            <div class="gallery-container" id="animated-thumbnails-gallery">
                <?php foreach ($newArrayImg as $k=>$img) { ?>
                    <a data-lg-size="1600-1144" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide 4" class="gallery-item" data-src="<?=$apiURL?>/img/<?=$img->imgName?>">
                        <img class="img-responsive" src="<?=$apiURL?>/img/<?=$img->imgName?>" alt="<?=$seoData->imagetag?>" />
                    </a>
                <?php } ?>
               
            </div>
        </div>
    </section>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <!-- lightbox JS -->
    <script src="<?=$dataHOTEL->website?>/tema1/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema1/js/lightgallery.umd.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema1/js/lg-zoom.umd.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema1/js/jquery.justifiedGallery.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema1/js/lg-thumbnail.umd.js"></script>
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
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
    </body>

</html>