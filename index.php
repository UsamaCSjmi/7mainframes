<?php
include_once("assets/config.php");
$request = $url;
$router = str_replace(BASE_PATH,'',$request);

if($router == '/'){
    include_once('home.php');
}
elseif($router == '/about'){
    include_once('about.php');
}
else if($router =='/contact'){
    include_once('contact.php');
}
else{
    include_once('404.php');
}

// echo $router;
?>