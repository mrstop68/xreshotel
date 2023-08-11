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
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/fonts.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/swiper-slide.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/glide.core.min.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema3/css/aos.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <?php include "inc/header.php" ?>
    <section>
        <!-- Swiper -->
        <div class="swiper mySwiper swiperroom">
        <?php $activeSliderImg=array_filter($dataIMG, array(new ImagesData, 'isSlider'));?>
            <div class="swiper-wrapper">
            <?php foreach($activeSliderImg as $sliderImg){ ?>
                <div class="swiper-slide" style="background-image: url('<?=$imagesLink?><?=$sliderImg->imgName?>'); background-position: center;background-size: cover;"><span><?=$dataHOTEL->name?></span> </div>
            <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="corpare">
            <div class="ccontainer">
                <div class="ccontent" data-aos="fade-down">
                    <div class="cheader"></div>
                    <div class="cbody shodow1" style="min-height:450px;background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[0]->imgName)) echo $newArrayImg[0]->imgName?>')"></div>
                </div>
                <div class="ccontent shodow2" data-aos="fade-up">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?> 
                       <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up">
        <!-- Swiper -->
        <div class="ccontent">
            <div class="cheader">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){?> 
                       <?=$content->content?>
                    <?php } ?>
            </div>
        </div>
        <div class="swiper mySwiper2" style="height: 500px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-color: #ac926c;">
                    <div style="border: 3px solid #eee;padding: 20px;" class="accomodation">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){?>
                        <?=$content->content?>
                    <?php } ?>
                    </div>
                    <h6 class="scrollroom"> >></h6>
                </div>

                <?php $num=1; $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent')); $num=1;?>
                    <?php  foreach($filtergroupcontent as $content){?>
                <div class="swiper-slide">
                    <img src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"/>
                </div>
                <div class="swiper-slide" style="background-color: #ac926c;">
                    <div style="border: 3px solid #eee;padding: 20px;" class="accomodation">
                        <?=$content->content?>
                    </div>
                    <h6 class="scrollroom"> >> </h6>
                </div>
                <?php $num++; } ?>
            </div>
            <div class="swiper-button-next2"></div>
            <div class="swiper-button-prev2"></div>
            <div class="swiper-scrollbar"></div>
            <!-- <div class="swiper-pagination2"></div> -->
        </div>
    </section>
    <div class="space80"></div>
    <section data-aos="fade-up">
        <div class="wrapperContent">
            <div class="dcontent">
                <div class="dheader">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('5'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                        <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('6'), 'groupNumberinContent'));
            usort($filtergroupcontent,function($first,$second){
                return $first->order - $second->order;
            });
            ?>
            <?php  if(isset($filtergroupcontent[0])){ ?>
                    <div class="glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides" id="options-type">
                            <?php  foreach($filtergroupcontent as $content){ ?>
                                <li id="options-type-select" class="glide__slide" style="background-image:linear-gradient(rgba(41, 41, 41, 0.1),rgba(0, 0, 0, 0.6)), url('<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>');">
                                    <span class="experience"><?=$content->content?></span>
                                </li>
                            <?php $num++; } ?>
                        </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Geri</button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">İleri</button>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </section>
    <div class="space80"></div>
    <section data-aos="fade-up">
        <div class="rcontainer">
            <div class="rheader">
                <div class="cheader">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('7'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                        <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
            <div class="rbody">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('8'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?>
                <div class="rcontent" data-aos="fade-up">
                    <?=$content->content?>
                    <br>
                    <div class="restourantImg"><img src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"></div>
                </div>
            <?php $num++; } ?>    
            </div>
        </div>
    </section>
    
    <div class="space80"></div>
    <?php include 'global_html.php' ?>
    <?php include "inc/footer.php" ?>
    <!-- Swiper JS -->
    <script src="<?=$dataHOTEL->website?>/tema3/js/swiper-bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema3/js/glide.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema3/js/script-slide.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema3/js/aos.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            duration: 1000,
            mirror: false,
        });
    </script>
    <script src="<?=$dataHOTEL->website?>/tema3/js/script.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>