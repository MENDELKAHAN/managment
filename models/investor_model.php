<?php


/**
 * 
 */
class Investor_Model extends Model
{
  public $result_array;
  
  function __construct()
  {

    $class_name = "Investors";
    $multi = $class_name::find_all(); 
    $this-> result_array = json_encode($multi);
  }


  public function create()
  {
    $results = array();
  
 try {
  DatabaseObject::transaction_start();

  if(if_is_set($_POST['investors_fname'] )==""){
    $results['investor'] ="0";
    throw new Exception("Investor must have a first name ");
  } 

  if(if_is_set($_POST['investors_lname'] )==""){
    $results['investor'] ="0";
    throw new Exception("Investor must have a last name ");
  } 

   $investors = new Investors;
   $investors -> investors_company_name    = $_POST['investors_company_name'];
   $investors -> investor_title            = $_POST['investor_title'];
   $investors -> investors_fname           = $_POST['investors_fname'];
   $investors -> investors_lname           = $_POST['investors_lname'];
   $investors -> investors_foreign         = $_POST['investors_foreign'];
   $investors -> investors_active          = 1;
   if($investor_id = $investors -> create()){
     $results['investor'] ="1";
   }else{
     $results['investor'] ="0";
     return false;
   }


  if(if_is_set($_POST['investors_emails_email'] )==""){
    $results['email'] ="0";
    throw new Exception("Investor must have an email");
  } 
   
  $investors_email = new InvestorsEmails;
  $investors_email -> investors_emails_email = $_POST['investors_emails_email'];
  $investors_email -> investors_emails_description = null;
  $investors_email -> fk_investors_id = $investor_id;
  $investors_email -> investors_emails_active =1;
  if($investors_email -> create()){
    $results['email'] ="1";
  }else{
        $results['email'] ="0";
        throw new Exception("Error while creating email");
  }


  if(if_is_set($_POST['investors_contact_numbers_number'] )==""){
       $results['number'] ="0";
  }else{
    $investors_contact_number = new InvestorContactNumbers;
    $investors_contact_number -> investors_contact_numbers_number = $_POST['investors_contact_numbers_number'];
    $investors_contact_number -> investors_contact_numbers_description = null;
    $investors_contact_number -> investors_contact_numbers_active = 1;
    $investors_contact_number -> fk_investors_id = $investor_id;
    if($investors_contact_number -> create()){
       $results['number'] ="1";
     }else{
       $results['number'] ="0";
  }
}
        
  DatabaseObject::transaction_comit();  
  $results['table'] = $investors -> attributes();
} catch (Exception $e) {
  DatabaseObject::transaction_rollback();
   $results['error'] =$e -> getMessage();
}
  echo json_encode($results);
  // redirect_to("../investor");
}
 
}
?>