<?php

/**
 * 
 */
class View
{
	
	function __construct()
	{
	
	}

	public function render($name='')
	{
		require "views/".$name .".php";
		// include ("includes/initialize.php");

	// if (!isset($_SESSION["user"])){
	// 	require 'views/login.php';
	// }else{

		// include(LIB_PATH.'head.html');
		// include (LIB_PATH.'header.html');
		// require 'views/header.php';
		// include (LIB_PATH.'top_navigation_menu.html');
		// include (LIB_PATH.'nav.html');
		// include(LIB_PATH."footer.html");
		}
	// }
}
?>