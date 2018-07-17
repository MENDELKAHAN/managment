<?php
class InvestorsEmails extends DatabaseObject{
	protected static $table_name = "investors_emails";

	public $investors_emails_id;
	public $investors_emails_email;
	public $investors_emails_description;
	public $fk_investors_id;
	public $investors_emails_active;


	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

   public static function find_by_investor($id) {
		return static::find_by_sql("SELECT * FROM  ".static::$table_name." where fk_investors_id=".$id );
    }

    public function investors_active_emails($investor)
    {
    	$sql ="SELECT * FROM investors_emails WHERE fk_investors_id =  $investor AND investors_emails_active = 1";
		$result =  self::find_by_sql($sql);
		return $result[0]->investors_emails_email;
    }


}
?>