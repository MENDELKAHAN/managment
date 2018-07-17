<?php
require_once(LIB_PATH.DS.'database.php');

class CompanyInvestors extends DatabaseObject{

	protected static $table_name = "company_investors";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $fk_company_id;
	public $fk_investors_id;
	public $company_investors_percentage;
	public $company_investors_deduct_mortgage;

	
	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

	public static function get_investors($company_id){
		$sql = "select * from company_investors where fk_company_id = {$company_id}";
		$result = CompanyInvestors::find_by_sql($sql);
		return $result;
	}
}

?>