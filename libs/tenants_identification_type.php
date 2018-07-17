<?php
require_once(LIB_PATH.DS.'database.php');

class TenantsIdentificationType extends DatabaseObject{

	protected static $table_name = "tenants_identification_type";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $fk_tenants_identification_type_id;
	public $tenants_identification_type_name;
	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();


   }
}

?>


