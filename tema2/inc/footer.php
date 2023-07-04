     <!-- mid-content -->
     <section id="middle-cover" style="background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(<?=$imagesLink?><?php if(isset($newArrayImg[$randIMG-1]->imgName)) { echo $newArrayImg[$randIMG-1]->imgName; } else if(isset($newArrayImg[$randIMG-2]->imgName)) { echo $newArrayImg[$randIMG-2]->imgName; }else if(isset($newArrayImg[$randIMG+2]->imgName)) { echo $newArrayImg[$randIMG+2]->imgName; }else if(isset($newArrayImg[$randIMG+1]->imgName)) { echo $newArrayImg[$randIMG+1]->imgName; } else { echo $newArrayImg[$randIMG]->imgName; } ?>) no-repeat fixed center center / cover rgba(0, 0, 0, 5);">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8 col-md-offset-2 white-text">
                <p><?=$seoData->slogan?></p>
            </div>
        </div>
    </div>	
</section>
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
    <footer id="footer" class="footer">
      <div class="container mt-4  ">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>"/>
            </a>
            <?php 
                //aşağıda array_filter ile footercontent dizisini grup numarasına göre süzüyoruz
                $group1=array_filter($footerContent,function($data){
                    return $data->sectionGroup==1;
                });
                foreach($group1 as $content) { ?>
                <p><?=$content->content?></p>
                <?php }  ?>
            <div class="social-links d-flex mt-4">
              <?php if(isset($dataHOTEL->seoinfo->youtube) && (($dataHOTEL->seoinfo->youtube)!='')){echo '<a href="'.$dataHOTEL->seoinfo->youtube.'" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>';}?>
              <?php if(isset($dataHOTEL->seoinfo->facebook) && (($dataHOTEL->seoinfo->facebook)!='')){echo '<a href="'.$dataHOTEL->seoinfo->facebook.'" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>';}?>
              <?php if(isset($dataHOTEL->seoinfo->insta) && (($dataHOTEL->seoinfo->insta)!='')){echo '<a href="'.$dataHOTEL->seoinfo->insta.'" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>';}?>
              <?php if(isset($dataHOTEL->seoinfo->twitter) && (($dataHOTEL->seoinfo->twitter)!='')){echo '<a href="'.$dataHOTEL->seoinfo->twitter.'" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>';}?>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-start">
            
                <?php 
                  $group2=array_filter($footerContent,function($data){
                      return $data->sectionGroup==2;
                  }); 
                  foreach($group2 as $content) { ?>
                <p><?=$content->content?></p>
                <?php } ?>
              <p class="bi bi-pin-map"> <?=$seoData->adress?></p>
              <p class="bi bi-telephone"> <?=$dataHOTEL->seoinfo->phone1?></p>
              <p class="bi bi-envelope"> <?=$dataHOTEL->seoinfo->email?></p>
          </div>
          <div class="col-lg-4 col-md-12 footer-links">
           
                <?php 
                  $group3=array_filter($footerContent,function($data){
                      return $data->sectionGroup==3;
                  }); 
                  foreach($group3 as $content) { ?>
                <p><?=$content->content?></p>
                <?php } ?>
                 <!-- //footer menü start -->
            <?php
                        if((empty($langURL))){
                            echo '<ul>';
                            foreach($dataPAGES as $pages){
                                if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                    echo ' <li><a href="'.$pages->link.'">'.$pages->pagename.'</a></li>';
                                }
                            }
                            echo '</ul>';
                        }else{
                          echo '<ul>';
                            foreach($dataPAGES as $pages){
                                if(($langURL==strtolower($pages->lang)) && $pages->statusMenuFooter!='false'){
                                    echo ' <li><a href="'.$pages->link.'">'.$pages->pagename.'</a></li>';
                                }
                            }
                            echo '</ul>';
                        }
                    ?>
              <!-- footermenu finish -->
              <?php 
                  $group4=array_filter($footerContent,function($data){
                      return $data->sectionGroup==4;
                  }); 
                  foreach($group4 as $content) { ?>
                <p><?=$content->content?></p>
                <?php } ?>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright

          <img
            alt="Resclick"
            src="https://resclick.com/images/resclick-logo-white.svg"
            width="100"
          />
          <br />
          All Rights Reserved
        </div>
      </div>
    </footer>