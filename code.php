<?php
// pages apisindeki içerik(content) alanlarını sayfaya göre listeleme
if((empty($_GET['lang']))){
    foreach($dataPAGES as $pages){
        if((strtolower($dataHOTEL->LangCode)==strtolower($pages->lang)) && ($pages->link==$locationURL)){ //url de dil kodu yoksa 
            $activePageName=$pages->pagename; //aktif sayfayı bulup aşağıda resimleri sayfaya göre süzme
            $activePage=$pages; //ilgili sayfadaki tüm bilgiler içerik, link,vs
        }
    }
}
else{
    foreach($dataPAGES as $pages){
        if(($_GET['lang']==strtolower($pages->lang)) && ($pages->link==$locationURL)){ // url de dil kodu varsa
            $activePageName=$pages->pagename; //aktif sayfayı bulup aşağıda resimleri sayfaya göre süzme
            $activePage=$pages; //ilgili sayfadaki tüm bilgiler içerik, link,vs
        }
    }
}
// foreach($dataPAGES as $pages){
   
//     if((empty($activeLang)) && $pages->link==$locationURL){ //url de dil kodu yoksa 
//         $activePageName=$pages->pagename; //aktif sayfayı bulup aşağıda resimleri sayfaya göre süzme
//         $activePage=$pages; //ilgili sayfadaki tüm bilgiler içerik, link,vs
//     }else if((isset($activeLang)) && ($activeLang==$pages->lang) && $pages->link==$locationURL){ // url de dil kodu varsa
//         $activePageName=$pages->pagename; //aktif sayfayı bulup aşağıda resimleri sayfaya göre süzme
//         $activePage=$pages; //ilgili sayfadaki tüm bilgiler içerik, link,vs
//     }
// }
//  content dizindeki order a göre sıralama
usort($activePage->content,function($first,$second){
    return $first->order - $second->order;
});
//images apisindeki Anasayfa resimleri
        $newArrayImg=[];
        $filtered_img = array_filter(
        $dataIMG,
        function($objimg){
            return (in_array($GLOBALS['activePageName'],$objimg->pagesimg));
        });
        //aşağıda, yukarıda seçilen resimler arasında index sıralaması karışık olduğu için
        //tekrar index i 0 dan başlatıp birer artırarak diziye eklemek için yazıldı
        foreach($filtered_img as $newArray){
            array_push(($newArrayImg), $newArray);
        };
    $rr= count(($newArrayImg));
    $randIMG=rand(0,$rr-1);

     if(isset($_GET['lang'])) $langURL=$_GET['lang'];
?>