<?php
require_once(LIB_PATH.DS.'database.php');

class TenantsContract extends DatabaseObject{

	protected static $table_name = "tenant_contracts";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public tenant_contracts_id;
	public fk_tenant_contracts_type;
	public tenant_contracts_start_date;
	public tenant_contracts_end_date;
	public fk_tenant_contracts_frequency_of_payment_id, fk_rent_paid_by_id;
	public tenant_contracts_pets;
	public tenant_contracts_amount;
	public tenant_contracts_active;
	public tenant_contracts_total_adults;
	public tenant_contracts_total_children;
	public fk_tenant_id;

	
	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>