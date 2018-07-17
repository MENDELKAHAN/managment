<?php

/**
 * 
 */
class Investorview extends Controller{

	
	function __construct()
	{
		parent::__construct();
		if(Session::get('logedIn') == false){
			redirect_to('login');
		}


		$this -> view  -> js = array('investorview/js/script.js');	
	}


	public function index($investor="")
	{
		$investor_object = new Investors($investor);
		$investor_array = $investor_object-> find_by_id($investor);


		$this -> view -> investors_id = $investor_array -> investors_id;
	    $this -> view -> investors_company_name = $investor_array -> investors_company_name;
		$this -> view -> investors_title = $investor_array -> investor_title;
		$this -> view -> investors_fname = $investor_array -> investors_fname;
		$this -> view -> investors_lname = $investor_array -> investors_lname;
		$this -> view -> investors_foreign = $investor_array -> investors_foreign;
		$this -> view -> fk_manager_account_id = $investor_array -> fk_manager_account_id;
		$this -> view -> investors_active = $investor_array -> investors_active;


		
		$this -> view -> investors_email = InvestorsEmails::investors_active_emails($investor);
		$this -> view -> investors_number = InvestorContactNumbers::investors_active_number($investor);






		// $this -> view -> total_properties = PropertyUnits::get_total_unit_properties($investor);
		// $this -> view -> cash_by_us_db = Investors::cash_by_us($investor);
		$this -> view -> total_companies = Companies::get_total_companies($investor);
		$this -> view -> companies_details = Companies::companies($investor);
		$this -> view-> render("investorview/index");
	}

	
}
?>