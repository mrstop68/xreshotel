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
        <div class="img-top" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>')">

        </div>
    </section>
    <section>
        <div class="rcontainer">
            <h3><?=$activePage->pagename?></h3><br><br>
            <div class="contactContent">
                <div class="contacttBody contact-detail">
                    <ul>
                        <?php 
                         //aşağıda array_filter ile content dizisini grup numarasına göre süzüyoruz
                        $group1=array_filter($activePage->content,function($data){
                            return $data->sectionGroup==1;
                        });
                        foreach($group1 as $content){
                        ?>
                        <li><?=$content->content?><span><?=$seoData->adress?></span></li>
                        <?php } ?>
                        <?php $group2=array_filter($activePage->content,function($data){
                            return $data->sectionGroup==2;
                        });
                        foreach($group2 as $content){
                        ?>
                        <li><?=$content->content?><?php if($dataHOTEL->seoinfo->phone1){ ?><a  id="phonecontact" href="tel:<?=$dataHOTEL->seoinfo->phone1?>"><span><?=$dataHOTEL->seoinfo->phone1?></span></a><?php } ?></li>
                        <?php } ?>
                        <?php $group3=array_filter($activePage->content,function($data){
                            return $data->sectionGroup==3;
                        });
                        foreach($group3 as $content){
                        ?>
                        <li><?=$content->content?><?php if($dataHOTEL->seoinfo->phone2){ ?><a  id="phonecontact" href="tel:<?=$dataHOTEL->seoinfo->phone2?>"><span><?=$dataHOTEL->seoinfo->phone2?></span></a><?php } ?></li>
                        <?php } ?>
                        <?php $group4=array_filter($activePage->content,function($data){
                            return $data->sectionGroup==4;
                        });
                        foreach($group4 as $content){
                        ?>
                        <li><?=$content->content?><?php if($dataHOTEL->seoinfo->email){ ?><a  id="phonecontact" href="mailto:<?=$dataHOTEL->seoinfo->email?>"><span><?=$dataHOTEL->seoinfo->email?></span></a><?php } ?></li>
                        <?php } ?>
                    </ul>
                    <hr>
                    <?php $group5=array_filter($activePage->content,function($data){
                            return $data->sectionGroup==5;
                        });
                        foreach($group5 as $content){
                        ?>
                    <?=$content->content ?>
                    <?php } ?>
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