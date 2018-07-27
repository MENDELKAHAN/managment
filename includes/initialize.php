<?php

	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	//local server
	defined('SITE_ROOT') ? null : define('x', DS.'xampp'.DS.'htdocs'.DS.'managment');

	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes' .DS);
	defined('URL')  ? null : define('URL', 'http://localhost/managment');
	defined('LIB')  ? null : define('LIB', SITE_ROOT .DS.'libs');

	
	// call includes
	$list = [
		'config',
		'functions'
	];

	foreach ($list as $key) {
		require_once(LIB_PATH.$key.'.php');
	}


	// call main bib 
	// if class in missing it will be called from autolaod
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

	require_once(SITE_ROOT.DS.'languages'.DS.'en.php');

	// create db object
	$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	DatabaseObject::set_database($db);

	// Initialize sessions
	$sessions = new Session();
		
?>