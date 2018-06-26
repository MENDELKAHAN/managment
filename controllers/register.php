<?php

/**
 * 
 */
class Register extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
	}


	public function index()
	{
		$this -> view-> render("register/index");
	}

	public function create()
	{
          $this-> model-> create();
	}


		


	

}
?>