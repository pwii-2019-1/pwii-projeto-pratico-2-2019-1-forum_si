<?php
	//Caminho para a raiz
	define("ABSPATH",dirname(__FILE__));
	
	//Caminho para a pasta de uploads
	define('HOME_URI','forumsi.matheus.com');

	//Host
	define('HOSTNAME','localhost');
	
	//Data Base User Name
	define('DBUSER',getenv("DBUSERNAME"));

	//Data base name
	define('DBNAME','forumsi');

	//Data Base password
	define('DBPASSWORD',getenv('DBPASSWORD'));

	define('DEBUG',true);
	include ABSPATH."/load.php";
?>
