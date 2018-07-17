

<?php

	include'views/head.php';
	include 'views/header.php';
	include 'views/nav.html';  
    include 'languages/en.php';

    $file  = 'templates/body_title.html';
    $tpl_a = file_get_contents($file);
    $final = str_replace('[+page_title+]', $lang['companies'], $tpl_a);
    echo $final;


    $file  = 'templates/company.html';
    $tpl_a = file_get_contents($file);
    $pass1 = str_replace('[+company+]', $lang['company'], $tpl_a);
    $pass2 = str_replace('[+name+]', $lang['name'], $pass1);
    $pass3 = str_replace('[+foreign+]', $lang['foreign'], $pass2);
    $pass4 = str_replace('[+action+]', $lang['action'], $pass3);
    $pass5 = str_replace('[+add_company+]', $lang['add_company'], $pass4);
    $pass6 = str_replace('[+email+]', $lang['email'], $pass5);
    $pass7 = str_replace('[+number+]', $lang['number'], $pass6);
    $pass8 = str_replace('[+company_name+]', $lang['company_name'], $pass7);
    $pass9 = str_replace('[+create+]', $lang['create'], $pass8);
    $pass10 = str_replace('[+yes+]', $lang['yes'], $pass9);
    $pass11 = str_replace('[+no+]', $lang['no'], $pass10);
    $pass12 = str_replace('[+company_number+]', $lang['company_number'], $pass11);
    $pass13 = str_replace('[+vat_number+]', $lang['vat_number'], $pass12);
    $pass14 = str_replace('[+address+]', $lang['address'], $pass13);
    $pass15 = str_replace('[+policies+]', $lang['policies'], $pass14);
    $pass16 = str_replace('[+company_add_commission+]', $lang['company_add_commission'], $pass15);
    $pass17 = str_replace('[+company_layout_without_consent+]', $lang['company_layout_without_consent'], $pass16);
    $pass18 = str_replace('[+financial_year+]', $lang['company_financial_year'], $pass17);
    $pass19 = str_replace('[+company_number+]', $lang['company_number'], $pass18);
    $pass20 = str_replace('[+companies+]', $lang['companies'], $pass19);
    $pass21 = str_replace('[+company_address_number+]', $lang['house_number'], $pass20);
    $pass22 = str_replace('[+company_address_line_1+]', $lang['address_line_1'], $pass21);
    $pass23 = str_replace('[+company_address_line_2+]', $lang['address_line_2'], $pass22);
    $pass24 = str_replace('[+company_address_town+]', $lang['address_town'], $pass23);
    $pass25 = str_replace('[+company_address_postcode+]', $lang['address_postcode'], $pass24);
    $pass26 = str_replace('[+company_address_country+]', $lang['address_country'], $pass25);
    $pass27 = str_replace('[+monthly+]', $lang['monthly'], $pass26);
    $pass28 = str_replace('[+yearly+]', $lang['yearly'], $pass27);
    $pass29 = str_replace('[+quarterly+]', $lang['quarterly'], $pass28);
    $pass30 = str_replace('[+payment_period+]', $lang['payment_period'], $pass29);
    $pass31 = str_replace('[+bank+]', $lang['bank'], $pass30);
    $pass32= str_replace('[+bank_ref+]', $lang['bank_ref'], $pass31);
    $pass33 = str_replace('[+manager_account+]', $lang['manager_account'], $pass32);
    $pass34 = str_replace('[+payment_period+]', $lang['payment_period'], $pass33);
    $pass35 = str_replace('[+information+]', $lang['information'], $pass34);


    $table_content="";
    $object_array = $this -> result_array;
        foreach ($object_array as $single){
            $table_content.=         '<tr>';
            $table_content.=         '<td>'.$single -> company_legal_name.'</td>';
            $table_content.=         "<td>".$single -> company_number ."</td>";
            $table_content.=         "<td>".($single -> company_foreign ?  '&#x2714;' : '&#x2716;')."</td>";
            $table_content.=         "<td>".$single -> company_vat_number."</td>";
            $table_content.=         "<td>".$single -> company_layout_without_consent."</td>";       
        
           // $php_date =               explode('-', date($single -> investors_financial_year));
           // $new_date =               $php_date[2].'/'.$php_date[1];
           // $table_content.=          '<td>'.$new_date.'</td>';

           $url= "companyview/".$single -> company_id;
           $table_content.="<td class='btn-toolbar'>";
           $table_content.="<a href='$url' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'>
                                <i class='fa fa-eye'></i>
                            </a>";
         
            $table_content.="</td>";
            $table_content.='</tr>';
              
        }

        $pass36 = str_replace('[+table_content+]', $table_content, $pass35);



    $banks_list="";
    $accounts = $this -> manager_acounts;
    foreach ($accounts as $acount){
        $banks_list.= "<option value=".$acount ->bank_accounts_id.">".$acount -> bank_accounts_name."</option>";
    }
    $pass37 = str_replace('[+bank_accounts_name_options+]', $banks_list, $pass36);
    $pass38 = str_replace('[+sort_code+]', $lang['sort_code'], $pass37);
    $pass39 = str_replace('[+account_no+]', $lang['account_no'], $pass38);


    echo $pass39;

   
        
	require 'views/footer.php';
?>