<?php
require_once(LIB_PATH.DS.'database.php');

class Expenses extends DatabaseObject{

	protected static $table_name = "expenses";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $expenses_id;
	public $fk_supplier_id;
	public $expences_amount;
	public $fk_properties_id;
	public $fk_unit_id;
	public $fk_company_id;
	public $fk_expense_categories_id;
	public $expenses_description;
	public $fk_period_id;
	public $expenses_date;
	public $expenses_latest_payment_date;
	public $charge_to_company;
	public $fk_period_id;


	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>