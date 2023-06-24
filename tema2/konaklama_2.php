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
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/style.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/sub.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/swiper-bundle.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
<style>
    .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 19px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        cursor:grab;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper {
        margin-left: auto;
        margin-right: auto;
      }
      @media screen and (min-width: 992px) {
        .rcontainer:nth-child(odd) .rbody:nth-child(1){
          order:1
        }
      }
</style>
    <?php include 'inc/header.php' ?> 
    
    <div class="img-top" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>') ;"></div>
        
    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
    <section>
        <?php foreach($filtergroupcontent as $content){ ?>
          <div class="container col-lg-12  text-center">
            <?=$content->content?>
          </div>
        <?php } ?>
    </section>
     
    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
    <?php 
        $num=0;
        foreach($filtergroupcontent as $content){ ?>
    <section class="rcontainer section-bg text-bg-light bg">
      <div class="container">
        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column rbody">
          <?=$content->content?>
          </div>

          <div class="col-lg-6 rbody">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
              <?php 
                  if (isset($content->showpicturenumber))
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
          </div>

        </div>
      </div>
    </section>
    <?php } ?>

    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));?>
    <section>
        <?php foreach($filtergroupcontent as $content){ ?>
          <div class="container col-lg-12">
            <?=$content->content?>
          </div>
        <?php } ?>
    </section>

    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    
    <script src="<?=$dataHOTEL->website?>/tema2/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/script.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/swiper-bundle.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    </body>

</html>