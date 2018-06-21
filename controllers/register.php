<?php

/**
 * 
 */
class Register extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
		
		// $this -> view -> msg = "login page";

		$this -> view-> render("register/index");


	}


	// public function run()
	// {
 //          $this-> model-> run();
	// }


		


	

}
?>