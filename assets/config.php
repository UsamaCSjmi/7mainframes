<?php

// Development Settings Usama
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/7mainframes');
define('SITE_PATH','http://localhost/development/7mainframes');
define('BASE_PATH','/development/7mainframes');

// Development Settings Danish
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/7mainframes');
// define('SITE_PATH','http://localhost/7mainframes');
// define('BASE_PATH','/7mainframes');


// Production Settings
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT']);
// define('SITE_PATH','https://development.7mainframes.com');
// define('BASE_PATH','https://development.7mainframes.com');


$url = $_SERVER['REQUEST_URI'];
$current_page = basename($url);

$current_page_arr = explode('.',$current_page);
$current_page = $current_page_arr[0];

if($current_page == "7mainframes" || $current_page == "index" ||$current_page == ""){
    $current_page = "home";
}
$description = array(
    "home" => "7mainframes | Home",
    "about" => "7mainframes | About",
    "seo" => "7mainframes | SEO",
    "ppc" => "7mainframes | PPC",
    "web-development" => "7mainframes | Web Development",
    "social-media-marketing" => "7mainframes | Social Media Marketing",
    "contact" => "7mainframes | Contact"
);
$title = array(
    "home" => "7mainframes | Home",
    "about" => "7mainframes | About",
    "seo" => "7mainframes | SEO",
    "ppc" => "7mainframes | PPC",
    "web-development" => "7mainframes | Web Development",
    "social-media-marketing" => "7mainframes | Social Media Marketing",
    "contact" => "7mainframes | Contact"
);
?>