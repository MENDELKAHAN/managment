<?php
require_once(LIB_PATH.DS.'database.php');

class InvestorsAddress extends DatabaseObject{
	protected static $table_name = "investors_addresses";

	public $investors_addresses_id;
	public $investors_addresses_number;
	public $investors_addresses_street_1;
	public $investors_addresses_street_2;
	public $investors_addresses_town;
	public $investors_addresses_postcode;
	public $investors_addresses_country;
	public $fk_investors_id;
	public $investors_addresses_active;

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

   public static function find_by_investor($id) {

		return static::find_by_sql("SELECT * FROM  ".static::$table_name." where fk_investors_id=".$id );
    }


}
?>


