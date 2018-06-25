<?php

	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

	// change based on current server can use php function $_SERVER['DOCUMENT_ROOT'] to find this info
	// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS. 'volume1'.DS.'Web'.DS.'cleaning_managment'.DS);


	//local server
	defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'cleaning');

	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes' .DS);
	// defined('URL')  ? null : define('URL', 'http://192.168.1.102/cleaning_managment/');
	defined('LIB')  ? null : define('LIB', SITE_ROOT .DS.'libs');



	
	$list = [
		'config',
		'functions'
	];

	foreach ($list as $key) {
		require_once(LIB_PATH.DS.$key.'.php');
	}


	$lib_list = [
		'Controller',
		'Bootstrap',
		'View',
		'Model',
		'Session'
	];

	foreach ($lib_list as $key) {
		require_once(LIB.DS.$key.'.php');
	}


	// require_once(SITE_ROOT.DS.'languages'.DS.$_SESSION["lang"].'.php');
	require_once(SITE_ROOT.DS.'languages'.DS.'en.php');

	//call all classes
	
	// UserEmailInfo
	// require_once(CLASS_PATH.DS.'Users.php');
	// require_once(CLASS_PATH.DS.'Password.php');

	

	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	DatabaseObject::set_database($db);

	$sessions= new Session();



	$pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	
?>