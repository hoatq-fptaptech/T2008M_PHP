<?php
// làm bộ định tuyến (routes)
include_once "controllers/Controller.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new Controller();

switch ($route){
    case "listsv": $controller->listSV();break;
    case "themsv": $controller->themSV();break;
    case "luusv": $controller->luuSV();break;
    case "aboutus": $controller->aboutUs();break;
    default: $controller->home();
}
