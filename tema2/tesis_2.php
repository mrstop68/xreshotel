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
        height: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        height: 80%;
        width: 100%;
      }

      .mySwiper {
        height: 15%;
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      @media screen and (min-width: 992px) {
        .rcontainer:nth-child(odd) .rbody:nth-child(1){
          order:1
        }
      }
      @media screen and (max-width: 991px) {
        .rcontainer .rbody:nth-child(1){
          order:1
        }
      }

</style>
    <?php include 'inc/header.php' ?> 
    
    <div class="img-top" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>') ;"></div>

<?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
<?php 
$num=0;
$subnum=0;
$bigSliderNunber=11;
$thumbSliderNunber=10;
foreach($filtergroupcontent as $content){ ?>
<section class="rcontainer">
<div class="container" data-aos="fade-up">
<div class="row position-relative">

  <div class="col-lg-6 rbody">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 mySwiper<?=$bigSliderNunber?>">
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
        </div>
        <div thumbsSlider="" class="swiper mySwiper mySwiper<?=$thumbSliderNunber?>">
          <div class="swiper-wrapper">

          <?php 
          
          if (isset($content->showpicturenumber))
              {$picnumber=$content->showpicturenumber+$subnum;}
              else {$picnumber=1+$subnum; }
          while ( $subnum < $picnumber ) { ?>
                <div class="swiper-slide">
                    <img class="cursorPointer" alt="<?=$seoData->imagetag?>" src="<?=$imagesLink?><?php if(isset($newArrayImg[$subnum]->imgName)) echo $newArrayImg[$subnum]->imgName?>" />
                </div>
                <?php $subnum++; } ?>
          </div>
        </div>
  </div>
  <div class="col-lg-6 text-center rbody" id="activities">
    <?=$content->content?><br>
  </div>
</div>
</div>
</section>
<?php $swiperNum++; $bigSliderNunber+=2; $thumbSliderNunber+=2; } ?>

      <section>
          <div class="tcontainer">
            <div class="tesisbody">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));
                foreach($filtergroupcontent as $content){ ?>
                <div class="tcontent">
                    <div class="roomPropertySub facilityline">
                      <?=$content->content?>
                    </div>
                </div>
                <?php $n++; } ?>
            </div>
        </div>
        <div class="tcontainer">
                <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));
                foreach($filtergroupcontent as $content){ ?>
                 <br><br>
                <p><?=$content->content?></p>
                <br><br>
                <?php $n++; } ?>
            </div>
    </section>
<input type="text" name="swipernumber" value="<?=$swiperNum?>" id="swipernumber" hidden>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    
    <script src="<?=$dataHOTEL->website?>/tema2/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/script.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/swiper-bundle.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
    <script>
       document.onreadystatechange = () => {
        let j=11;
      if (document.readyState === 'complete') {
        var swipernumber=parseInt(document.querySelector('#swipernumber').value)*2+10
        // console.log((swipernumber))
        // console.log(typeof swipernumber)
        
        for(let i = 10; i <= swipernumber; i+=2){
        var swiper = new Swiper(".mySwiper"+i, {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        
      });
      
      var swiper2 = new Swiper(".mySwiper"+j, {
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
        thumbs: {
          swiper: swiper,
        },
      });
      j+=2;
      }
      }
      };
    </script>
    </body>

</html>