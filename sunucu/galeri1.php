<?php
$urlIMG = "https://micro-panel-api.resclick.com/images/63b9269a26fcdf72bf200958";
$urlHOTEL = "https://micro-panel-api.resclick.com/hotels/63b9269a26fcdf72bf200958";
$ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $urlIMG);
$resultIMG = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlHOTEL);
$resultHOTEL = curl_exec($ch);
// curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_close($ch);


// $curl = curl_init();
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, 5);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// curl_close($curl);

$dataIMG = json_decode($resultIMG);
$dataHOTEL = json_decode($resultHOTEL);
// foreach($dataIMG as $k=>$val){
//     echo $k.'='.$val->imgName.'<br>';
// }

// foreach($dataIMG as $k=>$val){
//     $vals = array_values($val->category);
//     foreach($vals as $val)
//     echo $val;
// }

//     echo ($dataHOTEL->name);
// $data = json_decode($result,true);
$rr= count(($dataIMG));
$randIMG=rand(0,$rr-1);
// echo(($dataIMG)[$randIMG-1]->imgName)
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream World Palace | Manavgat - ANTALYA</title>
    <link rel="apple-touch-icon" href="images/icon.png" />
    <link rel="icon" href="images/icon.png" />
    <meta name="description" content="Şıklığın ve en üst düzey kalitenin hissedildiği Dream World Palace; plajı, aquası, havuzları ve konforlu odaları ile unutamayacağınız bir tatil için sizleri bekliyor. " />
    <meta property="og:site_name" content="Dream World Palace" />
    <meta name="classification" content="Dream World Palace | Manavgat - ANTALYA" />
    <meta name="abstract" content="Dream World Palace" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="css/fonts.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub-style.css">
        <style>
            .demo-gallery > ul > li a > img {
            height: auto;
        }
        </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('https://micro-panel-api.resclick.com/img/<?=(($dataIMG)[$randIMG]->imgName)?>'")>
            <!-- <img src="images/home/swim1.jpg" alt=""> -->
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
                    <!-- <button class="filter-button" data-filter="category1">Genel</button>
                    <button class="filter-button" data-filter="category6">Teras</button>
                    <button class="filter-button" data-filter="category2">Konaklama</button>
                    <button class="filter-button" data-filter="category5">Aqua & Sahil & Havuz</button>
                    <button class="filter-button" data-filter="category3">Restoran & Bar</button>
                    <button class="filter-button" data-filter="category4">Spa & Sağlık</button> -->
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
                                            <li class="gallery_product filter <?php echo $HotelCategory ?>" data-src="https://micro-panel-api.resclick.com/img/<?=$valimg->imgName; ?>">
                                           <a href="">
                                           <img class="img-responsive" src="https://micro-panel-api.resclick.com/img/<?=$valimg->imgName; ?>" />
                                           <div class="demo-gallery-poster">
                                               <img src="images/zoom.png" />
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
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
    <script src="js/lightgallery.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
    </script>
    </body>

</html>