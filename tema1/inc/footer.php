    <footer>
        <?php 
        //dil apisindeki verileri (content) dile göre listeleme  
        foreach($dataLANG as $langContent){
            if((empty($langURL)) && (strtolower($langContent->LangCode))=='mainlang') {
                $footerContent=$langContent->content;
                break;
            }else if ($langURL==(strtolower($langContent->LangCode))){
                $footerContent=$langContent->content;
                break;
            }
        }
        usort($footerContent,function($first,$second){
            return $first->order - $second->order;
        });
        // $endContent=$footerContent;
        // array_pop($footerContent);
        ?>
    <?php if((isset($seoData->slogan)) && ($seoData->slogan!='')){ ?>
        <div class="wrapfooter">
            <div class="footercontent">
                <h4><?=$seoData->slogan?></h4>
               
            </div>
        </div>
    <?php } ?> 
        <div class="contactfooter">
            <div class="footercontent2">
                <?php 
                //aşağıda array_filter ile footercontent dizisini grup numarasına göre süzüyoruz
                $group1=array_filter($footerContent,function($data){
                    return $data->sectionGroup==1;
                });
                foreach($group1 as $content) { ?>
                <div class="fbody">
                    <?=$content->content?>
                </div>
                <?php }  ?>
               
                <div class="fbody">
                    <?php 
                    $group2=array_filter($footerContent,function($data){
                        return $data->sectionGroup==2;
                    }); 
                    foreach($group2 as $content) { ?>
                    <h6><?=$content->content?></h6>
                    <?php }  ?>
                    <div class="footerli">
                    <?php if((isset($dataHOTEL->seoinfo->youtube)) && ($dataHOTEL->seoinfo->youtube!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->youtube.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema1/images/social/youtube.svg" alt="'.$seoData->imagetag.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->facebook) && (($dataHOTEL->seoinfo->facebook)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->facebook.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema1/images/social/facebook.svg" alt="'.$seoData->imagetag.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->insta) && (($dataHOTEL->seoinfo->insta)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->insta.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema1/images/social/instagram.svg" alt="'.$seoData->imagetag.'"></a></div>';}?>
                    <?php if(isset($dataHOTEL->seoinfo->twitter) && ($dataHOTEL->seoinfo->twitter!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->twitter.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema1/images/social/twitter.svg" alt="'.$seoData->imagetag.'"></a></div>';}?>
                    </div>
                </div>

            </div>
            <hr>
            <div class="footerlogo"><img src="<?=$imagesLink?><?php if(isset($dataHOTEL->logo->logoname))echo $dataHOTEL->logo->logoname?>" alt="<?=$seoData->imagetag?>"></div>
            <div class="fend">
                <div class="endleft">
                <?php
                        if((empty($langURL))){
                            
                            foreach($dataPAGES as $pages){
                                if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                    echo ' <span><a href="'.$pages->link.'">'.$pages->pagename.'</a></span><span class="lastChild"> | </span>';
                                }
                            }
                        }else{
                            foreach($dataPAGES as $pages){
                                if(($langURL==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                    echo ' <span><a href="'.$pages->link.'">'.$pages->pagename.'</a></span><span class="lastChild"> | </span>';
                                }
                            }
                        }
                    ?>
                </div>
                <div class="endright">
                    <span class="copyy">Copyright © <?php echo date('Y') ?> All rights reserved | </span> 
                    <a href="https://resclick.com/tr/" target="_blank"> <img alt="<?=$seoData->imagetag?>" src="https://resclick.com/images/resclick-logo-black.svg" alt="<?=$seoData->imagetag?>" width="100"></a>
                </div>
            </div>
        </div>

    </footer>
 
    <div><a class="back" id="backtoTop" onclick="scrollToTop();return false;" href="#"><img alt="<?=$seoData->imagetag?>" src="<?=$dataHOTEL->website?>/tema1/images/arrow.svg" alt="<?=$seoData->imagetag?>" width="20"></a></div>
                  
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
