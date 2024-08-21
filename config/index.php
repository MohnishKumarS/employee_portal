<?php
// ROOT
define("BASE_PATH", getcwd());
define("BASE_URL", "http://localhost/project/employee_portal/");


$url = "http://localhost/project/employee_portal/";
$title = "Employment Portal | eWallHost";

// layout
define('HEADER',$_SERVER['DOCUMENT_ROOT'].'/project/employee_portal/layouts/header.php');
define('FOOTER',$_SERVER['DOCUMENT_ROOT'].'/project/employee_portal/layouts/footer.php');

// DB
define('DB_CONNECT',$_SERVER['DOCUMENT_ROOT'].'/project/employee_portal/Database.php');

define('MODEL_PATH',$_SERVER['DOCUMENT_ROOT'].'/project/employee_portal/Model');
// echo HEADER;
// echo $_SERVER['DOCUMENT_ROOT'];
//BASE URL -> FOR LINK CSS
// $uri = $_SERVER['REQUEST_URI'];
// echo $uri;
// if(isset($uri) && $uri !== null){
//     $uri = substr($uri, 1);
//     $uri = explode('/', $uri);
//     $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0];
// }else{
//     $uri = null;
// }
// define("BASE_URL", $uri);

// echo BASE_URL;