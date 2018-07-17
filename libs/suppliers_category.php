<?php
require_once(LIB_PATH.DS.'database.php');

class Suppliers_Category extends DatabaseObject{
	protected static $table_name = "supplier_category";

	protected $db_fields = array();
	public $supplier_category_id;
	public $supplier_category_name;

	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

}
?>