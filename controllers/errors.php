<?php

/**
 * 
 */
class Errors extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
		
		$this -> view -> msg = "this is a error message";

		$this -> view-> render("errors/index");


	}

	

}
?>