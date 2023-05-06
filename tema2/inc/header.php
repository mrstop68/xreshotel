
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
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xxl d-flex align-items-center justify-content-between mx-1">
        <a class="logo d-flex align-items-center" href="<?php if(empty($langURL)){echo $dataHOTEL->website;}else{ echo $dataHOTEL->website.'/'.$langURL.'/';} ?>"><img class="logo" src="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?=$seoData->imagetag?>"></a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
              <ul>
                  <?php //menu start
                    if((empty($langURL))){
                        foreach($dataPAGES as $pages){
                            if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && $pages->status!='false'){ ?>
                                <li><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website;}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }else{ 
                        foreach($dataPAGES as $pages){
                            if(($langURL==strtolower($pages->lang)) && $pages->status!='false'){ ?>
                                <li><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website.'/'.$langURL.'/';}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }//menu finish
                  ?>
                  <?php if(isset($dataLANG[1]->LangCode)){ //dil menu start?> 
                      <li class="dropdown">
                        <?php if(empty($langURL)){ // ana header üzerinde görünecek dil?>
                            <a class="nav-tab"><span><img class="flags" src="<?=$panelURL?>/<?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?></span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <?php }else { ?>
                            <a class="nav-tab"><span><img class="flags"src="<?=$panelURL?>/img/flag/<?=strtoupper($langURL)?>.svg" alt="<?=$seoData->imagetag?>" width="26"> <?=strtoupper($langURL)?></span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <?php }  ?>
                        <ul>
                            <?php  
                                    if(empty($langURL)){// header üzerindeki dili tıklayınca listelenen diller
                                        foreach($dataLANG as $langs){ ?>
                                        <?php if(($langs->LangCode)!='mainlang'){ ?>
                                        <li class="flags-li"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img class="flags" src="<?=$panelURL?>/<?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                        <?php } } ?>
                                    <?php }else{  ?>
                                        <li class="flags-li"> <a href="<?=$dataHOTEL->website?>/" ><img class="flags" src="<?=$panelURL?>/<?=$dataHOTEL->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$dataHOTEL->LangCode?></a></li>
                                        <?php foreach($dataLANG as $langs){ ?>
                                        <?php if((strtolower($langs->LangCode))!=$langURL && ($langs->LangCode)!='mainlang'){ ?>
                                        <li class="flags-li"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img class="flags" src="<?=$panelURL?>/<?=$langs->LangLink?>" alt="<?=$seoData->imagetag?>" width="26"> <?=$langs->LangCode?></a></li>
                                        <?php } } } ?>
                            <?php } //dil menu finish ?> 
                        </ul>
                      </li>
            </ul>
        </nav>
      </div>
    </header> 
