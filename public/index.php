<?php

use website\helpers\View;

require "../bootstrap.php";

$url = substr($_SERVER['REQUEST_URI'], 1);

$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'pages';

$action = isset($url[1]) && $url[1] ? $url[1] : 'index';


$param = isset($url[2]) && $url[2] ? $url[2] : null;


if(!class_exists($controller = "website\controllers\\" . ucfirst($controller) . 'Controller')){
    (new View('/site/pages/404.php'))->render();
    return;
}

if(!method_exists($controller, $action)){
    $action = 'index';
    $param = $url[1];
}

$response = call_user_func_array([new $controller, $action], [$param]);

echo $response;

