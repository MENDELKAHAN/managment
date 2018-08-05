<?php

/**
 * 
 */
class AdminView extends View
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function render($name='')
	{
		include'views/head.php';
	    include 'views/header.php';
	    include 'views/nav.html';  
	    include 'languages/en.php';
		require "views/".$name .".php";
		
		}
}
?>