<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/icon.png" />
    <title>ResClick Theme | İletişim</title>
    <meta name="description" content="ResClick Theme" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:url" content="https://resclick.com/" />
    <meta property="og:title" content="ResClick Theme" />
    <meta property="og:description" content="ResClick Theme" />
    <meta property="og:site_name" content="ResClick Theme" />
    <meta name="classification" content="ResClick Theme" />
    <meta name="abstract" content="ResClick Theme" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="ResClick Theme" />
    <meta name="twitter:title" content="ResClick Theme" />
    <meta name="twitter:site" content="https://resclick.com/" />
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/swiper-slide.css"> -->
    <!-- <link rel="stylesheet" href="css/glide.core.min.css"> -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sub-style.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/aos.css" />
</head>

<body>
    <?php include 'inc/header.php' ?>
    <!-- ************************************************************************************ -->
    <section style="margin-top:120px">
        <div>
            <div class="acontent" data-aos="fade-down">
                <div class="aheader">
                    <h2>İletişim</h2>
                </div>
            </div>
            <div class="aimg" style="background-image:url('images/home/6.webp'); "></div>
            <div class="contactcontainer" data-aos="fade-up">
                <div class="contactbody">
                    <div class="contactinfo">
                        <h6>Neque egestas congue quisque egestas.</h6>
                        <ul>
                            <li><img src="images/svg/map.svg" alt="" width="13"><span>Adres: Neque egestas congue quisque egestas.</span></li>
                            <li><img src="images/svg/phone.svg" alt="" width="13"><a href="tel:"><span>Rezervasyon +90 000 000 00 00</span></a></li>
                            <li><img src="images/svg/phone.svg" alt="" width="13"><a href="tel:"><span>Otel: +90 000 000 00 00</span></a></li>
                            <li><img src="images/svg/envelope.svg" alt="" width="13"><a href="mailto:"><span>info@resclick.com</span> </a></li>
                        </ul>
                    </div>
                    <div class="contactmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12768.915098961137!2d30.7829864!3d36.8609425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8731ff059df9315c!2sResClick%20Channel%20Manager%20Kanal%20Y%C3%B6neticisi!5e0!3m2!1str!2str!4v1673707448018!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section>
        <div class="bgform" data-aos="fade-up">
            <div class="frm">
                <form id="contact-form-page">
                    <div class="contact-form-page">
                        <div class="form-group">
                            <label class="control-label">İsim - Soyisim *</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telefon *</label>
                            <input type="number" class="form-control" required name="phone">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Konu</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mesaj</label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="buttonContact">
                                Gönder
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- ************************************************************************************ -->

    <?php include 'inc/footer.php' ?>

    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="js/glide.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
    <script>
        //animasyon yönetim
        AOS.init({
            offset: 100,
            // delay:5000,
            duration: 800,
            mirror: false,
        });
    </script>
</body>

</html>