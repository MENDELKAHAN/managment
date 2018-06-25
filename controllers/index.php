<?php

/**
 * 
 */
class Index extends Controller{

	
	function __construct()
	{

		parent::__construct();


		if(Session::get('logedIn') == false){

			redirect_to('login');
		}
		
		$this -> view-> render("index/index");
	
	}


	public function logout()
	{

		Session::destroy();
		// redirect_to("login");
				header('location: index');


	}

	

}
?>