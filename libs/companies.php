<?php

/* Companies class
 *
 *
*/

class Companies extends DatabaseObject{

	protected static $table_name = "company";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $company_id;
	public $company_legal_name;
	public $company_number;
	public $company_vat_number;
	public $company_address_number;
	public $company_address_line_1;
	public $company_address_line_2;
	public $company_address_town;
	public $company_address_postcode;
	public $company_address_country;
	public $company_add_commission;
	public $company_layout_without_consent;
	public $company_foreign;
	public $company_financial_year;
	public $fk_company_payment_period_id;
	public $company_bank_ref;
	public $fk_manager_account_id;

	
	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }


	// total companies, invesor is part of
   	public static function get_total_companies($investor){
		$sql = "SELECT * FROM `company` C JOIN company_investors CI ON CI.fk_company_id = C.company_id AND CI.fk_investors_id =".$investor;
		$result_set = self::$database->query($sql);
        return $result_set->num_rows;
	}

	public static function companies($investor='')
	{
		$sql = "SELECT * FROM company JOIN company_investors ON company.company_id = company_investors.fk_company_id JOIN investors ON investors.investors_id = company_investors.fk_investors_id where company_investors.fk_investors_id = $investor";
		$result =  DatabaseObject::plain_sql($sql);
		$array_result = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$secondary = array('company_legal_name' => $row["company_legal_name"], 
					'company_investors_percentage' => $row["company_investors_percentage"],
					'fk_company_id' => $row["fk_company_id"] );
				$array_result[] = $secondary;
			}
			return $array_result;
		}else{
			return false;
		}
	}

	public function investors($company='')
	{
		$sql = "SELECT * FROM investors I 
		JOIN company_investors CI ON I.investors_id = CI.fk_investors_id
		where CI.fk_company_id = $company";
		$result =  DatabaseObject::plain_sql($sql);
		$array_result = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$secondary = array('investor_title' => $row["investor_title"], 
					'investors_fname' => $row["investors_fname"],
					'investors_lname' => $row["investors_lname"],
					'company_investors_percentage' => $row["company_investors_percentage"],
					'investors_id' => $row["investors_id"] );

				$array_result[] = $secondary;
		}
		
				return $array_result;
	}	else{
		return false;
	}
}

// get total property units for a company
     public static function get_total_unit_properties($company){
		$sql = "SELECT property_units_id FROM company C
		
		Join properties P ON P.properties_id = C.company_id
		JOIN property_units PU ON PU.fk_property_id = P.properties_id AND C.company_id = ". $company;
		$result_set = self::$database->query($sql);
        return $result_set->num_rows;

}


public function cash_by_us($company)
	{


		$sql ="SELECT (R.rent - E.expense) AS cash FROM
(
	SELECT COALESCE(SUM(TPR.`tenant_payments_received_amount`),0) AS rent FROM `tenant_payments_received` TPR 
	JOIN tenant_contracts TC ON TC.tenant_contracts_id =  TPR.fk_contract_id
	JOIN tenants T On TC.fk_tenant_id = T.tenants_id
	JOIN property_units PU ON PU.property_units_id = T.fk_unit_id
	JOIN properties P ON P.properties_id = PU.fk_property_id
	JOIN company C ON C.company_id  = P.fk_company_id
	JOIN periods PE ON TPR.fk_periods_id = PE.periods_id 
	AND C.company_id = ".$company." 
	AND PE.periods_active = 1
) AS R,

(
	SELECT COALESCE(SUM(E.`charge_company_amount`),0) AS expense FROM `expenses` E
	JOIN company C ON C.company_id  = E.fk_company_id
	JOIN periods P ON E.fk_period_id = P.periods_id 
	AND P.periods_active = 1
	AND C.company_id = $company
) AS E";
	$result =  DatabaseObject::plain_sql($sql);
	$row = mysqli_fetch_assoc($result);
	return $row['cash'];

	} 

}



?>