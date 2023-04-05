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
    case 'restoran':
        require_once 'restoran.php';
        break;
    case 'sahil-havuz':
        require_once 'sahil.php';
        break;
    case 'miniclub':
        require_once 'miniclub.php';
        break;
    case 'spa':
        require_once 'spa.php';
        break;
    case 'aktivite':
        require_once 'aktivite.php';
        break;
    case 'galeri':
        require_once 'galeri.php';
        break;
    case 'iletisim':
        require_once 'iletisim.php';
        break;
    case 'tesis':
        require_once 'tesis.php';
        break;


    case 'en/':
        require_once 'en/index.php';
        break;
    case 'en/accomodation':
        require_once 'en/konaklama.php';
        break;
    case 'en/restaurant':
        require_once 'en/restoran.php';
        break;
    case 'en/pool-beach':
        require_once 'en/sahil.php';
        break;
    case 'en/spa':
        require_once 'en/spa.php';
        break;
    case 'en/miniclub':
        require_once 'en/miniclub.php';
        break;
    case 'en/activities':
        require_once 'en/aktivite.php';
        break;
    case 'en/gallery':
        require_once 'en/galeri.php';
        break;
    case 'en/contact':
        require_once 'en/iletisim.php';
        break;
    case 'en/facility':
        require_once 'en/tesis.php';
        break;

    case 'de/':
        require_once 'de/index.php';
        break;
    case 'de/accomodation':
        require_once 'de/konaklama.php';
        break;
    case 'de/restaurant':
        require_once 'de/restoran.php';
        break;
    case 'de/pool-beach':
        require_once 'de/sahil.php';
        break;
    case 'de/spa':
        require_once 'de/spa.php';
        break;
    case 'de/miniclub':
        require_once 'de/miniclub.php';
        break;
    case 'de/activities':
        require_once 'de/aktivite.php';
        break;
    case 'de/gallery':
        require_once 'de/galeri.php';
        break;
    case 'de/contact':
        require_once 'de/iletisim.php';
        break;
    case 'de/facility':
        require_once 'de/tesis.php';
        break;

    case 'ru/':
        require_once 'ru/index.php';
        break;
    case 'ru/accomodation':
        require_once 'ru/konaklama.php';
        break;
    case 'ru/restaurant':
        require_once 'ru/restoran.php';
        break;
    case 'ru/pool-beach':
        require_once 'ru/sahil.php';
        break;
    case 'ru/spa':
        require_once 'ru/spa.php';
        break;
    case 'ru/miniclub':
        require_once 'ru/miniclub.php';
        break;
    case 'ru/activities':
        require_once 'ru/aktivite.php';
        break;
    case 'ru/gallery':
        require_once 'ru/galeri.php';
        break;
    case 'ru/contact':
        require_once 'ru/iletisim.php';
        break;
    case 'ru/facility':
        require_once 'ru/tesis.php';
        break;


    case 'reservation':
        require_once 'reservation.php';
        break;
    case 'en/reservation':
        require_once 'en/reservation.php';
        break;
    case 'de/reservation':
        require_once 'de/reservation.php';
        break;
    case 'ru/reservation':
        require_once 'ru/reservation.php';
        break;

    default:
        require_once '404.php';
        break;
}
