<?php
require_once(LIB_PATH.DS.'database.php');

class Suppliers extends DatabaseObject{


	protected static $table_name = "suppliers";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $suppliers_id;
	public $suppliers_company_name;
	public $suppliers_fname;
	public $suppliers_lname;
	public $suppliers_email;
	public $suppliers_contact_number_main;
	public $suppliers_contact_number_second;
	public $suppliers_address_number;
	public $suppliers_address_street_1;
	public $suppliers_address_street_2;
	public $suppliers_address_town;
	public $suppliers_address_postcode;
	public $suppliers_address_country;
	public $suppliers_active;
	public $fk_suppliers_category;
	public $suppliers_bank_acount;
	public $suppliers_bank_number;
	public $suppliers_bank_sortcode;
	public $suppliers_bank_ref;

	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();   
   }


}
?>







