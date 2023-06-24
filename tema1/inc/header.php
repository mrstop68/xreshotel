
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php if(isset($dataCODES->gtm)) echo $dataCODES->gtm?>');</script>
    <!-- End Google Tag Manager -->
    </head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php if(isset($dataCODES->gtm)) echo $dataCODES->gtm; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <a href="<?php if(empty($langURL)){echo $dataHOTEL->website;}else{ echo $dataHOTEL->website.'/'.$langURL.'/';} ?>"><img class="logo" src="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>"></a>
            </div>
            <!-- <?php echo $langURL ?> -->
            
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                    <?php //menu start
                    if((empty($langURL))){
                        $lCode=$dataHOTEL->LangCode;
                        $filterPageToLang=array_filter($dataPAGES, array(new FilterPagesToLangCode($lCode), 'menupageSelect'));
                        foreach($filterPageToLang as $pages){
                            $findTopMenu=array_filter($filterPageToLang, array(new FilterPagesToLangCode($pages->link), 'issetTopMenu'));
                            if((empty($findTopMenu)) && $pages->status!='false' && ($pages->subpage=='homemenu' || (!isset($pages->subpage)))){ ?>
                                <li class="nav-tab"><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website;}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  }else if($pages->status!='false' && ($pages->subpage=='homemenu' || (!isset($pages->subpage)))){?>
                                <div class="dropdown">
                                        <li class="nav-tab"><?=$pages->pagename?><img src="<?=$dataHOTEL->website?>/tema1/images/down-arrow.svg" alt="<?=$seoData->imagetag?>"></li>
                                    <div class="dropdown-content">
                                        <?php foreach ($findTopMenu as $pages){ ?>
                                        <li class="nav-tab"><a href="<?=$pages->link?>"><?=$pages->pagename?></a></li>
                                        <?php } ?>
                                    </div>
                                </div> 
                        <?php } } 
                    }else{ 
                        $lCode=strtoupper($langURL);
                        $filterPageToLang=array_filter($dataPAGES, array(new FilterPagesToLangCode($lCode), 'menupageSelect'));
                        foreach($filterPageToLang as $pages){
                            $findTopMenu=array_filter($filterPageToLang, array(new FilterPagesToLangCode($pages->link), 'issetTopMenu'));
                            if((empty($findTopMenu)) && $pages->status!='false' && ($pages->subpage=='homemenu' || (!isset($pages->subpage)))){ ?>
                                <li class="nav-tab"><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website.'/'.$langURL.'/';}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                                <?php  }else if($pages->status!='false' && ($pages->subpage=='homemenu' || (!isset($pages->subpage)))){?>
                                <div class="dropdown">
                                        <li class="nav-tab"><?=$pages->pagename?><img src="<?=$dataHOTEL->website?>/tema1/images/down-arrow.svg" alt="<?=$seoData->imagetag?>"></li>
                                    <div class="dropdown-content">
                                        <?php foreach ($findTopMenu as $pages){ ?>
                                        <li class="nav-tab"><a href="<?=$pages->link?>"><?=$pages->pagename?></a></li>
                                        <?php } ?>
                                    </div>
                                </div> 
                        <?php } } 
                    }//menu finish
                  ?>
                        <?php if(isset($dataLANG[1]->LangCode)){ //dil menu start?> 
                            <div class="dropdown">
                                <?php if(empty($langURL)){ // ana header üzerinde görünecek dil?>
                                    <li class="nav-tab"><img src="<?=$imagesLink?><?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?></li>
                                <?php }else { ?>
                                    <li class="nav-tab"><img src="<?=$imagesLink?>img/flag/<?=strtoupper($langURL)?>.svg" alt="<?=$seoData->imagetag?>" width="26"> <?=strtoupper($langURL)?></li>
                                <?php }  ?>
                                <div class="dropdown-content">
                            <?php  
                                if(empty($langURL)){// header üzerindeki dili tıklayınca listelenen diller
                                    foreach($dataLANG as $langs){ ?>
                                    <?php if(($langs->LangCode)!='mainlang'){ ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img src="<?=$imagesLink?><?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                    <?php } } ?>
                                <?php }else{  ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/" ><img src="<?=$imagesLink?><?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?></a></li>
                                    <?php foreach($dataLANG as $langs){ ?>
                                    <?php if((strtolower($langs->LangCode))!=$langURL && ($langs->LangCode)!='mainlang'){ ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img src="<?=$imagesLink?><?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                    <?php } } } ?>
                            </div>
                        </div>
                        <?php } //dil menu finish ?> 
                        
                    </ul>
                </div>
            </nav>
        </div>
    </header>

