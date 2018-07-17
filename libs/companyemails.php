<?php

class companyEmails extends DatabaseObject{
	protected static $table_name = "company_emails";

	public $company_emails_id;
	public $company_emails_email;
	public $company_emails_description;
	public $company_emails_active;
	public $fk_company_id;

	

	function __construct() {
       $this-> db_fields = $this->getColumnNames();
     
   }

   public function company_active_emails($company)
    {
    	$sql = "SELECT * FROM `company_emails` WHERE `company_emails_active` =1 AND `fk_company_id`= ".$company;
    	$result = self::find_by_sql($sql);
    	if($result){
    	return $result[0]->company_emails_email; 
    }
    return false;
    } 

}
?>

