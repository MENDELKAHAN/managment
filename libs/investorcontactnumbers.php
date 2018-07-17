<?php

class InvestorContactNumbers extends DatabaseObject{
	protected static $table_name = "investors_contact_numbers";

	public $investors_contact_numbers_id;
	public $investors_contact_numbers_number;
	public $investors_contact_numbers_description;
	public $investors_contact_numbers_active;
	public $fk_investors_id;


	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

   public static function find_by_investor($id) {
		return static::find_by_sql("SELECT * FROM  ".static::$table_name." where fk_investors_id=".$id );
    }


     public function investors_active_number($investor)
    {
  //   	$sql ="SELECT * FROM investors_contact_numbers WHERE fk_investors_id =  $investor AND investors_contact_numbers_active = 1";
		// $investor_email = new InvestorContactNumbers();
		// $email_object = 	$investor_email -> find_by_sql($sql);
		// return $email_object[0]->investors_contact_numbers_number;



		$sql ="SELECT * FROM investors_contact_numbers WHERE fk_investors_id =  $investor AND investors_contact_numbers_active = 1";
		$result =  self::find_by_sql($sql);
		if($result){
		return $result[0]->investors_contact_numbers_number;
	}
    }

   

}
?>



