<?php
require_once("config.php");
$path = isset($_GET['path'])?$_GET['path']:NULL;
$pathT = explode("/",$path);
if(empty($pathT[0])){
	$pathT[0] = "HomeController";
}
if(empty($pathT[1])){
	$pathT[1] = "Index";
}
require_once(ABSPATH."/controller/HomeController.php");
$method = $pathT[1];
$pathT[0]::$method();

?>
