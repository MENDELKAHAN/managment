<?php

class PropertyUnits extends DatabaseObject{

	protected static $table_name = "property_units";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $property_units_id;
	public $property_units_name;
	public $fk_property_id;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

}

?>