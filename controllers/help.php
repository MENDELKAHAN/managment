<?php

/**
 * 
 */
class Help extends Controller{

	
	function __construct()
	{
		parent::__construct();
		echo "we are in help";
	}


	public function index()
	{
		echo "we are in help";
		// $this -> view-> render("help/index");	}
	}
		

		// require 'models/help_model.php';
		// $model =  new Help_Model();
	
}

?>