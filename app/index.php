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

$params = array_slice($pathT,2);
if(!class_exists($class,false)||(!method_exists(new $class,$method))){
	$class = "ErrorController";
	$method = "notFound";
}
echo "<pre>";
var_dump(getenv("DBPASSWORD"));
echo "</pre>";
call_user_func_array(array(new $class,$method),$params);

?>
