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
        ?>
    <section>
        <footer>
            <div class="footer">
                <div class="fhead">
                    <ul class="flink">
                        <!-- //footer menü start -->
                        <?php
                            if((empty($langURL))){
                                foreach($dataPAGES as $pages){
                                    if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                        echo ' <li><a href="'.$pages->link.'">'.$pages->pagename.'</a></li>';
                                    }
                                }
                            }else{
                                foreach($dataPAGES as $pages){
                                    if(($langURL==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                        echo ' <li><a href="'.$pages->link.'">'.$pages->pagename.'</a></li>';
                                    }
                                }
                            }
                        ?>
                        <!-- footermenu finish -->
                    </ul>
                </div>
                <div class="fcontent">
                    <div class="flogo" data-aos="fade-up"><img src="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>"> </div>
                    <div class="fadress" data-aos="fade-up">
                    <?php 
                //aşağıda array_filter ile footercontent dizisini grup numarasına göre süzüyoruz
                $group1=array_filter($footerContent,function($data){
                    return $data->sectionGroup==1;
                });
                foreach($group1 as $content) { ?>
                <?=$content->content?>
                <?php }  ?>
                    <?=$seoData->adress?></div>
                    <div class="fbody">
                        <div class="finfo" data-aos="fade-up">
                            <ul>
                                <li>
                                <?php     $group1=array_filter($footerContent,function($data){
                                    return $data->sectionGroup==2;
                                });
                                foreach($group1 as $content) { ?>
                                <?=$content->content?>
                                <?php }  ?>    
                                <a href="tel:<?=$dataHOTEL->seoinfo->phone1?>"> <?=$dataHOTEL->seoinfo->phone1?></a></li>
                                <li>
                                <?php     $group1=array_filter($footerContent,function($data){
                                    return $data->sectionGroup==3;
                                });
                                foreach($group1 as $content) { ?>
                                <?=$content->content?>
                                <?php }  ?>     
                                <a href="mailto:<?=$dataHOTEL->seoinfo->email?>"> <?=$dataHOTEL->seoinfo->email?></a></li>
                            </ul>
                        </div>
                        <div class="socialcontent ssocials" data-aos="fade-up">
                            <div class="socials fsoci">
                                <ul>
                                    <li><?php if((isset($dataHOTEL->seoinfo->youtube)) && ($dataHOTEL->seoinfo->youtube!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->youtube.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema3/images/social/youtube.svg" alt="'.$seoData->imagetag.'"></a></div>';}?></li>
                                    <li><?php if(isset($dataHOTEL->seoinfo->facebook) && (($dataHOTEL->seoinfo->facebook)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->facebook.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema3/images/social/facebook.svg" alt="'.$seoData->imagetag.'"></a></div>';}?></li>
                                    <li><?php if(isset($dataHOTEL->seoinfo->insta) && (($dataHOTEL->seoinfo->insta)!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->insta.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema3/images/social/instagram.svg" alt="'.$seoData->imagetag.'"></a></div>';}?></li>
                                    <li><?php if(isset($dataHOTEL->seoinfo->twitter) && ($dataHOTEL->seoinfo->twitter!='')){echo '<div class="socialimg"><a href="'.$dataHOTEL->seoinfo->twitter.'" target="_blank"><img src="'.$dataHOTEL->website.'/tema3/images/social/twitter.svg" alt="'.$seoData->imagetag.'"></a></div>';}?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="fend">
                        <div class=" endleft">
                        </div>
                        <div class=" endright">
                            <span class="copyy">Copyright © 2021 All rights reserved |</span><a href="https://resclick.com" target="_blank" alt="ResClick"> <img src="https://resclick.com/images/resclick-logo-white.svg" alt="" width="100"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <a onClick="document.documentElement.scrollIntoView({ behavior: 'smooth' });" id="myBtn">
        <div class="swiper-button-next topbody"></div>
    </a>
    
