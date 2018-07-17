<?php
	require_once(LIB_PATH.DS.'database.php');

	class Properties extends DatabaseObject{

		protected static $table_name = "properties";
		// SHOW COLUMNS FROM table_name
		protected $db_fields = array();


		public $properties_id;
		public $properties_house_number;
		public $properties_street_1;
		public $properties_street_2;
		public $properties_town;
		public $properties_postcode;
		public $properties_country;
		public $properties_vat;
		public $fk_company_id;

		function __construct() {
	       $this-> db_fields = $this->getColumnNames();

	   }

	   public function find_by_company_id($id){
	   		$sql = "SELECT * FROM `properties` WHERE `fk_company_id` = {$id}";
   			$result = Properties::find_by_sql($sql);
   			return $result;

	   }
	}

?>