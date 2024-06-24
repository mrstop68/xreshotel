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
     <?php  foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        } ?> 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/tema3/css/style.css">
    <link rel="stylesheet" href="/tema3/css/sub-style.css">
    <link rel="stylesheet" href="/global_style.css">
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <!-- Swiper -->
    <section style="margin-top:120px">
        <div>
            <div class="acontent" data-aos="fade-down">
                <div class="aheader">
                    <h2>
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?> 
                       <?=$content->content?>
                    <?php } ?>
                    </h2>
                </div>
            </div>
            <div class="aimg" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[0]->imgName)) echo $newArrayImg[0]->imgName?>') "></div>
            <div class="contactcontainer" >
                <div class="contactbody">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?> 
                       <?=$content->content?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ************************************************************************************ -->
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <script src="/tema3/js/script.js"></script>
    <?php include 'widget.php' ?>
    <script src="/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>