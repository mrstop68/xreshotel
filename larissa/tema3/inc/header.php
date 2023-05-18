    <section class="theadert">
        <!-- <div class="top-header">
            <div class="containerhead">
                <div>
                    <ul class="top-menu"> -->
                        <!-- <li><a href="tel:+"><img src="tema3/images/headphones.svg" alt="">Rezervasyon: "..."</a></li> -->
                        <!-- <li><a href="/"> Türkçe
                                <span> <img src="tema3/images/angle-down-solid.svg" alt="" width="8px" height="13"></span> </a>
                            <ul class="dropdown-topmenu">
                                <li><a href="/en/"> English</a></li>
                                <li><a href="/de/"> Deutsch</a></li>
                                <li><a href="/ru/"> Pусский</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div> -->
        <!-- Top Header Finish -->
        <!-- Menu -->
        <header id="navbar">
            <div class="containerhead">
                <div class="header-logo">
                    <a href="/">
                        <img alt="<?=$dataHOTEL->logo->logodescription?>" src="<?=$apiURL?>/logo/<?=$dataHOTEL->logo->logoname?>" />
                    </a>
                </div>
                <div>
                    <nav id="nav-menu">
                        <ul>
                        <?php foreach($dataPAGES as $pages){
                            if($pages->status!='false'){ ?>
                        <li><a href="<?=$pages->link?>"><?=$pages->pagename?></a></li>
                  <?php } }?>

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