<?php

$urlIMG = "https://micro-panel-api.resclick.com/images/63b9269a26fcdf72bf200958";
$urlHOTEL = "https://micro-panel-api.resclick.com/hotels/63b9269a26fcdf72bf200958";
$urlPAGES = "https://micro-panel-api.resclick.com/pages/63b9269a26fcdf72bf200958";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $urlIMG);
$resultIMG = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlHOTEL);
$resultHOTEL = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlPAGES);
$resultPAGES = curl_exec($ch);
curl_close($ch);


$dataIMG = json_decode($resultIMG);
$dataHOTEL = json_decode($resultHOTEL);
$dataPAGES = json_decode($resultPAGES);

if (!isset($_GET['page'])) {
    $_GET['page'] = 'index';
}
// echo $_GET['page'].'<br>';
foreach($dataPAGES as $key=>$value){
    //  echo $value->link.':';
    //  echo $value->linkedpage.'.php'.'<br>';
    // if($_GET['page']==$value->link){
    //     require_once $value->linkedpage.'.php';
    // }
    switch ($_GET['page']) {
        case $value->link:
            require_once $value->linkedpage.'.php';
            break;
        };
    if($_GET['page'] == $value->link){
        break;
    }
}

