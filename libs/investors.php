<?php
require_once('DatabaseObject.php');


class Investors extends DatabaseObject{


	protected  static $table_name = "investors";
	// SHOW COLUMNS FROM table_name
	public $db_fields = array();
	
	public $investors_id;
	public $investors_company_name;
	public $investor_title;
	public $investors_fname;
	public $investors_lname;
	public $investors_foreign;
	public $fk_manager_account_id;
	public $investors_active;

	function __construct() {
       $this-> db_fields = $this->getColumnNames(); 
   }

	public function full_name() {
	    if(isset($this->investors_fname) && isset($this->investors_lname)) {
	      return $this->investors_fname . " " . $this->investors_lname;
	    } else {
	      return "";
	    }
	  }


		
 


}
?>
