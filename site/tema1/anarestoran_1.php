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
    <link rel="stylesheet" href="tema1/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="tema1/css/swiper-slide.css">

    <link rel="stylesheet" href="tema1/css/style.css">
    <link rel="stylesheet" href="tema1/css/sub-style.css">
    <style>
        .swiper {
            width: 100%;
            height: 375px;
            box-sizing: border-box;
        }

        @media screen and (max-width: 860px) {
            .rbody:nth-child(even) .rcontent:nth-child(1) {
                order: 1;
            }
        }
    </style>
    <?php include 'inc/header.php' ?>
    <section>
        <div class="img-top" style="background-image:url('<?=$apiURL?>/img/<?php if(isset($newArrayImg[$randIMG]->imgName)) echo $newArrayImg[$randIMG]->imgName?>')">

        </div>
    </section>
    <section>
        <div class="half-restoran">
        <h3><?=$activePage->pagename?></h3>
        </div>
    </section>
    <section>
        <div class="rcontainer">
        <?php 
            $n=0;
            $num=0;
            foreach($activePage->content as $content){ ?>
            
             <?php if($n%2==0) { ?>
            <div class="rbody">
                <div class="rcontent hr45">
                    <div class="roomPropertySub">
                    <?=$content->content?>
                    </div>

                </div>
                <div class="rcontent hr45">
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom2">
                        <div class="swiper-wrapper">
                        <?php 
                                if (isset($content->showpicturenumber))
                                    {$picnumber=$content->showpicturenumber+$num;}
                                    else {$picnumber=1+$num; }
                                while ( $num < $picnumber ) { ?>
                                    <div class="swiper-slide">
                                    <img alt="<?=$dataHOTEL->logo->logodescription?>" src="<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" />
                                    </div>
                                <?php $num++; } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <?php  } 
             else { ?>
             <div class="rbody">
             <div class="rcontent hr45">
                    <!-- Swiper -->
                    <div class="swiper mySwiperroom2">
                        <div class="swiper-wrapper">
                        <?php 
                                if (isset($content->showpicturenumber))
                                    {$picnumber=$content->showpicturenumber+$num;}
                                    else {$picnumber=1+$num; }
                                while ( $num < $picnumber ) { ?>
                                    <div class="swiper-slide">
                                    <img alt="<?=$dataHOTEL->logo->logodescription?>" src="<?=$apiURL?>/img/<?php if(isset($newArrayImg[$num]->imgName)) echo $newArrayImg[$num]->imgName?>" />
                                    </div>
                                <?php $num++; } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="rcontent hr45">
                    <div class="roomPropertySub">
                    <?=$content->content?>
                    </div>

                </div>
                
            </div>
            <?php  }  ?>
            <?php $n++; } ?>
        </div>

       
    </section>

    <?php include 'inc/footer.php' ?>
    <script src="tema1/js/script.js"></script>
    <!-- Swiper JS -->
    <script src="tema1/js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiperroom1", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-120%", 0, -500],
                },
                next: {
                    shadow: true,
                    translate: ["120%", 0, -500],
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
        var swiper = new Swiper(".mySwiperroom2", {
            grabCursor: true,
            // effect: "cards",
            loop: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-120%", 0, -500],
                },
                next: {
                    shadow: true,
                    translate: ["120%", 0, -500],
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //         pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            //     renderBullet: function (index, className) {
            //         return '<span class="' + className + '">' + (index + 1) + "</span>";
            //     },
            // },
        });
    </script>
    </body>

</html>