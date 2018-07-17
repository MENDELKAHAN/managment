<?php
require_once(LIB_PATH.DS.'database.php');

class SuppliersContract extends DatabaseObject{


	protected static $table_name = "suppliers_contract";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $suppliers_contract_id;
	public $suppliers_contract_start_date;
	public $suppliers_contract_end_date;
	public $suppliers_contract_price_per_month;
	public $fk_suppliers_id;
	public $suppliers_contract_active;
	public $fk_company_id;
		


	function __construct() {
       $this-> db_fields = $this->getColumnNames();
   }

	
}
?>