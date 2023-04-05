<?php
if (!isset($_GET['page'])) {
    $_GET['page'] = 'index';
}
switch ($_GET['page']) {

    case 'index':
        require_once 'index2.php';
        break;
    case '/':
        require_once 'index2.php';
        break;
    case 'konaklama':
        require_once 'konaklama.php';
        break;
    case 'standart-oda':
        require_once 'standart-oda.php';
        break;
    case 'twin-oda':
        require_once 'twin-oda.php';
        break;
    case 'french-oda':
        require_once 'french-oda.php';
        break;
    case 'king-suite':
        require_once 'king-suite.php';
        break;
    case 'engelli-oda':
        require_once 'engelli-oda.php';
        break;
    case 'restoran':
        require_once 'restoran.php';
        break;
    case 'ana-restoran':
        require_once 'ana-restoran.php';
        break;
    case 'alacarte-restoran':
        require_once 'alacarte-restoran.php';
        break;
    case 'lobibar':
        require_once 'lobibar.php';
        break;
    case 'cafebar':
        require_once 'cafebar.php';
        break;
    case 'havuz':
        require_once 'havuz.php';
        break;
    case 'spa-wellness':
        require_once 'spa.php';
        break;
    case 'iletisim':
        require_once 'iletisim.php';
        break;
    case 'mini':
        require_once 'mini.php';
        break;
    case 'galeri':
        require_once 'galeri.php';
        break;
    case 'genel':
        require_once 'genel.php';
        break;

    case 'en/':
        require_once 'index2.php';
        break;
    case 'en/accommodation':
        require_once 'konaklama.php';
        break;
    case 'en/standard-room':
        require_once 'standart-oda.php';
        break;
    case 'en/twin-room':
        require_once 'twin-oda.php';
        break;
    case 'en/french-room':
        require_once 'french-oda.php';
        break;
    case 'en/king-suite':
        require_once 'king-suite.php';
        break;
    case 'en/handicapped-room':
        require_once 'engelli-oda.php';
        break;
    case 'en/restaurant':
        require_once 'restoran.php';
        break;
    case 'en/pool':
        require_once 'havuz.php';
        break;
    case 'en/spa-wellness':
        require_once 'spa.php';
        break;
    case 'en/contact':
        require_once 'iletisim.php';
        break;
    case 'en/mini':
        require_once 'mini.php';
        break;
    case 'en/gallery':
        require_once 'galeri.php';
        break;

    case 'de/':
        require_once 'index2.php';
        break;
    case 'de/accommodation':
        require_once 'konaklama.php';
        break;
    case 'de/standard-room':
        require_once 'standart-oda.php';
        break;
    case 'de/twin-room':
        require_once 'twin-oda.php';
        break;
    case 'de/french-room':
        require_once 'french-oda.php';
        break;
    case 'de/king-suite':
        require_once 'king-suite.php';
        break;
    case 'de/handicapped-room':
        require_once 'engelli-oda.php';
        break;
    case 'de/restaurant':
        require_once 'restoran.php';
        break;
    case 'de/pool':
        require_once 'havuz.php';
        break;
    case 'de/spa-wellness':
        require_once 'spa.php';
        break;
    case 'de/contact':
        require_once 'iletisim.php';
        break;
    case 'de/mini':
        require_once 'mini.php';
        break;
    case 'de/gallery':
        require_once 'galeri.php';
        break;


    case 'ru/':
        require_once 'index2.php';
        break;
    case 'ru/accommodation':
        require_once 'konaklama.php';
        break;
    case 'ru/standard-room':
        require_once 'standart-oda.php';
        break;
    case 'ru/twin-room':
        require_once 'twin-oda.php';
        break;
    case 'ru/french-room':
        require_once 'french-oda.php';
        break;
    case 'ru/king-suite':
        require_once 'king-suite.php';
        break;
    case 'ru/handicapped-room':
        require_once 'engelli-oda.php';
        break;
    case 'ru/restaurant':
        require_once 'restoran.php';
        break;
    case 'ru/pool':
        require_once 'havuz.php';
        break;
    case 'ru/spa-wellness':
        require_once 'spa.php';
        break;
    case 'ru/contact':
        require_once 'iletisim.php';
        break;
    case 'ru/mini':
        require_once 'mini.php';
        break;
    case 'ru/gallery':
        require_once 'galeri.php';
        break;
   
    default:
        require_once '404.php';
        break;
}
