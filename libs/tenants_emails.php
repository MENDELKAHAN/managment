<?php
require_once(LIB_PATH.DS.'database.php');

class TenantsEmails extends DatabaseObject{
	protected static $table_name = "tenants_emails";

	public $tenants_emails_id;
	public $tenants_emails_email;
	public $tenants_emails_note;
	public $tenants_emails_active;
	public $fk_tenants_id;

	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

   public static function find_by_investor($id) {
		return static::find_by_sql("SELECT * FROM  ".static::$table_name." where fk_investors_id=".$id );
    }


}
?>

