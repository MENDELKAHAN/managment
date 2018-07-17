<?php
$file  = 'templates/investor_table.html';
    $tpl_a = file_get_contents($file);
    $pass1 = str_replace('[+action+]', $lang['action'], $tpl_a);
    $pass2 = str_replace('[+add_investor+]', $lang['add_investor'], $pass1);
    $pass3 = str_replace('[+company+]', $lang['company'], $pass2);
    $pass4 = str_replace('[+name+]', $lang['name'], $pass3);
    $pass5 = str_replace('[+bank_ref+]', $lang['bank_ref'], $pass4);
    $pass6 = str_replace('[+foreign+]', $lang['foreign'], $pass5);
    $pass7 = str_replace('[+financial_year+]', $lang['financial_year'], $pass6);

    $table_content="";
    $object_array = $this -> result_array;
       
        foreach ($object_array as $single){
            $table_content.=         '<tr>';
            $table_content.=         '<td>'.$single -> investors_company_name.'</td>';
            $table_content.=         "<td>".$single -> investor_title ." ". $single -> investors_fname ." ".$single -> investors_lname."</td>";
            // $table_content.=         "<td>".$single -> investors_bank_ref."</td>";
            $table_content.=         "<td>".($single -> investors_foreign ?  '&#x2714;' : '&#x2716;')."</td>";
        
        
           // $php_date =               explode('-', date($single -> investors_financial_year));
           // $new_date =               $php_date[2].'/'.$php_date[1];
           // $table_content.=          '<td>'.$new_date.'</td>';


           $url= "investorview/".$single -> investors_id;
           $table_content.="<td class='btn-toolbar'>";
           $table_content.="<a href='$url' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'>
                                <i class='fa fa-eye'></i>
                            </a>";
         
            $table_content.="</td>";



           $table_content.='</tr>';
              
        }

        $pass8 = str_replace('[+table_content+]', $table_content, $pass7);
        $final = str_replace('[+action+]', $lang['action'], $pass8);
        echo $final;
?>