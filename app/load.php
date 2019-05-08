<?php
	if(!defined('ABSPATH')) exit;
	session_start();

	if(!defined('DEBUG') || DEBUG === false){
		error_reporting(0);
		init_set("display_errors",0);
	}else {
		// Mostra todos os erros
		error_reporting(E_ALL);
		ini_set("display_errors", 1); 
	
	}

	include ABSPATH."/functions/global-functions.php";
?>
