<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/7mainframes');
define('SITE_PATH','http://localhost/development/7mainframes');
define('BASE_PATH','/development/7mainframes');
// define('DB_NAME', '7mainframes'); 
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');

$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);
if($current_page == "7mainframes" || $current_page == "index" ||$current_page == ""){
    $current_page = "home";
}
$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];
// die($current_page);
$description = array(
    "home" => "7mainframes | Home"
);
$title = array(
    "home" => "IMC Consultancy | Home"
);
?>