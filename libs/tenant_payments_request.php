<?php
require_once(LIB_PATH.DS.'database.php');

class TenantPaymentsRequest extends DatabaseObject{

	protected static $table_name = "tenant_payments_request";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $tenant_payments_request_id;
	public $tenant_payments_request_amount;
	public $tenant_payments_request_required_date;
	public $fk_contract_id;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>