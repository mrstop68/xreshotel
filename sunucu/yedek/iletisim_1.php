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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/sub-style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>')">

        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3><?=$activePage->pagename?></h3><br><br>
            <div class="contactContent">
                <div class="contacttBody contact-detail">
                    <ul>
                        <li><?php if(isset($activePage->content[0]->content)){echo $activePage->content[0]->content;} ?> <span><?=$seoData->adress?></span></li>
                        <li><?php if(isset($activePage->content[1]->content)){echo $activePage->content[1]->content;} ?> <a  id="phonecontact" href="tel:<?=$dataHOTEL->seoinfo->phone1?>"><span><?=$dataHOTEL->seoinfo->phone1?></span></a></li>
                        <li><?php if(isset($activePage->content[2]->content)){echo $activePage->content[2]->content;} ?> <a id="phonecontact" href="tel:<?=$dataHOTEL->seoinfo->phone2?>"><span ><?=$dataHOTEL->seoinfo->phone2?></span></a></li>
                        <li><?php if(isset($activePage->content[3]->content)){echo $activePage->content[3]->content;} ?> <a href="mailto:<?=$dataHOTEL->seoinfo->email?>"><span><?=$dataHOTEL->seoinfo->email?></span></a></li>
                    </ul>
                    <hr>
                    <?php if(isset($activePage->content[4]->content)){echo $activePage->content[4]->content;} ?>
                </div>
                <div class=" contacttBody">
                <iframe src="<?php if(isset($dataHOTEL->seoinfo->maps)){echo $dataHOTEL->seoinfo->maps;}?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
    </section><br><br>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
    </body>

</html>