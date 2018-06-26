<?php

/**
 * 
 */
class Login extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
		
		// $this -> view -> msg = "login page";

	}

	public function index()
	{
		$this -> view-> render("login/index");
	}


	public function run()
	{
          $this-> model-> run();
	}



}
?>