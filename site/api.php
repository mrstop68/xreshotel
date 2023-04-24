<?php
// $apiURL="http://localhost:3000";
// $hotelid="636e5134dc5793d36530da08";
$apiURL="https://micro-panel-api.resclick.com";
$hotelid="63de6f5475f1c18e8a3671ff";
$urlIMG = "$apiURL/images/$hotelid";
$urlHOTEL = "$apiURL/hotels/$hotelid";
$urlPAGES = "$apiURL/pages/$hotelid";
// $urlHOTEL = "http://localhost:3000/hotels/636e5087dc5793d36530da06";
// $urlPAGES = "http://localhost:3000/pages/636e5087dc5793d36530da06";

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
//  print_r($dataIMG);
//  print_r($dataHOTEL);
// print_r($dataPAGES);
$_SESSION['dataIMG']=$dataIMG;
$_SESSION['dataHOTEL']=$dataHOTEL;
$_SESSION['dataPAGES']=$dataPAGES;

// print_r(($dataIMG));
// print_r(($dataHOTEL));
// print_r(($dataPAGES));

