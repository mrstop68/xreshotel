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
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/tema2/css/lightgallery.css">
    <link rel="stylesheet" href="<?=$dataHOTEL->website?>/global_style.css">
    <?php include 'inc/header.php' ?>

    <div class="img-top" style="background-image:url('<?=$imagesLink?><?=(($dataIMG)[$randIMG]->imgName)?>'")></div>
    <section>
        <div class="galericontainer">
            <div class="cheader">
            </div>
            <div class="">
                <div class="filter-btns">
                     <!-- //dil apisindeki verileri (categoryimg) dile göre listeleme -->
                    <?php  foreach($dataLANG as $langContent){
                        if((empty($langURL)) && (strtolower($langContent->LangCode))=='mainlang') {
                            $dataLangActivePage=$langContent->categoryimg;
                            break;
                        }else if ($langURL==(strtolower($langContent->LangCode))){
                            $dataLangActivePage=$langContent->categoryimg;
                            break;
                        }
                    }
                    $valuesHotel = array_values($dataLangActivePage);  ?>
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
                                            <li class="gallery_product filter <?php echo $HotelCategory ?>" data-src="<?=$imagesLink?><?=$valimg->imgName; ?>">
                                           <a href="">
                                           <img class="img-responsive" src="<?=$imagesLink?><?=$valimg->imgName; ?>" alt="<?=$seoData->imagetag?>"/>
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
    <script src="<?=$dataHOTEL->website?>/tema2/js/jquery-3.2.1.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/tema2/js/script.js"></script>
    <?php include 'widget.php' ?>
    <script src="<?=$dataHOTEL->website?>/global_script.js"></script>
    <?php include 'geoip.php' ?>
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
    <script src="<?=$dataHOTEL->website?>/tema2/js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
    </body>

</html>