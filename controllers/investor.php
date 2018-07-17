<?php

/**
 * 
 */
class Investor extends Controller{

	
	function __construct($page="")
	{
		parent::__construct();

		if(Session::get('logedIn') == false){
			redirect_to('login');
		}
		$this -> view  -> js = array('investor/js/script.js');
	}


	public function index()
	{
		$class_name = "Investors";
		$multi = $class_name::find_all(); 
   		$this-> view -> result_array = $multi;
		$this -> view-> render("investor/index");
	}


	public function create()
	{
          $this-> model-> create();
	}





	

}
?>