<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php if(isset($dataCODES->gtm)) echo $dataCODES->gtm?>');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($dataHOTEL->seoinfo->title))?></title>
    <link rel="apple-touch-icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname)) echo $dataHOTEL->icon->iconname?>" />
    <link rel="icon" href="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->icon->iconname))echo $dataHOTEL->icon->iconname?>" />
    <meta name="description" content="<?php if(isset($dataHOTEL->seoinfo->description))echo $dataHOTEL->seoinfo->description?>" />
    <meta property="og:site_name" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="classification" content="<?php if(isset($dataHOTEL->seoinfo->title))echo $dataHOTEL->seoinfo->title?>" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/lightgallery.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema1/css/sub-style.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
        <style>
            .demo-gallery > ul > li a > img {
            height: auto;
        }
        </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('<?=$apiURL?>/img/<?=(($dataIMG)[$randIMG]->imgName)?>')">
            <!-- <img src="tema1/images/home/swim1.jpg" alt=""> -->
        </div>
    </section>
   <?php
//    $data=json_decode($ch);
//    echo $data;
//    foreach($data as $value){
//     echo ($value->imgName);}
   ?>

    <section>
        <div class="galericontainer">
            <div class="cheader">
            <h2><?=$activePage->pagename?></h2>
            </div>
            <div class="">
                <div class="filter-btns">
                    
                    <?php 
                    //dil apisindeki verileri (categoryimg) dile göre listeleme
                        foreach($dataLANG as $langContent){
                            if((empty($langURL)) && (strtolower($langContent->LangCode))=='mainlang') {
                                $imagesCategory=$langContent->categoryimg;
                                break;
                            }else if ($langURL==(strtolower($langContent->LangCode))){
                                $imagesCategory=$langContent->categoryimg;
                                break;
                            }
                        }
                    $valuesHotel = array_values($imagesCategory); ?>
                        <button class="filter-button" data-filter="all"><?php echo current($valuesHotel)?></button>
                     <?php array_shift($valuesHotel);  
                     foreach($valuesHotel as $val){
                            //  echo strtolower(str_replace([' ','&','_','-','?','^','%'],'',$val));
                             echo ' <button class="filter-button" data-filter="'.(str_replace([' ','&','_','-','?','^','%'],'',$val)).'">'.$val.'</button> ';
                        } ?>
                </div>
            </div>
        </div>

        <br />
        <div class="row phtos">
            <div class="cont">
                <div class="demo-gallery">
                    <ul id="lightgallery">

                        <?php  foreach($valuesHotel as $val){?>
                            <?php  $HotelCategory= (str_replace([' ','&','_','-','?','^','%'],'',$val)); 
                                foreach($dataIMG as $k=>$valimg){
                                    $vals = array_values($valimg->category);
                                    foreach($vals as $valonly){
                                    $valonly=(str_replace([' ','&','_','-','?','^','%'],'',$valonly));
                                        if($valonly==$HotelCategory){?>
                                            <li class="gallery_product filter <?php echo $HotelCategory ?>" data-src="<?=$apiURL?>/img/<?=$valimg->imgName; ?>">
                                           <a href="">
                                           <img class="img-responsive" src="<?=$apiURL?>/img/<?=$valimg->imgName; ?>" />
                                           <div class="demo-gallery-poster">
                                               <img src="<?=$dataHOTEL->website?>/tema1/images/zoom.png" />
                                           </div>
                                       </a>
                                   </li>
                                        <?php };
                                    }
                                }
                            } ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include 'global_html.php' ?>
    <?php include 'inc/footer.php' ?>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/tema1/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script>
        /*	gallery */
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    $('.filter').show('1000');
                } else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }

                if ($(".filter-button").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");
            });
        });
        /*	end gallery */
    </script>
    <script src="tema1/js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    
    </body>

</html>