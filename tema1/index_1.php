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
    <title><?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?></title>
    <link rel="apple-touch-icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname)) echo $dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname))echo $dataHOTEL->icon->iconname?>" />
    <meta name="description" content="<?php if(isset($dataHOTEL->seoinfo->description))echo $dataHOTEL->seoinfo->description?>" />
    <meta property="og:site_name" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="classification" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="https://www.resclick.com/" />
    <meta property="og:title" content="ResClick Theme | ANTALYA" />
    <meta property="og:description" content="ResClick Theme" />
    <link rel="alternate" hreflang="tr" href="https://www.resclick.com/" />
    <link rel="alternate" hreflang="en" href="https://www.resclick.com/en/" />
    <link rel="alternate" hreflang="de" href="https://www.resclick.com/de/" />
    <link rel="alternate" hreflang="ru" href="https://www.resclick.com/ru/" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/fonts.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/swiper-slide.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <?php include 'inc/header.php' ?>

    <section>
        <!-- Swiper -->
        <div class="swiper mySwiper swiperroom">
            <div class="swiper-wrapper">
                <?php
                foreach($dataIMG as $k=>$img){
                        // if( $img->slider ) {echo  '<div class="swiper-slide" style="background-image: url('.$apiURL.'//img/'.$img->imgName.'); background-position: center;background-size: cover;"></div>';}
                        if($img->slider === true) {?><div class="swiper-slide" style="background-image: url('<?=$apiURL?>/img/<?=$img->imgName?>'); background-position: center;background-size: cover;"></div> <?php }
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
            <?php
                $num=0;
                        foreach($activePage->content as $content){
                ?>
                    <section>
                    <div class="wrapper">
                        <div class="back-img" style="background-image: url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>')">
                            <div class="containerr">
                                <div class="contentt">
                                    <?php if($num%2!=0) { echo '<div class="bodyy bodyLeft">'.$content->content.'</div>'; } else { echo '<div class="bodyy"></div>'; }  ?>
                                    <?php if($num%2==0) { echo '<div class="bodyy bodyRight">'.$content->content.'</div>'; } else { echo '<div class="bodyy"></div>'; }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php (count($filtered_img)); if(($num)==3){break;};$num++; } ?>
    
        <?php 
        $contentNumber= (count($activePage->content));
        array_splice($activePage->content,0,4);
        if($contentNumber>=5){        
        ?>
        <section>
            <div class="wrapperContainer">
            <?php $num++;
                //aşağıdaki satırda content dizisindeki içeriklerden ilk dördünü çıkarıyoruz.
                
                    foreach($activePage->content as $content){
                ?>
                    <div class="wcontent"><img src="<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$dataHOTEL->logo->logodescription?>">
                            <div class="wbody">
                                <h3><?=$content->content?></h3>
                            </div>
                    </div>
                    <?php if(($num)==7){break;};$num++; } ?>
                </div>
    </section>
    <?php } ?>
    <?php 
        $contentNumber2= (count($activePage->content));
        if($contentNumber2>=4){        
        ?>
    <section>
    <?php $num++;
                //aşağıdaki satırda content dizisindeki içeriklerden ilk 8(önceden 4 çıkarılmıştı) çıkarıyoruz.
                array_splice($activePage->content,0,4);
                    foreach($activePage->content as $content){
                ?>
        <div class="wrapper">
            <div class="back-img" style="background-image: url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>');">
                <div class="containerr">
                    <div class="contentt">
                    <?php if($num%2==0) { echo '<div class="bodyy bodyLeft">'.$content->content.'</div>'; } else { echo '<div class="bodyy"></div>'; }  ?>
                    <?php if($num%2!=0) { echo '<div class="bodyy bodyRight">'.$content->content.'</div>'; } else { echo '<div class="bodyy"></div>'; }  ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $num++; } ?>
    </section>
    <?php } ?>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script src="<?=$dataHOTEL->website?>/tema1/js/swiper-bundle.min.js"></script>
    <script>
        // homepage first slider 
        var swiper = new Swiper(".mySwiper", {
            // spaceBetween: 15,
            // centeredSlides: true,
            loop: true,
            grabCursor: true,
            speed: 1200,
            // effect: "creative",
            // creativeEffect: {
                //     prev: {
            //         shadow: true,
            //         translate: [0, 0, -400],
            //     },
            //     next: {
            //         translate: ["100%", 0, 0],
            //     },
            // },
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
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            // cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //mousewheel: true,
            keyboard: true,
        });
        </script>
         <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
         <?php include 'geoip.php' ?>
    </body>

</html>