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
    <title>ResClick Tema 2</title>
    <link rel="apple-touch-icon" href="tema2/images/icon.png" />
    <link rel="icon" href="tema2/images/icon.png" />
    <meta name="description" content="ResClick Theme 2" />
    <meta property="og:site_name" content="ResClick Theme 2" />
    <meta name="classification" content="ResClick Theme 2" />
    <meta name="abstract" content="ResClick Theme 2" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="tema2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="tema2/css/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="tema2/css/style.css" />
    <link rel="stylesheet" href="tema2/css/sub.css" />
    <link rel="stylesheet" href="tema2/css/lightgallery.css">

    <?php include 'inc/header.php' ?>

    <div class="img-top" style="background-image:url('<?=$apiURL?>/img/<?=(($dataIMG)[$randIMG]->imgName)?>'")></div>
    <section>
        <div class="galericontainer">
            <div class="cheader">
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
                        <!-- category1 -->

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
                                               <img src="tema2/images/zoom.png" />
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

    <?php include 'inc/footer.php' ?>
    <script src="tema2/js/jquery-3.2.1.min.js"></script>
    <script src="tema2/js/script.js"></script>
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
    <script src="tema2/js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
    </body>

</html>