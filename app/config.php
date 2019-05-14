<?php
	//Caminho para a raiz
	define("ABSPATH",dirname(__FILE__));
	
	//Caminho para a pasta de uploads
	define('HOME_URI','forumsi.matheus.com');

	//Host
	define('HOSTNAME','localhost');
	
	//Data Base User Name
	define('DBUSER',$_ENV['DBUSERNAME']);

	//Data Base password
	define('DBPASSWORD',$_ENV['DBPASSWORD']);

	define('DEBUG',true);
	include ABSPATH."/load.php";
?>
