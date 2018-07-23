<?php

/**
 * 
 */
class Test extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();
	}

	public function index()
	{
		$this -> view-> render("test/index");

	}

	

}
?>