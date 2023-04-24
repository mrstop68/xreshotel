<?php
session_start();
include_once ('api.php');

if (!isset($_GET['page'])) {
    $_GET['page'] = '/site/';
}
$locationURL=$_GET['page'];
// echo $_GET['page'].'<br>';
foreach($dataPAGES as $key=>$value){
        // echo $value->link.':';
        // echo $value->linkedpage.'.php'.'<br>';
    // if($_GET['page']==$value->link){
    //     require_once $value->linkedpage.'.php';
    // }
    if(isset($value->linkedpage)){
        $themeNumber=explode('_',$value->linkedpage)[1];
        switch ($_GET['page']) {
            case $value->link:
                require_once 'tema'.$themeNumber.'/'.$value->linkedpage.'.php';
                break;
            };
        if($_GET['page'] == $value->link){
            break;
        }
    }
    
};

session_unset();
session_destroy();