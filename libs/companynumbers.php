<?php

class CompanyNumbers extends DatabaseObject{
	protected static $table_name = "company_numbers";

	public $company_numbers_id;
	public $company_numbers_number;
	public $company_numbers_description;
	public $company_numbers_active;
	public $fk_company_id;

	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

     public function company_active_number($company)
    {
    	$sql = "SELECT * FROM `company_numbers` WHERE `company_numbers_active` =1 AND `fk_company_id`= ".$company;
    	$result = self::find_by_sql($sql);
    	if($result){
	    	return $result[0]->company_numbers_number; 
    }
    return false;
    } 

}
?>

