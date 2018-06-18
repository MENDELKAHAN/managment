<?php

/**
 * 
 */
class Errors extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
		echo "Page not found:  $page";
		$this -> view-> render("header.php");
	}

	

}
?>