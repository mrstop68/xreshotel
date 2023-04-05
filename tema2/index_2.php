<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Tema 2</title>
    <link rel="apple-touch-icon" href="tema2/images/icon.png" />
    <link rel="icon" href="tema2/images/icon.png" />
    <meta name="description" content="ResClick Theme 2"/>
    <meta name="classification" content="ResClick Theme 2" />
    <meta name="abstract" content="ResClick Theme 2" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:site_name" content="ResClick Theme 2" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="ResClick Theme 2"/>
    <meta property="og:title" content="ResClick Theme 2" />
    <meta property="og:description" content="ResClick Theme 2"/>
    <link rel="alternate" hreflang="tr" href="https://resclick.com/" />
    <link rel="alternate" hreflang="en" href="https://resclick.com/en" />
    <link rel="alternate" hreflang="de" href="https://resclick.com/de" />
    <link rel="alternate" hreflang="ru" href="https://resclick.com/ru" />
    <link rel="stylesheet" href="tema2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="tema2/css/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="tema2/css/style.css" />
    <link rel="stylesheet" href="tema2/css/swiper-bundle.css" />
    <?php include 'inc/header.php' ?>

    <style>
      .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }
      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 500px;
      }
      .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      }
    </style>
    <!-- Slider -->
    <div
      id="carouselControls"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner" style="max-height: 100vh!important;">
          <?php
            $n=0;
            foreach($dataIMG as $k=>$img){
              if($img->slider==true) {?><div class="carousel-item <?php if($n==0) echo 'active'; $n++ ?>">
              <img src="<?=$apiURL?>/img/<?=$img->imgName?>" class="d-block w-100" style="width: 100%; height: 100%;" alt="ResClick Image" /></div><?php }
            }
            ?>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Slider End -->

    <!-- First Section -->
    <section id="main-hotel" class="text-bg-light bg">
      <div
        class="container-md text-center min-vh-50 align-items-center justify-content-center d-flex px-5"
      >
        <div class="row position-relative">
          <div class="col-12">
            <img src="tema2/images/logo1.png" alt="ResClick Logo" />
          </div>
          <div
            class="col-sm-7 justify-content-center mx-auto flex-column d-flex pt-2"
            style="z-index: 1"
          >
            <h1 class="display-7 text-center pb-3">SLOGAN</h1>
            <p class="mx-auto"></p>
            <p>
              Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
              nada terra videa magna derita valies darta donna mare fermentum
              iaculis eu non diam phasellus.Cras fermentum odio eu feugiat lide
              par naso tierra. Justo eget nada terra videa magna derita valies
              darta donna mare fermentum iaculis eu non diam phasellus.<br /><br /><br />
            </p>
            <p></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Swiper Section -->
    <section id="main-swiper" class="text-bg-light bg" style= "background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(tema2/images/home/13.webp); background-size: cover;">
        <div
          class="container"
        >
          <div class="row text-white py-5">
            <div class="col-md-6" style="overflow: hidden; position: relative">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="tema2/images/home/1.webp" alt="ResClick Image"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="tema2/images/home/2.webp" alt="ResClick Image"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="tema2/images/home/3.webp" alt="ResClick Image"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="tema2/images/home/4.webp" alt="ResClick Image"/>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-md-6 p-sm-5 m-auto text-center">
              <h2>Slogan</h2>
              <p>
                Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                nada terra videa magna derita valies darta donna mare fermentum
                iaculis eu non diam phasellus.
              </p>

              <i class="fa-solid fa-chevron-right"></i
              ><a class="btn btn-light" href="#">Daha Fazla</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Room Section -->
    <section class="text-bg-light bg">
    <div class="container ">
    <h3 class="display-7 text-center pb-3">KONAKLAMA</h3>
        <div class="row">
          <div class="col-sm-4 mt-2">
            <div class="card card text-center" style="background-image: url(tema2/images/home/16.webp); background-size: cover;">
              <div class="title">
                <h2>Standart Room</h2>
                <a href="konaklama">Detail</a>
              </div>
              
            </div>
          </div>
          <div class="col-sm-4 mt-2">
            <div class="card card text-center" style="background-image: url(tema2/images/home/18.webp); background-size: cover;">
              <div class="title">
                <h2>Family Room</h2>
                <a href="konaklama">Detail</a>
              </div>
            
            </div>
          </div>
          <div class="col-sm-4 mt-2">
            <div class="card card text-center" style="background-image: url(tema2/images/home/17.webp); background-size: cover;">
              <div class="title">
                <h2>Suite Room</h2>
                <a href="konaklama">Detail</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
 
    </section>
  <!-- Room Section -->

      <!-- Tab Section -->
    <section id="features" class="features section-bg-light text-bg-light bg">
      <div class="container">

        <ul class="nav nav-tabs">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Sahil & Havuz</h4>
            </a>
          </li>
          <!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Restaurant</h4>
            </a>
            <!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Bar</h4>
            </a>
          </li>
          <!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Eğlence</h4>
            </a>
          </li>
          <!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" >
                <h3>Lorem Ipsum</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li>Lorem ipsum sit amet,</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li>Lorem ipsum sit amet, Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" >
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="tema2/images/home/2.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/3.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/4.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/9.webp" alt="ResClick Image"/>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Lorem Ipsum</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li>Lorem ipsum sit amet,</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li>Lorem ipsum sit amet, Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="tema2/images/home/11.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/12.webp" alt="ResClick Image"/>
                    </div>

                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Lorem Ipsum</h3>
                <ul>
                  <li>Lorem ipsum sit amet,</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="tema2/images/home/13.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/14.webp" alt="ResClick Image"/>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Lorem Ipsum</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li>Lorem ipsum sit amet,</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li>Lorem ipsum sit amet, Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="tema2/images/home/7.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/8.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/9.webp" alt="ResClick Image"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="tema2/images/home/10.webp" alt="ResClick Image"/>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section>
    <!-- End Tab Section -->


    <!-- mid-content -->
    <section id="middle-cover" style="background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(tema2/images/home/7.webp) no-repeat fixed center center / cover rgba(0, 0, 0, 5);">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text" style="font-family: 'Poppins', sans-serif; font-size: 50px; color:#fff">Slogan</h2>
                <h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text" style="font-size: 20px; color:#fff">Hoşgeldiniz!</h5>

                <div class="form-group col-sm-12 ">
                    <button class="btn btn-light">Fiyat Sorgula</button>
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- mid-content -->


    <?php include 'inc/footer.php' ?>

    <script src="tema2/js/bootstrap.bundle.min.js"></script>
    <script src="tema2/js/script.js"></script>
    <script src="tema2/js/swiper-bundle.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
  </body>

</html>