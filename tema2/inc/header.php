
</head>

<body>
<header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xxl d-flex align-items-center justify-content-between mx-1"
      >
        <a href="/" class="logo d-flex align-items-center">
          <img src="<?=$apiURL?>/logo/<?=$dataHOTEL->logo->logoname?>" alt="<?=$dataHOTEL->logo->logodescription?>"/>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
          <?php foreach($dataPAGES as $pages){ 
             if($pages->status!='false'){ ?>
            <li><a href="<?=$pages->link?>"><?=$pages->pagename?></a></li>
                <?php } } ?>
            <!-- <li class="dropdown">
              <a href="/"
                ><span> <img src="tema2/images/flags/turkey.png" alt="Tr" class="flags"> TR</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li class="flags-li"><a href="/en"> <img src="tema2/images/flags/england.png" alt="En" class="flags"> EN</a></li>
                <li class="flags-li"><a href="/de"> <img src="tema2/images/flags/germany.png" alt="De" class="flags"> DE</a></li>
                <li class="flags-li"><a href="/ru"> <img src="tema2/images/flags/russia.png"  alt="Ru" class="flags"> RU</a></li>
              </ul>
            </li> -->
          </ul>
        </nav>
      </div>
    </header>
