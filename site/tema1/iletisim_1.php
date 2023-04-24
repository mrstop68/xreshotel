<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$dataHOTEL->seoinfo->title?></title>
    <link rel="apple-touch-icon" href="<?=$apiURL?>/logo/<?=$dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$apiURL?>/logo/<?=$dataHOTEL->icon->iconname?>" />
    <meta name="description" content="<?=$dataHOTEL->seoinfo->description?>" />
    <meta property="og:site_name" content="<?=$dataHOTEL->seoinfo->title?>" />
    <meta name="classification" content="<?=$dataHOTEL->seoinfo->title?>" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="tema1/css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="tema1/css/style.css">
    <link rel="stylesheet" href="tema1/css/sub-style.css">
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
                        <li><?php if(isset($activePage->content[0]->content)){echo $activePage->content[0]->content;} ?> <span><?=$dataHOTEL->seoinfo->adress?></span></li>
                        <li><?php if(isset($activePage->content[1]->content)){echo $activePage->content[1]->content;} ?> <a href="tel:<?=$dataHOTEL->seoinfo->phone1?>"><span id="phonecontact"><?=$dataHOTEL->seoinfo->phone1?></span></a></li>
                        <li><?php if(isset($activePage->content[2]->content)){echo $activePage->content[2]->content;} ?> <a href="tel:<?=$dataHOTEL->seoinfo->phone2?>"><span id="phonecontact"><?=$dataHOTEL->seoinfo->phone2?></span></a></li>
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
    <?php include 'inc/footer.php' ?>
    <script src="tema1/js/script.js"></script>
    <!-- Swiper JS -->
    </body>

</html>