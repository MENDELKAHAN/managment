<?php


/**
 * 
 */
class Companyview_Model extends Model
{
 
  
  function __construct()
  {

   
  }


    public function create()
  {
    $results = array();
  
 try {
  
  if(if_is_set($_POST['company_name'])==""){
    $results['company'] ="0";
  return false;
 } 

   
   DatabaseObject::transaction_start();

   $companies = new Companies;
   $companies -> company_legal_name            = if_is_set($_POST['company_name']);
   $companies -> company_number                = if_is_set($_POST['company_number']);
   $companies -> company_vat_number            = if_is_set($_POST['vat_number']);
   $companies -> company_address_number        = if_is_set($_POST['company_address_number']);
   $companies -> company_address_line_1        = if_is_set($_POST['company_address_line_1']);
   $companies -> company_address_line_2        = if_is_set($_POST['company_address_line_2']);
   $companies -> company_address_town          = if_is_set($_POST['company_address_town']);
   $companies -> company_address_postcode      = if_is_set($_POST['company_address_postcode']);
   $companies -> company_address_country       = if_is_set($_POST['company_address_country']);
   $companies -> company_add_commission        = if_is_set($_POST['company_add_commission']);
   $companies -> company_layout_without_consent = if_is_set($_POST['company_layout_without_consent']);
   $companies -> company_foreign               = if_is_set($_POST['company_foreign']);
   $companies -> payment_period_id             = if_is_set($_POST['payment_period_id']);
   $companies -> fk_manager_account_id         = if_is_set($_POST['fk_manager_account_id']);
   $companies -> company_active  = 1;
   
   if(if_is_set($_POST['financial_year']=="")){
      $companies -> company_financial_year;
   }else{
      $now = new DateTime();
      $year = $now->format("Y");
      $php_date = explode('/', date(if_is_set($_POST['financial_year'])."/".$year));
      $new_date = $php_date[2].'-'.$php_date[1].'-'.$php_date[0];
      $companies -> company_financial_year  =  $new_date;
   }

   
  if($compnay_id = $companies ->create()){
    $results['company'] ="1";
  }else{
    $results['company'] ="0";
    return false;
  }
   

  if($email_address = if_is_set($_POST['email'])!=""){
    $email = new companyEmails();
    $email -> company_emails_email = $email_address;
    $email -> company_emails_description = "";
    $email -> company_emails_active =1;
    $email -> fk_company_id =$compnay_id;
    if($email -> create()){
      $results['email'] ="1";
    }
  }else{
   throw new Exception("Company must have an email");

    $results['email'] ="0";
  }
 


  if($number_address = if_is_set($_POST['contact_number'])!=""){
    $number = new CompanyNumbers();
    $number -> company_numbers_numbers = $number_address;
    $number -> company_numbers_description = "";
    $number -> company_numbers_active =1;
    $number -> fk_company_id =$compnay_id;
    if($number -> create()){
      $results['number'] ="1";
    }
   }else{
    $results['number'] ="0";
  }

   
   if($bank_account_number = if_is_set($_POST['bank_account_number'])!=""){
    $bank = new CompanyBanks();
    $bank -> company_banks_ref = if_is_set($_POST['bank_ref']);
    $bank -> company_banks_account_number = "";
    $bank -> company_banks_sort_code = if_is_set($_POST['bank_sort_code']);
    $bank -> fk_company_id = $compnay_id;
    if($bank -> create()){
      $results['bank'] ="1";
    }
   }else{
    $results['bank'] ="0";
  }   
 
  DatabaseObject::transaction_comit();
  
} catch (Exception $e) {
  $results['error'] =  $e->getMessage();
  DatabaseObject::transaction_rollback();

}
  $results['table'] = $companies -> attributes();


  echo json_encode($results);
  // redirect_to("../company");




 

   
 
 }
}
?>