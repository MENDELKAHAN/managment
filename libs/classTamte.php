<?php
require_once(LIB_PATH.DS.'database.php');

class ClassName extends DatabaseObject{

	protected static $table_name = "TableName";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();



	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}

?>