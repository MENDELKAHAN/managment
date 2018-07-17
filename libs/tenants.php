<?php
require_once(LIB_PATH.DS.'database.php');

class Tenants extends DatabaseObject{

	protected static $table_name = "tenants";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $tenants_id;
	public $tenants_title;
	public $tenants_fname;
	public $tenants_lname;
	public $tenants_date_of_birth;
	public $fk_tenants_identification_type;
	public $tenants_identification_number;
	public $tenants_pay_in_arrears;
	public $tenants_active;
	public $fk_unit_id;

		

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>