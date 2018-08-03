<?php

/**
 * 
 */
class Company extends Controller{

	function __construct($page="")
	{
		parent::__construct();

		if(Session::get('logedIn') == false){
			redirect_to('login');
		}
		$this -> view  -> js = array('company/js/script.js');
	}


	public function index()
	{
		$class_name = "Companies";
		$company =  new $class_name;
		$this -> view -> result_array = $company -> find_all(); 
   		$this -> view -> manager_acounts = ManagerBankAccounts::find_all();
		$this -> view->  render("company/index");

	}


	public function create()
	{
        $this-> model-> create();
	}

	
	

	

}
?>