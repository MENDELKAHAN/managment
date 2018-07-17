<?php

class PaymentPeriod extends DatabaseObject{


	protected static $table_name = "payment_periods";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();
	public $investors_payment_periods_id;
	public $investors_payment_periods_name;


	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

}
?>


