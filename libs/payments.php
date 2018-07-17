<?php
require_once(LIB_PATH.DS.'database.php');

class Payments extends DatabaseObject{

	protected static $table_name = "payments";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $payments_id;
	public $fk_bank_accounts_id;
	public $payments_amount;
	public $payments_note;
	public $paid;
	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }


   public function is_paid($expense_is){
      $sql = "SELECT 
      SUM(`payments_amount`) AS paid
      FROM `payments` 
      JOIN payments_expenses ON payments_id = fk_payments_id 
      JOIN expenses on `expenses_id` = `fk_expenses_id` AND expenses_id = {$expense_is}";
  
      $paid = Payments::find_by_sql($sql);
      foreach($paid as $pay):
      	return $pay ->paid;
   	  endforeach; 
    	


    }

}

?>