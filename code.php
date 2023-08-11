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
//images apisindeki aktif sayfa resimlerini tespit etme
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

        //dil apisindeki verileri (categoryimg) dile göre listeleme
            foreach($dataLANG as $langContent){
                if((empty($langURL)) && (strtolower($langContent->LangCode))=='mainlang') {
                    $seoData=$langContent;
                    break;
                }else if ($langURL==(strtolower($langContent->LangCode))){
                    $seoData=$langContent;
                    break;
                }
            }

    // Bu class otele ait tüm dildeki sayfalar çekildikten sonra buraya gönderilen dile göre sayfaları filtreleyip geri gönderir
    class FilterPagesToLangCode{
        private $parameterValue;
        
        function __construct($parameterValue)
        {
            $this->parameterValue = $parameterValue;
        }
        function menupageSelect($obj){
            return ($obj->lang==$this->parameterValue);
        }
        function issetTopMenu($obj){
            return ($obj->subpage==$this->parameterValue);
        }
        function groupNumberinContent($data){
            return ($data->sectionGroup==$this->parameterValue);
        }
        
    };
    class ImagesData{
        function isSlider($slidersImg){
            return ($slidersImg->slider==true);
        }
    }

        
?>