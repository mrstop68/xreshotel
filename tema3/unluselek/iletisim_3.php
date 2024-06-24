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
     <?php  
        foreach($dataLANG as $data){?>
            <link rel="alternate" hreflang="<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;} ?>" href="/<?php if( $data->LangCode=='mainlang' ){echo $dataHOTEL->LangCode; } else {echo $data->LangCode;}?>/" />
            <?php
        }
    ?> 
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/tema3/css/fonts.css">
    <link rel="stylesheet" href="/tema3/css/style.css">
    <link rel="stylesheet" href="/tema3/css/sub-style.css">
    <link rel="stylesheet" href="/tema3/css/aos.css" />
    <link rel="stylesheet" href="/global_style.css">
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <section style="margin-top:120px">
        <div>
            <div class="acontent" data-aos="fade-down">
                <div class="aheader">
                    <h2><?=$activePage->pagename?></h2>
                </div>
            </div>
            <div class="aimg" style="background-image:url('<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>'); "></div>
            <div class="contactcontainer" data-aos="fade-up">
                <div class="contactbody">
                    <div class="contactinfo">
                    <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('1'), 'groupNumberinContent'));?>
                    <?php  foreach($filtergroupcontent as $content){ ?> 
                       <H6><?=$content->content?></H6>
                    <?php } ?>
                        <ul>
                        <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('2'), 'groupNumberinContent'));
                        $filtergroupcontent = array_values($filtergroupcontent);
                        ?>
                            <?php if($seoData->adress){ ?>
                                <li><img src="/tema3/images/svg/map.svg" alt="<?=$seoData->imagetag?>" width="13"><span><?=$filtergroupcontent[0]->content?> <?=$seoData->adress?></span></li>
                            <?php }?>
                            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('3'), 'groupNumberinContent'));
                        $filtergroupcontent = array_values($filtergroupcontent);
                        ?>
                            <?php if($dataHOTEL->seoinfo->phone1){ ?>
                                <li><img src="/tema3/images/svg/phone.svg" alt="<?=$seoData->imagetag?>" width="13"><a href="tel:<?=$dataHOTEL->seoinfo->phone1?>"><span><?=$filtergroupcontent[0]->content?> <?=$dataHOTEL->seoinfo->phone1?></span></a></li>

                            <?php }?>
                            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('4'), 'groupNumberinContent'));
                        $filtergroupcontent = array_values($filtergroupcontent);
                        ?>
                            <?php if($dataHOTEL->seoinfo->phone2){ ?>
                                <li><img src="/tema3/images/svg/phone.svg" alt="<?=$seoData->imagetag?>" width="13"><a href="tel:<?=$dataHOTEL->seoinfo->phone2?>"><span><?=$filtergroupcontent[0]->content?> <?=$dataHOTEL->seoinfo->phone2?></span></a></li>
                                
                            <?php }?>
                            <?php $filtergroupcontent=array_filter($activePage->content, array(new FilterPagesToLangCode('5'), 'groupNumberinContent'));
                        $filtergroupcontent = array_values($filtergroupcontent);
                        ?>
                            <?php if($dataHOTEL->seoinfo->email){ ?>
                                <li><img src="/tema3/images/svg/envelope.svg" alt="<?=$seoData->imagetag?>" width="13"><a href="mailto:<?=$dataHOTEL->seoinfo->email?>"><span><?=$filtergroupcontent[0]->content?> <?=$dataHOTEL->seoinfo->email?></span> </a></li>
                            
                            <?php }?>
                        </ul>
                    </div>
                    <div class="contactmap">
                    <iframe src="<?php if(isset($dataHOTEL->seoinfo->maps)){echo $dataHOTEL->seoinfo->maps;}?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section>
        <div class="bgform" data-aos="fade-up">
            <div class="frm">
                <form id="contact-form-page">
                    <div class="contact-form-page">
                        <div class="form-group">
                            <label class="control-label">İsim - Soyisim *</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefon *</label>
                            <input type="number" class="form-control" required name="phone">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Konu</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mesaj</label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="buttonContact">
                                Gönder
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- ************************************************************************************ -->
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="js/glide.min.js"></script> -->
    <script src="/tema3/js/aos.js"></script>
    <script src="/tema3/js/script.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            // delay:5000,
            duration: 800,
            mirror: false,
        });
    </script>
    <?php include 'widget.php' ?>
    <script src="/global_script.js"></script>
    <?php include 'geoip.php' ?>
</body>

</html>