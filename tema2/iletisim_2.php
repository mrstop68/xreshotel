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
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <style>
      .contact .info-item {
          min-height: 100%;
      }
    </style>
    <?php include 'inc/header.php' ?> 
    
        <div class="img-top" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>') ;"></div>
        
      <section id="contact" class="contact pt-2">
      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));
            $filtergroupcontent = array_values($filtergroupcontent);//array_values dizi elamanlarını sıfır index numarasından başlatarak tekrar yineler
            ?>
              <h3 class="bi bi-map"> <?=$filtergroupcontent[0]->content?></h3>
              <h6><?=$seoData->adress?></h6>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));
            $filtergroupcontent = array_values($filtergroupcontent);
            ?>
                <h3 class="bi bi-envelope"> <?=$filtergroupcontent[0]->content?></h3>
              <h6><a href="mailto:<?=$dataHOTEL->seoinfo->email?>"><?=$dataHOTEL->seoinfo->email?></h6></a>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));
            $filtergroupcontent = array_values($filtergroupcontent);
            ?>
              <h3 class="bi bi-telephone"> <?=$filtergroupcontent[0]->content?></h3>
              <h6><a href="tel:<?=$dataHOTEL->seoinfo->phone1?>"><?=$dataHOTEL->seoinfo->phone1?></h6></a>

              <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent'));
            $filtergroupcontent = array_values($filtergroupcontent);
            ?>
              <p> <?=$filtergroupcontent[0]->content?></p>
              <h6><a href="tel:<?=$dataHOTEL->seoinfo->phone2?>"><?=$dataHOTEL->seoinfo->phone2?></h6></a>

              <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('5'), 'groupNumberinContent'));?>
              <?php foreach($filtergroupcontent as $content){ ?>
              <p><?=$content->content?></p>
              <?php  } ?>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-12 ">
            <iframe src="<?php if(isset($dataHOTEL->seoinfo->maps)){echo $dataHOTEL->seoinfo->maps;}?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
          </div>
    </section>

    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    
    <script src="<?=$dataHOTEL->website?>/tema2/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/script.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>

    </body>

</html>