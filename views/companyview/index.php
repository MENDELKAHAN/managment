
<?php
    include'views/head.php';
    include 'views/header.php';
    include 'views/nav.html';  
    include 'languages/en.php';

    $file  = 'templates/body_title.html';
    $tpl_a = file_get_contents($file);
    $final = str_replace('[+page_title+]', $this -> company_legal_name_db, $tpl_a);
    echo $final;
?>


<?php
    
    $file  = 'templates/companyview.html';
    $tpl_a = file_get_contents($file);
    $pass1 = str_replace('[+total_properties_db+]', $this-> total_properties, $tpl_a);
    $pass2 = str_replace('[+properties+]', $lang['properties'], $pass1);
    $pass3 = str_replace('[+cash_by_us+]', $lang['cash_by_us'], $pass2);
    $pass4= str_replace('[+action+]', $lang['action'], $pass3);
    $pass5= str_replace('[+personal+]', $lang['personal'], $pass4);
    $pass6= str_replace('[+information+]', $lang['information'], $pass5);
    $pass7= str_replace('[+company+]', $lang['company'], $pass6);
    $pass8= str_replace('[+sharehold+]', $lang['sharehold'], $pass7);
    $pass9= str_replace('[+company_email+]', $lang['email'], $pass8);
    $pass10= str_replace('[+number+]', $lang['number'], $pass9);
    $pass11= str_replace('[+title+]', $lang['title'], $pass10);
    $pass12= str_replace('[+bank+]', $lang['bank'], $pass11);
    $pass13= str_replace('[+bank_ref+]', $lang['bank_ref'], $pass12);  
    $pass14= str_replace('[+view+]', $lang['view'], $pass13);
    $pass15= str_replace('[+manager_account+]', $lang['manager_account'], $pass14);
    $pass16= str_replace('[+address+]', $lang['address'], $pass15); 
    $pass17= str_replace('[+company_name+]', $lang['company_name'], $pass16); 
    $pass18= str_replace('[+monthly+]', $lang['monthly'], $pass17); 
    $pass19= str_replace('[+no+]', $lang['no'], $pass18); 
    $pass20= str_replace('[+yes+]', $lang['yes'], $pass19); 
    $pass21= str_replace('[+payment_period+]', $lang['payment_period'], $pass20); 
    $pass22= str_replace('[+payment_period+]', $lang['payment_period'], $pass21); 
    $pass23= str_replace('[+foreign+]', $lang['foreign'], $pass22); 
    $pass24= str_replace('[+financial_year+]', $lang['financial_year'], $pass23); 
    $pass25= str_replace('[+business+]', $lang['business'], $pass24); 


    $table_content="";
    $object_array = $this -> invetors_details;
    if($object_array){
        foreach ($object_array as $single){
            $table_content.=         '<tr>';
            $table_content.=         '<td>'.  $single["investor_title"] . $single["investors_fname"] . $single["investors_lname"].'</td>';
            $table_content.=         "<td>".$single['company_investors_percentage']."%</td>";
           
            $url= "investorview/".$single['investors_id'];
            $table_content.="<td class='btn-toolbar'>";
            $table_content.="<a href='$url' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'>
                                <i class='fa fa-eye'></i>
                            </a>";
            $table_content.="</td>";
            $table_content.='</tr>';
        }
    }
    
    $pass26 = str_replace('[+Company_table_content_db+]', $table_content, $pass25);
    $pass27 = str_replace('[+company_name+]', $lang['company_name'], $pass26);
    $pass28 = str_replace('[+company_legal_name_db+]', $this -> company_legal_name_db, $pass27);
    
    if ($this -> company_foreign_db) {
        $pass29 = str_replace('[+foreign_selected_yes+]', "selected", $pass28);
        $pass30 = str_replace('[+foreign_selected_no+]', "", $pass29);
    }else{
        $pass29 = str_replace('[+foreign_selected_yes+]', "", $pass28);
        $pass30 = str_replace('[+foreign_selected_no+]', "selected", $pass29);
    }
   


    $pass31 = str_replace('[+percentage+]',$lang['percentage'], $pass30);

    $pass32 = str_replace('[+monthly+]', $lang['monthly'], $pass31);
    $pass33 = str_replace('[+quarterly+]', $lang['quarterly'], $pass32);
    $pass34 = str_replace('[+yearly+]', $lang['yearly'], $pass33);
    $pass35 = str_replace('[+Company_table_content+]', $table_content, $pass34);
    $pass36 = str_replace('[+Company_table_content+]', $table_content, $pass35);
    $pass37 = str_replace('[+add_company_to_a_company+]', "", $pass36);
    $pass38 = str_replace('[+new_company+]', $lang['new_company'], $pass37);
    $pass39 = str_replace('[+add_property+]', $lang['add_property'], $pass38);
    $pass40 = str_replace('[+trasfer+]', $lang['trasfer'], $pass39);
    $pass41 = str_replace('[+company_title+]', $this -> company_legal_name_db, $pass40);
    $pass42 = str_replace('[+company_email+]', $lang['email'], $pass41);
    $pass43 = str_replace('[+company_contact_number+]',$lang['contact_number'], $pass42);
    $pass44 = str_replace('[+company_name+]',$lang['company_name'], $pass43);
    $pass45 = str_replace('[+cash_by_us_db+]',$this -> cash_by_us_db, $pass44);
    $pass46 = str_replace('[+company_number+]',$lang['company_number'], $pass45);
    $pass47 = str_replace('[+company_number_db+]',$this -> company_number, $pass46);
    $pass48 = str_replace('[+vat_number+]',$lang['vat_number'], $pass47);
    $pass49 = str_replace('[+company_vat_number_db+]',$this -> company_vat_number, $pass48);
    $pass50 = str_replace('[+company_add_commission+]',$lang['add_commission'], $pass49);
    $pass51 = str_replace('[+company_add_commission_db+]',$this -> company_add_commission, $pass50);
    $pass52 = str_replace('[+company_layout_without_consent+]',$lang['company_layout_without_consent'], $pass51);
    $pass53 = str_replace('[+company_layout_without_consent_db+]',$this -> company_layout_without_consent, $pass52);
    $pass54 = str_replace('[+financial_year_db+]',$this -> company_financial_year, $pass53);
    $pass55 = str_replace('[+bank_ref_db+]',$this -> bank_ref, $pass54);
    $pass56 = str_replace('[+account_no_db+]',$this -> company_banks_number, $pass55);
    $pass57 = str_replace('[+sort_code+]',$lang['sort_code'], $pass56);
    $pass58 = str_replace('[+sort_code_db+]',$this -> company_banks_sortcode, $pass57);
    $pass59 = str_replace('[+bank_ref_db+]',$this -> bank_ref, $pass58);
    $pass60 = str_replace('[+account_no+]',$lang['account_no'], $pass59);
    $pass61 = str_replace('[+bank_ref_db+]',$this -> bank_ref, $pass60);


    $banks_list="";
    $accounts = $this -> manager_acounts;
    $current_bank_manager =  $this -> fk_manager_account_id;

    foreach ($accounts as $acount){

        if($current_bank_manager == $acount -> bank_accounts_id){
            $banks_list.= "<option selected value=".$acount ->bank_accounts_id.">".$acount -> bank_accounts_name."</option>";
        }else{
            $banks_list.= "<option value=".$acount ->bank_accounts_id.">".$acount -> bank_accounts_name."</option>";
        }
    }
    
   
    $pass62 = str_replace('[+manager_bank_db+]', $banks_list, $pass61);

    if($this -> fk_company_payment_period_id == 1){
        $pass63 = str_replace('[+monthly_selected+]', "selected", $pass62);
        $pass64 = str_replace('[+quarterly_selected+]', "", $pass63);
        $pass65 = str_replace('[+quarterly_selected+]', "", $pass64);
    }elseif($this -> fk_company_payment_period_id == 2){
        $pass63 = str_replace('[+monthly_selected+]', "", $pass62);
        $pass64 = str_replace('[+quarterly_selected+]', "selected", $pass63);
        $pass65 = str_replace('[+quarterly_selected+]', "", $pass64);

    }else{
        $pass63 = str_replace('[+monthly_selected+]', "", $pass62);
        $pass64 = str_replace('[+quarterly_selected+]', "", $pass63);
        $pass65 = str_replace('[+yearly_selected+]', "selected", $pass64);

    }
    $pass66 = str_replace('[+account_name_db+]',$this -> company_banks_name, $pass65);
    $pass67 = str_replace('[+account_name+]',$lang['accounts_name'], $pass66);
    $pass68 = str_replace('[+company_address_number+]',$lang['house_number'], $pass67);
    $pass69 = str_replace('[+company_address_line_1+]',$lang['address_line_1'], $pass68);
    $pass70 = str_replace('[+company_address_line_2+]',$lang['address_line_2'], $pass69);
    $pass71 = str_replace('[+company_address_town+]',$lang['address_town'], $pass70);
    $pass72 = str_replace('[+company_address_postcode+]',$lang['address_postcode'], $pass71);
    $pass73 = str_replace('[+company_address_country+]',$lang['address_country'], $pass72);

    $pass74 = str_replace('[+company_address_number_db+]',$this -> company_address_number, $pass73);
    $pass75 = str_replace('[+company_address_line_1_db+]',$this -> company_address_line_1, $pass74);
    $pass76 = str_replace('[+company_address_line_2_db+]',$this -> company_address_line_2, $pass75);
    $pass77 = str_replace('[+company_address_town_db+]',$this -> company_address_town, $pass76);
    $pass78 = str_replace('[+company_address_postcode_db+]',$this -> company_address_postcode, $pass77);
    $pass79 = str_replace('[+company_address_country_db+]',$this -> company_address_country, $pass78);

    $pass80 = str_replace('[+company_contact_number+]',$lang['contact_number'], $pass79);
    $pass81 = str_replace('[+update+]',$lang['update'], $pass80);
    $pass82 = str_replace('[+contact+]',$lang['contact'], $pass81);

    $pass83 = str_replace('[+company_contact_number_db+]',$this -> company_contact_number, $pass82);

    $pass84 = str_replace('[+company_email_db+]',$this -> company_email, $pass83);
    $pass85 = str_replace('[+sharehold+]',$lang['sharehold'], $pass84);
    $pass85 = str_replace('[+add_investor+]',$lang['add_investor'], $pass84);


    


    







    $final= str_replace('[+companies+]', $lang['companies'], $pass85); 

    echo $final;






?>


<?php
    require 'views/footer.php';
?>