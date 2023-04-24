
<body>
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <a href="/"><img class="logo" src="<?=$apiURL?>/logo/<?=$dataHOTEL->logo->logoname?>" alt="<?=$dataHOTEL->logo->logodescription?>"></a>
            </div>
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                    <?php foreach($dataPAGES as $pages){ 
                        if($pages->status!='false'){ ?>
                        <li class="nav-tab"><a href="<?=$pages->link?>"><?=$pages->pagename?></a></li>
                  <?php  } }?>
                        
                        <!-- <div class="dropdown">
                        <li class="nav-tab"><img src="tema1/images/flag/tr.png" alt="language"> <a href="/">Türkçe</a></li>
                        <div class="dropdown-content">
                        <li class="nav-tab"><img src="tema1/images/flag/en.png" alt="language"> <a href="/en/">İngilizce</a></li>
                        <li class="nav-tab"><img src="tema1/images/flag/de.png" alt="language"> <a href="/de/">Almanca</a></li>
                        <li class="nav-tab"><img src="tema1/images/flag/ru.png" alt="language"> <a href="/ru/">Rusça</a></li>
                        </div>
                        </div> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>

</head>