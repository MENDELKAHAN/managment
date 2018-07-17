<?php

class CompanyBanks extends Bank{


	protected static $table_name = "company_banks";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();
	
	public $company_banks_id;
	public $company_banks_name;
	public $company_banks_number;
	public $company_banks_sortcode;
	public $fk_company_id;
	public $company_banks_active;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

   public function find_by_company_active($company='')
   {
   	$sql ="select * from company_banks  where fk_company_id = ". $company ." AND company_banks_active = 1";
 	// error testing 
   	return self::find_by_sql($sql);
   }



 
}
?>


