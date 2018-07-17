<?php

class Periods extends DatabaseObject{

	protected static $table_name = "periods";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();

	public $periods_id;
	public $periods_date_created;
	public $periods_date_closed;
	public $fk_company_id;


	
	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }


}



?>