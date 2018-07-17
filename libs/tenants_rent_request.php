<?php
require_once(LIB_PATH.DS.'database.php');

class TenantsRentRequest extends DatabaseObject{

	protected static $table_name = "tenants_rent_request";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $tenants_rent_request_id;
	public $tenants_rent_request_amount;
	public $tenants_rent_request_required_date;
	public $fk_tenant_id;



	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>