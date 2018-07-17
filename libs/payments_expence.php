<?php
require_once(LIB_PATH.DS.'database.php');

class PaymentsExpence extends DatabaseObject{

	protected static $table_name = "payments_expenses";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();
	public $fk_payments_id;
	public $fk_expenses_id;
	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
   }
}



?>