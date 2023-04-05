<?php
$rr= count(($dataIMG));
$randIMG=rand(0,$rr-1);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tema3/images/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="tema3/images/icon.png" />
    <title>ResClick Theme | Galeri</title>
    <meta name="description" content="ResClick Theme " />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="https://resclick.com/" />
    <meta property="og:title" content="ResClick Theme" />
    <meta property="og:description" content="ResClick Theme" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta name="classification" content="ResClick Theme" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="ResClick Theme" />
    <meta name="twitter:title" content="ResClick Theme" />
    <meta name="twitter:site" content="https://resclick.com/" />
    <meta name="twitter:creator" content="@ResClick" />
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="tema3/css/swiper-slide.css">
    <link rel="stylesheet" href="tema3/css/glide.core.min.css">
    <link rel="stylesheet" href="tema3/css/fonts.css">
    <link rel="stylesheet" href="tema3/css/style.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="tema3/css/lightgallery.css">
    <!-- <link rel="stylesheet" href="tema3/css/gallery.css"> -->

</head>

<body>
    <?php include 'inc/header.php' ?>
    <section>
        <!-- ************************************************************************************ -->
        <section class="portfolio" id="portfolio" style="margin-top: 120px;">
            <div class="galericontainer">
                <div class="cheader">
                    <h2>Galeri</h2>
                </div>
                <div class="">
                    <div class="filter-btns">
                        <button class="filter-button" data-filter="all">Hepsi</button>
                        <?php
                        $valuesHotel = array_values($dataHOTEL->categoryimg);
                        foreach($valuesHotel as $val){
                            //  echo strtolower(str_replace([' ','&','_','-','?','^','%'],'',$val));
                             echo ' <button class="filter-button" data-filter="'.(str_replace([' ','&','_','-','?','^','%'],'',$val)).'">'.$val.'</button> ';
                        }
                    
                    ?>
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
                                               <img src="tema3/images/zoom.png" />
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
        <!-- ************************************************************************************ -->

        <?php include 'inc/footer.php' ?>
        <!-- Swiper JS -->
        <script src="tema3/js/jquery-3.2.1.min.js"></script>
        <!-- <script src="tema3/js/swiper-bundle.min.js"></script> -->
        <!-- <script src="tema3/js/glide.min.js"></script> -->
        <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
        <script src="tema3/js/script.js"></script>
        <script>
            //animasyon yönetim
            AOS.init({
                offset: 100,
                // delay:5000,
                duration: 800,
                mirror: false,
            });
        </script>
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
        <script src="tema3/js/lightgallery.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'))
        </script>
</body>

</html>