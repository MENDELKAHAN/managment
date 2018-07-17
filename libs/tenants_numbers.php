<?php
require_once(LIB_PATH.DS.'database.php');

class TenantsNumbers extends DatabaseObject{
	protected static $table_name = "tenants_numbers";

	public $tenants_numbers_id;
	public $tenants_numbers_number;
	public $tenants_numbers_note;
	public $tenants_numbers_active;
	public $fk_tenants_id;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }



  


}
?>
