    <footer>
        <div class="wrapfooter">
            <div class="footercontent">
                <h4>ResClick Theme</h4>
            </div>
        </div>

        <div class="contactfooter">
            <div class="footercontent2">
                <div class="fbody">
                    <h6>LOKASYON</h6>
                    <div class="footerli"><img src="tema1/images/svg/map.svg" alt="ResClick Theme" width="18"><span>Adres: <?php if(isset($dataHOTEL->seoinfo->adress)){echo $dataHOTEL->seoinfo->adress;}?></span>
                    </div>
                </div>
                <div class="fbody">
                    <h6>İLETİŞİM</h6>
                    <div class="footerli"><img src="tema1/images/svg/phone.svg" alt="ResClick Theme" width="18"><a href="tel:<?php if(isset($dataHOTEL->seoinfo->phone1)){echo $dataHOTEL->seoinfo->phone1;}?>"><span id="phonefooter">Rezervasyon: <?php if(isset($dataHOTEL->seoinfo->phone1)){echo $dataHOTEL->seoinfo->phone1;}?></span></a>
                    </div>
                    <div class="footerli"><img src="tema1/images/svg/phone.svg" alt="ResClick Theme" width="18"><a href="tel:<?php if(isset($dataHOTEL->seoinfo->phone2)){echo $dataHOTEL->seoinfo->phone2;}?>"><span id="phonefooter">Otel: <?php if(isset($dataHOTEL->seoinfo->phone2)){echo $dataHOTEL->seoinfo->phone2;}?></span></a>
                    </div>
                    <div class="footerli"><img src="tema1/images/svg/envelope.svg" alt="ResClick Theme" width="18"><a href="mailto:<?php if(isset($dataHOTEL->seoinfo->email)){echo $dataHOTEL->seoinfo->email;}?>"><span>Mail: <?php if(isset($dataHOTEL->seoinfo->email)){echo $dataHOTEL->seoinfo->email;}?></span></a>
                    </div>

                </div>
                <div class="fbody">
                    <h6>BİZİ TAKİP EDİN</h6>
                    <div class="footerli">
                    <?php if((isset($dataHOTEL->seoinfo->youtube)) && ($dataHOTEL->seoinfo->youtube!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->youtube.'" target="_blank"><img src="tema1/images/social/youtube.svg" alt="'.$dataHOTEL->logo->logodescription.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->facebook) && (($dataHOTEL->seoinfo->facebook)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->facebook.'" target="_blank"><img src="tema1/images/social/facebook.svg" alt="'.$dataHOTEL->logo->logodescription.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->insta) && (($dataHOTEL->seoinfo->insta)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->insta.'" target="_blank"><img src="tema1/images/social/instagram.svg" alt="'.$dataHOTEL->logo->logodescription.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->twitter) && ($dataHOTEL->seoinfo->twitter!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->twitter.'" target="_blank"><img src="tema1/images/social/twitter.svg" alt="'.$dataHOTEL->logo->logodescription.'"></a></div>';}?>
                    </div>
                </div>

            </div>
            <hr>
            <div class="footerlogo"><img src="<?=$apiURL?>/logo/<?=$dataHOTEL->logo->logoname?>" alt="<?=$dataHOTEL->logo->logodescription?>"></div>
            <div class="fend">
                <div class="endleft">
                    <!-- <span><a href="" target="_blank"> KVKK & Çerez Politikası </a> | </span> -->
                    <!-- <span><a href="" target="_blank"> Factsheet </a></span> -->
                    <!-- <span id="ppSecurity" class="ppSecurity"> Aydınlatma Metni | </span> -->
                    <!-- <span><a href="/KVKKBasvuruFormu.pdf" target="_blank"> KVKK Başvuru Formu </a> </span> -->
                </div>
                <div class="endright">
                    <span class="copyy">Copyright © <?php echo date('Y') ?> All rights reserved | </span> 
                    <a href="https://resclick.com/tr/" target="_blank"> <img alt="ResClick Theme | Resclick" src="https://resclick.com/images/resclick-logo-black.svg" alt="ResClick Theme" width="100"></a>
                </div>
            </div>
        </div>

    </footer>
 
    <div><a class="back" id="backtoTop" onclick="scrollToTop();return false;" href="#"><img alt="ResClick Theme" src="tema1/images/arrow.svg" alt="ResClick Theme" width="20"></a></div>
   
                  
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                document.getElementById("backtoTop").style.display = "block";


            } else {
                document.getElementById("backtoTop").style.display = "none";

            }

        }
    </script>
