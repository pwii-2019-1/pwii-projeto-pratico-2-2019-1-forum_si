<?php
require_once("config.php");
require_once(ABSPATH."/functions/global-functions.php");
$path = isset($_GET['path'])?$_GET['path']:NULL;
$pathT = explode("/",$path);
if(empty($pathT[0])){
	$pathT[0] = "home";
}
if(empty($pathT[1])){
	$pathT[1] = "Index";
}
require_once(ABSPATH."/controller/HomeController.php");
$class = ucfirst($pathT[0]."Controller");
$method = $pathT[1];

if(!class_exists($class,false)){
	$class = "ErrorController";
	$method = "notFound";
}
call_user_func(array(new $class,$method));

?>
