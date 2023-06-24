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
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/swiper-bundle.css" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <?php include 'inc/header.php' ?>

    <style>
      .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }
      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 500px;
      }
      .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      }
    </style>
    <!-- Slider -->
    <div
      id="carouselControls"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner" >
          <?php
            $n=0;
            foreach($dataIMG as $k=>$img){
              if($img->slider==true) {?><div class="carousel-item <?php if($n==0) echo 'active'; $n++ ?>">
              <img src="<?=$imagesLink?><?=$img->imgName?>" class="d-block" alt="<?=$seoData->imagetag?>" /></div><?php }
            }
            ?>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Slider End -->

    <!-- First Section -->
    <section id="main-hotel" class="text-bg-light bg">
      <div
        class="container-md text-center min-vh-50 align-items-center justify-content-center d-flex px-5"
      >
        <div class="row position-relative">
          <div class="col-12">
            <img src="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>"/>
          </div>
          <div
            class="col-sm-7 justify-content-center mx-auto flex-column d-flex pt-2"
            style="z-index: 1"
          ><br>
          <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
          <?php  foreach($filtergroupcontent as $content){?>
            <p>
              <?=$content->content?>
            </p> <?php    } ?>
            <p></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Swiper Section -->
    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
    <?php 
            $num=0;
            foreach($filtergroupcontent as $content){ ?>
      <section id="main-swiper" class="text-bg-light bg" style= "background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>); background-size: cover;background-position: center;">
        <div class="container">
          <div class="row text-white py-5">
            <div class="col-md-6" style="overflow: hidden; position: relative">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php 
                  if (isset($content->showpicturenumber))
                      {$picnumber=$content->showpicturenumber+$num;}
                      else {$picnumber=1+$num; }
                  while ( $num < $picnumber ) { ?>
                  <div class="swiper-slide">
                    <img src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"/>
                  </div>
                  <?php $num++; } ?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-md-6 p-sm-5 m-auto text-center">
              <p>
              <?=$content->content?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
      </p> <?php    } ?>
    
    <!-- Room Section -->
    <section class="text-bg-light bg">
    <div class="container ">
    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));
      foreach($filtergroupcontent as $content){?>
      <p><?=$content->content?></p> 
    <?php } ?>
        <div class="row justifyContent">
        <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent'));
         foreach($filtergroupcontent as $content){?>
          <div class="col-sm-4 mt-2">
            <div class="card card text-center" style="background-image: url(<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>); background-size: cover;background-position: center;">
              <div class="title">
              <?=$content->content?>
              </div>
            </div>
          </div>
          <?php $num++; } ?>
        </div>
      </div>
 
    </section>
  <!-- Room Section -->

      <!-- Tab Section -->
    <section id="features" class="features section-bg-light text-bg-light bg">
      <div class="container">

        <ul class="nav nav-tabs">
        <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('5'), 'groupNumberinContent'));
        $tabNumber=1;
         foreach($filtergroupcontent as $content){ ?>
          <li class="nav-item col-3">
            <a class="nav-link <?php if($tabNumber==1)echo 'active show'?>" data-bs-toggle="tab" data-bs-target="#tab-<?=$tabNumber?>">
              <h4><?=$content->content?></h4>
            </a>
          </li>
          <!-- End tab nav item -->
          <?php $tabNumber++; } ?>
        </ul>
        <div class="tab-content">
        <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('6'), 'groupNumberinContent'));
        $tabNumber=1;
         foreach($filtergroupcontent as $content){ ?>
          <div class="tab-pane <?php if($tabNumber==1)echo 'active show'?>" id="tab-<?=$tabNumber?>">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" >
                <?=$content->content?>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" >
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                  <?php 
                  if (isset($content->showpicturenumber))
                      {$picnumber=$content->showpicturenumber+$num;}
                      else {$picnumber=1+$num; }
                  while ( $num < $picnumber ) { ?>
                  <div class="swiper-slide">
                    <img src="<?=$imagesLink?><?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" alt="<?=$seoData->imagetag?>"/>
                  </div>
                  <?php $num++; } ?>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div><!-- End tab content item -->
          <?php $tabNumber++; } ?>
        
        </div>
      </div>
    </section>
    <!-- End Tab Section -->

<!-- mid-content -->
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
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
  </body>

</html>