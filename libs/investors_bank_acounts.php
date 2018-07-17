<?php
require_once(LIB_PATH.DS.'database.php');

class InvestorsBank extends Bank{


	protected static $table_name = "investors_bank";
	// SHOW COLUMNS FROM table_name
	protected $db_fields = array();
	
	public $investors_bank_id;
	public $investors_bank_name;
	public $investors_bank_number;
	public $investors_bank_sortcode;
	public $fk_investor_id;
	public $investors_bank_active;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }

   function __destruct() {
     
   }



      public static function find_by_investor($id) {
		return static::find_by_sql("SELECT * FROM  ".static::$table_name." where fk_investor_id=".$id );
    }


     public function create(){
     	
    	 global $database;
 		$database->query("UPDATE `investors_bank` SET `investors_bank_active` = 0 WHERE `fk_investor_id` = {$this -> fk_investor_id}");
    	 parent::create();


    }


}
?>


