<?php

/**
 * 
 */
class Companyview extends Controller{

	
	function __construct()
	{
		parent::__construct();
		if(Session::get('logedIn') == false){
			redirect_to('login');
		}


		$this -> view  -> js = array('companyview/js/script.js');	
	}


	public function index($company="")
	{

	$company_object = new Companies();
	$company_array = $company_object-> find_by_id($company);
	$this -> view -> company_id = $company_array -> company_id;
	$this -> view -> company_legal_name_db = $company_array -> company_legal_name;
	$this -> view -> company_foreign_db =    $company_array -> 	company_foreign;
    $php_date = explode('-', date($company_array -> company_financial_year));
    $new_date = $php_date[2].'/'.$php_date[1];
	$this -> view -> company_financial_year = $new_date;
	$this -> view -> fk_company_payment_period_id =	$company_array -> fk_company_payment_period_id;
	$this -> view -> company_number = $company_array -> company_number	;
	$this -> view -> company_vat_number =	$company_array -> company_vat_number;
	$this -> view -> company_address_number =	$company_array -> company_address_number;
	$this -> view -> company_address_line_1 =$company_array -> company_address_line_1	;
	$this -> view -> company_address_line_2 =$company_array -> company_address_line_2	;
	$this -> view -> company_address_town =	$company_array -> company_address_town ;
	$this -> view -> company_address_postcode =	$company_array -> company_address_postcode;
	$this -> view -> company_address_country =	$company_array -> company_address_country;
	$this -> view -> company_add_commission = $company_array -> company_add_commission;
	$this -> view -> company_layout_without_consent = $company_array -> company_layout_without_consent;
	$this -> view -> bank_ref = $company_array -> company_bank_ref;
	$this -> view -> fk_manager_account_id = $company_array -> fk_manager_account_id; 

	$company_banks_object = new CompanyBanks();
	$company_banks = $company_banks_object-> find_by_company_active($company);
if(isset($company_banks[0])){

	$this -> view ->  company_banks_id = $company_banks[0] -> company_banks_id;
	$this -> view ->  company_banks_name =$company_banks[0] -> company_banks_name;
	$this -> view ->  company_banks_number = $company_banks[0] -> company_banks_number;
	$this -> view ->  company_banks_sortcode =$company_banks[0] -> company_banks_sortcode;
}else{
	$this -> view ->  company_banks_id = "";
	$this -> view ->  company_banks_name ="";
	$this -> view ->  company_banks_number = "";
	$this -> view ->  company_banks_sortcode ="";
}
   	
   	$this -> view -> manager_acounts = ManagerBankAccounts::find_all();



	$this -> view -> company_email = CompanyEmails::company_active_emails($company);
	$this -> view -> company_contact_number = CompanyNumbers::company_active_number($company); 



	$this -> view -> total_properties = Companies::get_total_unit_properties($company);
	$this -> view -> cash_by_us_db = Companies::cash_by_us($company);
	// $this -> view -> total_companies = Company::get_total_companies($investor);
	// $this -> view -> companies_details = Company::companies($investor);
	$this -> view -> invetors_details = Companies::investors($company);
	$this -> view-> render("companyview/index");
	}

	
}
?>