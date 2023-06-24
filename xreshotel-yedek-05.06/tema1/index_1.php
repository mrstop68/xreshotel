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
     <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo strtolower($dataHOTEL->LangCode); } else {echo strtolower($data->LangCode);} ?>" href="<?=$dataHOTEL->website?>/<?php if( $data->LangCode=='mainlang' ){echo strtolower($dataHOTEL->LangCode); } else {echo strtolower($data->LangCode);}?>/" />
            <?php
        }
    ?> 
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
            //aşağıda array_filter ile content dizisini grup numarasına göre süzüyoruz
             $group1=array_filter($activePage->content,function($data){
                return $data->sectionGroup==1;
             });
                $num=0;
                        foreach($group1 as $content){
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
            <?php  $num++;  } ?>
        <section>
            <div class="wrapperContainer">
            <?php 
            //aşağıda array_filter ile content dizisini grup numarasına göre süzüyoruz
            $group2=array_filter($activePage->content,function($data){
                return $data->sectionGroup==2;
             });
                    foreach($group2 as $content){
                ?>
                    <div class="wcontent"><img src="<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>">
                            <div class="wbody">
                                <h3><?=$content->content?></h3>
                            </div>
                    </div>
                    <?php $num++; } ?>
                </div>
    </section>
    <section>
    <?php 
    //aşağıda array_filter ile content dizisini grup numarasına göre süzüyoruz
    $group3=array_filter($activePage->content,function($data){
        return $data->sectionGroup==3;
     });
                    foreach($group3 as $content){
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
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script src="<?=$dataHOTEL->website?>/tema1/js/swiper-bundle.min.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
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
         
         
    </body>

</html>