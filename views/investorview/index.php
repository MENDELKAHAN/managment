
<?php
title($this -> investors_title . " ". $this -> investors_fname ." ". $this -> investors_lname ."( ".$this -> investors_company_name.")");

    $file  = 'templates/investorview.html';
    $tpl_a = file_get_contents($file);

    $pass1 = str_replace('[+total_properties_db+]', "na", $tpl_a);
    $pass2 = str_replace('[+properties+]', $lang['properties'], $pass1);
    $pass3 = str_replace('[+cash_by_us+]', $lang['cash_by_us'], $pass2);
    $pass4= str_replace('[+action+]', $lang['action'], $pass3);
    $pass5= str_replace('[+personal+]', $lang['personal'], $pass4);
    $pass6= str_replace('[+information+]', $lang['information'], $pass5);
     $pass7= str_replace('[+company+]', $lang['company'], $pass6);
     $pass8= str_replace('[+sharehold+]', $lang['sharehold'], $pass7);
     $pass9= str_replace('[+email+]', $lang['email'], $pass8);
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
    $object_array = $this -> companies_details;
    if($object_array){
        foreach ($object_array as $single){
            $table_content.=         '<tr>';
            $table_content.=         '<td>'.$single['company_legal_name'].'</td>';
            $table_content.=         "<td>".$single['company_investors_percentage']."%</td>";
           
            $url= "companyview/".$single['fk_company_id'];

            $table_content.="<td class='btn-toolbar'>";
         
            $table_content.="<a href='$url' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'>
                                <i class='fa fa-eye'></i>
                            </a>";
 

            $table_content.="</td>";
            $table_content.='</tr>';
              
        }
    }
     
     

    $pass26 = str_replace('[+Company_table_content+]', $table_content, $pass25);
    $pass27 = str_replace('[+add_investor_to_a_company+]', $lang['add_investor_to_a_company'], $pass26);
    $pass28 = str_replace('[+new_company+]', $lang['new_company'], $pass27);

    $pass29 = str_replace('[+add_property+]', $lang['add_property'], $pass28);
    $pass30 = str_replace('[+trasfer+]', $lang['trasfer'], $pass29);

    $pass31 = str_replace('[+investor_title+]', $this -> investors_title, $pass30);
    $pass32 = str_replace('[+investor_first_name+]', $this -> investors_fname, $pass31);
    $pass33 = str_replace('[+investor_last_name+]', $this -> investors_lname, $pass32);
    $pass34 = str_replace('[+investor_email+]', $this -> investors_email, $pass33);
    $pass35 = str_replace('[+investor_number+]',$this -> investors_number, $pass34);
    $pass36 = str_replace('[+investor_business_name+]',$this -> investors_company_name, $pass35);
    $final= str_replace('[+companies+]', $lang['companies'], $pass36); 
    echo $final;




?>

<?php
    require 'views/footer.php';
?>
   