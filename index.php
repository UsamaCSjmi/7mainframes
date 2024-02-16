<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);

if($router == '/' || $router == '/home'){
    include_once('home.php');
}
elseif($router == '/about'){
    include_once('about.php');
}
elseif($router == '/seo'){
    include_once('seo.php');
}
elseif($router == '/ppc'){
    include_once('ppc.php');
}
elseif($router == '/web-development'){
    include_once('web-dev.php');
}
elseif($router == '/social-media-marketing'){
    include_once('smm.php');
}
else if($router =='/contact'){
    include_once('contact.php');
}
else{
    include_once('404.php');
}
?>