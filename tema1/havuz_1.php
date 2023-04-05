<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php if(isset($dataCODES->gtm)) echo $dataCODES->gtm?>');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($dataHOTEL->seoinfo->title))?></title>
    <link rel="apple-touch-icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname)) echo $dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname))echo $dataHOTEL->icon->iconname?>" />
    <meta name="description" content="<?php if(isset($dataHOTEL->seoinfo->description))echo $dataHOTEL->seoinfo->description?>" />
    <meta property="og:site_name" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="classification" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
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
                        <img class="img-responsive" src="<?=$apiURL?>/img/<?=$img->imgName?>" alt="<?=$dataHOTEL->logo->logodescription?>" />
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
    </body>

</html>