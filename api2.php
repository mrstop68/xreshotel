<?php
$apiURL="http://localhost:3000";
$hotelid="6421a122a02049bc8f67f45b";
// $apiURL="https://micro-panel-api.resclick.com";
// $hotelid="6435615d8c823b56ff0899de";
$panelURL="https://webpanel.resclick.com";

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
   //    //widget print to file
   //    if(file_exists('widget.php') && (isset($dataCODES->widget))) {
   //       $dosya = fopen('widget.php', 'w');
   //       fwrite($dosya, $dataCODES->widget);
   //       fclose($dosya);
   //    } else if(isset($dataCODES->widget)){
   //       touch('widget.php');
   //       $dosya = fopen('widget.php', 'w');
   //       fwrite($dosya, $dataCODES->widget);
   //       fclose($dosya);
   //    }
   //  //html  print to file
   //  if(file_exists('global_html.php') && (isset($dataCODES->html))) {
   //      $dosya = fopen('global_html.php', 'w');
   //      fwrite($dosya, $dataCODES->html);
   //      fclose($dosya);
   //   } else if(isset($dataCODES->html)){
   //      touch('global_html.php');
   //      $dosya = fopen('global_html.php', 'w');
   //      fwrite($dosya, $dataCODES->html);
   //      fclose($dosya);
   //   }
   //   //css  print to file
   //  if(file_exists('global_style.css') && (isset($dataCODES->css))) {
   //    $dosya = fopen('global_style.css', 'w');
   //    fwrite($dosya, $dataCODES->css);
   //    fclose($dosya);
   // } else if(isset($dataCODES->css)){
   //    touch('global_style.css');
   //    $dosya = fopen('global_style.css', 'w');
   //    fwrite($dosya, $dataCODES->css);
   //    fclose($dosya);
   // }
   // //js  print to file
   // if(file_exists('global_script.js') && (isset($dataCODES->js))) {
   //    $dosya = fopen('global_script.js', 'w');
   //    fwrite($dosya, $dataCODES->js);
   //    fclose($dosya);
   // } else if(isset($dataCODES->js)){
   //    touch('global_script.js');
   //    $dosya = fopen('global_script.js', 'w');
   //    fwrite($dosya, $dataCODES->js);
   //    fclose($dosya);
   // }

   // // if(isset($dataCODES->widget)){
   // //    if(!file_exists('widget.php')){
   // //       touch('widget.php');
   // //    }
   // //    $dosya = fopen('widget.php', 'w');
   // //    fwrite($dosya, $dataCODES->widget);
   // //    fclose($dosya);
   // // }
   
   // // if(isset($dataCODES->html)){
   // //    if(!file_exists('global_html.php')){
   // //       touch('global_html.php');
   // //    }
   // //    $dosya = fopen('global_html.php', 'w');
   // //    fwrite($dosya, $dataCODES->html);
   // //    fclose($dosya);
   // // }
   
   // // if(isset($dataCODES->css)){
   // //    if(!file_exists('global_style.css')){
   // //       touch('global_style.css');
   // //    }
   // //    $dosya = fopen('global_style.css', 'w');
   // //    fwrite($dosya, $dataCODES->css);
   // //    fclose($dosya);
   // // }
   
   // // if(isset($dataCODES->js)){
   // //    if(!file_exists('global_script.js')){
   // //       touch('global_script.js');
   // //    }
   // //    $dosya = fopen('global_script.js', 'w');
   // //    fwrite($dosya, $dataCODES->js);
   // //    fclose($dosya);
   // // }


   //  function writeToFile (string $filename, string $content) {
   //    if(file_exists($filename) && isset($content)) {  
   //        $file = fopen($filename, 'w');
   //        fwrite($file, $content);
   //        fclose($file);
   //    } else if(isset($content)) {
   //        touch($filename);
   //        $file = fopen($filename, 'w');
   //        fwrite($file, $content);
   //        fclose($file);
   //    };
   //  };

   //  writeToFile('global_script.js',$dataCODES->js);
   //  writeToFile('global_style.css',$dataCODES->css);
   //  writeToFile('global_html.php',$dataCODES->html);
   //  writeToFile('widget.php',$dataCODES->widget);

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