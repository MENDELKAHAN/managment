<?php

class tenantPaymentsReceived extends DatabaseObject{

	protected static $table_name = "tenant_payments_received";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $tenant_payments_received_id;
	public $tenant_payments_receivedt_amount;
	public $tenant_payments_received_date;
	public $fk_contract_id;
	
	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>