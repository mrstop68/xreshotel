
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php if(isset($dataCODES->gtm)) echo $dataCODES->gtm; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <a href="<?php if(empty($langURL)){echo $dataHOTEL->website;}else{ echo $dataHOTEL->website.'/'.$langURL.'/';} ?>"><img class="logo" src="<?=$apiURL?>/logo/<?php if(isset($dataHOTEL->logo->logoname)) echo $dataHOTEL->logo->logoname; ?>" alt="<?php if(isset($dataHOTEL->logo->logodescription)) echo $dataHOTEL->logo->logodescription; ?>"></a>
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
                        foreach($dataPAGES as $pages){
                            if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && $pages->status!='false'){ ?>
                                <li class="nav-tab"><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website;}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }else{ 
                        foreach($dataPAGES as $pages){
                            if(($langURL==strtolower($pages->lang)) && $pages->status!='false'){ ?>
                                <li class="nav-tab"><a href="<?php if($pages->link=='/'){echo $dataHOTEL->website.'/'.$langURL.'/';}else{echo $pages->link;} ?>" <?php if((isset($pages->link)) && ($pages->link=='reservation'))echo 'id="tbres"' ?>><?=$pages->pagename?></a></li>
                        <?php  } } 
                    }//menu finish
                  ?>
                        <?php if(isset($dataLANG[1]->LangCode)){ //dil menu start?> 
                            <div class="dropdown">
                                <?php if(empty($langURL)){ // ana header üzerinde görünecek dil?>
                                    <li class="nav-tab"><img src="<?=$panelURL?>/<?=$dataHOTEL->LangLink?>" alt="language" width="26"> <?=$dataHOTEL->LangCode?></li>
                                <?php }else { ?>
                                    <li class="nav-tab"><img src="<?=$panelURL?>/img/flag/<?=strtoupper($langURL)?>.svg" alt="language" width="26"> <?=strtoupper($langURL)?></li>
                                <?php }  ?>
                                <div class="dropdown-content">
                            <?php  
                                if(empty($langURL)){// header üzerindeki dili tıklayınca listelenen diller
                                    foreach($dataLANG as $langs){ ?>
                                    <?php if(($langs->LangCode)!='mainlang'){ ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img src="<?=$panelURL?>/<?=$langs->LangLink?>" alt="language" width="26"> <?=$langs->LangCode?></a></li>
                                    <?php } } ?>
                                <?php }else{  ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/" ><img src="<?=$panelURL?>/<?=$dataHOTEL->LangLink?>" alt="language" width="26"> <?=$dataHOTEL->LangCode?></a></li>
                                    <?php foreach($dataLANG as $langs){ ?>
                                    <?php if((strtolower($langs->LangCode))!=$langURL && ($langs->LangCode)!='mainlang'){ ?>
                                    <li class="nav-tab"> <a href="<?=$dataHOTEL->website?>/<?=strtolower($langs->LangCode)?>/" ><img src="<?=$panelURL?>/<?=$langs->LangLink?>" alt="language" width="26"> <?=$langs->LangCode?></a></li>
                                    <?php } } } ?>
                            </div>
                        </div>
                        <?php } //dil menu finish ?> 
                        
                    </ul>
                </div>
            </nav>
        </div>
    </header>

</head>