<?php

class ManagerBankAccounts extends Bank{


	protected static $table_name = "bank_accounts";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();
	
	public $bank_accounts_id ;
	public $bank_accounts_name ;
	public $bank_accounts_number ;
	public $bank_account ;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

}
?>


