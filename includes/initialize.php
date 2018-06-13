<?php

	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

	// change based on current server can use php function $_SERVER['DOCUMENT_ROOT'] to find this info
	defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'home'.DS.'mkahan01'.DS.'public_www'.DS.'w1fma');

	//local server
	// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'PHP'.DS.'w1fma_titan');

	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
	defined('CLASS_PATH') ? null : define('CLASS_PATH', SITE_ROOT.DS.'classes');
	defined('LARGE_IMG_PATH') ? null : define('LARGE_IMG_PATH', SITE_ROOT.DS.'images'.DS."catalogue");

	$list = [
		'config',
		'functions',
		'sessions'
	];

	foreach ($list as $key) {
		require_once(LIB_PATH.DS.$key.'.php');
	}

	require_once(CLASS_PATH.DS.'Images.php');
	require_once(SITE_ROOT.DS.'languages'.DS.$_SESSION["lang"].'.php');

	$pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	
?>