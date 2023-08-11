    
    
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
    <section class="theadert">
        <div class="top-header">
            <div class="containerhead">
                <div>
                    <ul class="top-menu">
                        <li><a href="tel:+<?=$dataHOTEL->seoinfo->phone1?>"><img src="<?=$dataHOTEL->website?>/tema3/images/headphones.svg" alt="<?=$seoData->imagetag?>"> <?=$dataHOTEL->seoinfo->phone1?> </a></li>
                        <?php if(isset($dataLANG[1]->LangCode)){ //dil menu start?> 
                        <li>
                        <?php if(empty($langURL)){ // ana header üzerinde görünecek dil?>
                            <img class="flags" src="<?=$imagesLink?><?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?> <span> <img src="<?=$dataHOTEL->website?>/tema3/images/angle-down-solid.svg" alt="<?=$seoData->imagetag?>" width="8px" height="13"></span>
                            <?php }else { ?>
                                <img class="flags" src="<?=$imagesLink?>img/flag/<?=strtoupper($langURL)?>.svg" alt="<?=$seoData->imagetag?>" width="26"> <?=strtoupper($langURL)?> <span> <img src="<?=$dataHOTEL->website?>/tema3/images/angle-down-solid.svg" alt="<?=$seoData->imagetag?>" width="8px" height="13"></span>
                            <?php }  ?>
                            <ul class="dropdown-topmenu">
                            <?php  
                                    if(empty($langURL)){ // header üzerindeki dili tıklayınca listelenen diller
                                        foreach($dataLANG as $langs){ ?>
                                        <?php if(($langs->LangCode)!='mainlang'){ ?>
                                                <li><a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/"> <img class="flags" src="<?=$imagesLink?><?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                         <?php } } ?>
                                    <?php }else{  ?>
                                                <li><a href="<?=$dataHOTEL->website?>/"> <img class="flags" src="<?=$imagesLink?><?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?></a></li>
                                <?php foreach($dataLANG as $langs){ ?>
                                        <?php if((strtolower($langs->LangCode))!=$langURL && ($langs->LangCode)!='mainlang'){ ?>
                                                <li><a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/"> <img class="flags" src="<?=$imagesLink?><?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                <?php } } } ?>
                            </ul>
                        </li>
                        <?php } //dil menu finish ?> 

                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Header Finish -->
        <!-- Menu -->
        <header id="navbar">
            <div class="containerhead">
                <div class="header-logo">
                    <a href="<?php if(empty($langURL)){echo $dataHOTEL->website;}else{ echo $dataHOTEL->website.'/'.$langURL.'/';} ?>">
                        <img src="<?=$imagesLink?>logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>" />
                    </a>
                </div>
                <div>
                    <nav id="nav-menu">
                        <ul>
                        <?php //menu start 
                    if((empty($langURL))){
                        $lCode=$dataHOTEL->LangCode;
                        $filterPageToLang=array_filter($dataPAGES, array(new FilterPagesToLangCode($lCode), 'menupageSelect'));
                        foreach($filterPageToLang as $pages){
                            if($pages->status!='false'){ ?>
                                <li><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website;}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }else{ 
                        $lCode=strtoupper($langURL);
                        $filterPageToLang=array_filter($dataPAGES, array(new FilterPagesToLangCode($lCode), 'menupageSelect'));
                        foreach($filterPageToLang as $pages){
                            if($pages->status!='false'){ ?>
                                <li><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website.'/'.$langURL.'/';}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }//menu finish
                  ?>
                        </ul>
                    </nav>
                </div>
                <div id="icon-bar">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </header>
    </section>