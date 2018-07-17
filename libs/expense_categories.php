<?php
require_once(LIB_PATH.DS.'database.php');

class ExpenseCategories extends DatabaseObject{

	protected static $table_name = "expense_categories";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $expense_categories_id;
	public $expense_categories_name;
	public $fk_expense_accounting_id;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>


