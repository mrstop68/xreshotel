<?php
$apiURL="http://localhost:3000"; 
// $hotelid="64b8f725c58c57d02b2ff3ad"; //tema3
$hotelid="6479f33add6a381872c3207e"; //tema 2 

// $apiURL="https://micro-panel-api.resclick.com"; 
// $hotelid="6450bc8547b84b85dfa4150f";

$panelURL="https://webpanel.resclick.com";
$imagesLink='https://webpanel-cdn1.resclick.com/';


$urlIMG = "$apiURL/images/$hotelid";
$urlHOTEL = "$apiURL/hotels/$hotelid";
$urlPAGES = "$apiURL/pages/$hotelid";
$urlCODES = "$apiURL/code/$hotelid";
$urlLANG = "$apiURL/language/$hotelid";


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $urlIMG);
$resultIMG = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlHOTEL);
$resultHOTEL = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlPAGES);
$resultPAGES = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlCODES);
$resultCODES = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, $urlLANG);
$resultLANG = curl_exec($ch);
curl_close($ch);


$dataIMG = json_decode($resultIMG);
$dataHOTEL = json_decode($resultHOTEL);
$dataPAGES = json_decode($resultPAGES);
$dataCODES = json_decode($resultCODES);
$dataLANG = json_decode($resultLANG);

 error_reporting(0);
   class FileOperation {
      public static function writeToFile($filename, $content) {
        if(file_exists($filename)) {
          $file = fopen($filename, 'w');
          fwrite($file, $content);
          fclose($file);
        } else {
          touch($filename);
          $file = fopen($filename, 'w');
          fwrite($file, $content);
          fclose($file);
        }
      }
    }
    FileOperation::writeToFile('widget.php', $dataCODES->widget);
    FileOperation::writeToFile('global_html.php', $dataCODES->html);
    FileOperation::writeToFile('global_style.css', $dataCODES->css);
    FileOperation::writeToFile('global_script.js', $dataCODES->js);

