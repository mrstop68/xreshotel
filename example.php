<?php
session_start();
include_once ('api.php');
// print_r(($dataIMG));
// print_r(($dataHOTEL));
// print_r(($dataPAGES));


print_r($dataHOTEL->logo->logoname);
// print_r(explode('_',$str)[1]);
echo (($dataIMG)[0]->imgName);
echo ('<br>');
echo ('<br>');


$valuesHotel = array_values($dataHOTEL->categoryimg);
    foreach($valuesHotel as $val){
        //  echo strtolower(str_replace([' ','&','_','-','?','^','%'],'',$val));
            echo ' <button class="filter-button" data-filter="'.(str_replace([' ','&','_','-','?','^','%'],'',$val)).'">'.$val.'</button> ';
    }
    echo ('<br>');echo ('<br>');echo ('<br>');
    foreach($valuesHotel as $val){
        //  echo strtolower(str_replace([' ','&','_','-','?','^','%'],'',$val));
            echo $val;
    }
    echo ('<br>');echo ('<br>');echo ('<br>');
    
foreach($dataIMG as $img){
    //  echo strtolower(str_replace([' ','&','_','-','?','^','%'],'',$val));
        echo $img->imgName;
        echo ('<br>');
        // $test = array_search('slider', $dataIMG);
        // echo 'mm'.$test; 
}
$filtered_arr = array_filter(
    $dataIMG,
    function($obj){ 
     return $obj->slider==true;
    });
    print_r($filtered_arr);
    echo ('<br>');echo ('<br>');echo ('--------------------------------------');

    $filtered_img = array_filter(
        $dataIMG,
        function($objimg){ 
         return (in_array('home',$objimg->pagesimg));
        });
        print_r($filtered_img);

        echo ('<br>');echo ('--------------------------------------');echo ('<br>');

      foreach($dataIMG as $objimg){
            print_r(in_array('Anasayfa',$objimg->pagesimg));
        };



        echo ('<br>');echo ('--------------------------------------');echo ('<br>');
        foreach($filtered_img as $imagesname){
            echo $imagesname->imgName;
        }

        echo(count($filtered_img));
        if(isset($filtered_img[0]->imgName)) echo($filtered_img[0]->imgName);

        echo ('<br>');echo ('ss--------------------------------------');
        echo ('<br>');

        foreach($dataPAGES as $pages){
            foreach($pages->content as $content){
                echo($content->content);
            }
            
        }
        echo'----------------';
        foreach($dataPAGES as $pages){
            print_r($pages->link); echo'<br>';
        }
        //istenilen linkteki içerikleri çekme 'konaklama', '/', 'restoran' vs.
        foreach($dataPAGES as $pages){
            if($pages->link=='konaklama'){
                foreach($pages->content as $content){
                    echo($content->content);
                }
            }
        }
    // $filtered_page = array_filter(
    //     $dataPAGES,
    //     function($objpages){
    //      return (array_search('Anasayfa',$objpages->pagename));
    //     });


    // foreach($dataPAGES as $pages){
    //     foreach($pages->content as $content){
    //         echo($content->content);
    //     }
    // }
    // $array1=[
    //     [
    //         'isim'=>'musti',
    //         'soyisim'=>'kusti'
    //     ],
    //     [
    //         'meslek'=>'computer engineer',
    //         'Age'=>'39'
    //     ]
    //     ];
        $array1=[
                'musti',
                'kusti',
                'meslek'=>'computer engineer',
                'Age'=>'39'
            
            ];
            echo '------------------......................';
     echo(array_search('musti',$array1));
    $sebzeler = array(
        "meyveler" => array("portakal", "elma", "çilek"),
        "sebzeler" => array("patates", "soğan", "havuç")
    );
     echo array_search('elma',$sebzeler['meyveler']);
session_unset();
session_destroy();