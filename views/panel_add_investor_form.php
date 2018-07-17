<?php

$file  = 'templates/panel_add_investor_form.html';
    $tpl_a = file_get_contents($file);
    $pass1 = str_replace('[+add_investor+]', $lang['add_investor'], $tpl_a);
    $pass2 = str_replace('[+company_name+]', $lang['company_name'], $pass1);
    $pass3 = str_replace('[+title+]', $lang['title'], $pass2);
    $pass4 = str_replace('[first_name+]', $lang['first_name'], $pass3);	
    $pass5 = str_replace('[+family_Name+]', $lang['family_name'], $pass4);
    $pass6 = str_replace('[+family_name+]', $lang['family_name'], $pass5);
    $pass7 = str_replace('[+email+]', $lang['email'], $pass6);
    $pass8 = str_replace('[+number+]', $lang['number'], $pass7);
   
    $pass9 = str_replace('[+foreign+]', $lang['foreign'], $pass8);
    $pass10 = str_replace('[+yes+]', $lang['yes'], $pass9);
    $pass11 = str_replace('[+no+]', $lang['no'], $pass10);
    $final = str_replace('[+create+]', $lang['create'], $pass11);
    echo $final;
    // $pass9 = str_replace('[+bank_accounts_name+]', $lang['bank_accounts_name'], $pass8);
    // $pass10 = str_replace('[+bank_ref+]', $lang['bank_ref'], $pass9);
    // $pass14 = str_replace('[+manager_account+]', $lang['manager_account'], $pass13);
    // $pass15 = str_replace('[+financial_year+]', $lang['financial_year'], $pass14);
    // $pass16 = str_replace('[+monthly+]', $lang['monthly'], $pass15);
    // $pass17 = str_replace('[+quarterly+]', $lang['quarterly'], $pass16);
    // $pass18 = str_replace('[+yearly+]', $lang['yearly'], $pass17);
    
    // $pass20 = str_replace('[+payment_period+]', $lang['payment_period'], $pass19);
    

    // $content="";
    // $accounts = $this -> manager_acounts;
    // foreach ($accounts as $acount){
    //     $content.= "<option value=".$acount ->bank_accounts_id.">".$acount -> bank_accounts_name."</option>";
    // }
    // $final = str_replace('[+bank_accounts_name_options+]', $content, $pass20);
    

    ?>