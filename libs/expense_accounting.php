<?php
require_once(LIB_PATH.DS.'database.php');

class ExpenseAccountingCategories extends DatabaseObject{

	protected static $table_name = "expense_accounting";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $expense_accounting_id;
	public $expense_accounting_name;
	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

}

?>


