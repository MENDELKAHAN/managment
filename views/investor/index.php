

<?php

	include'views/head.php';
	include 'views/header.php';
	include 'views/nav.html';  
    include 'languages/en.php';

    $file  = 'templates/body_title.html';
    $tpl_a = file_get_contents($file);
    $final = str_replace('[+page_title+]', $lang['investors'], $tpl_a);
    echo $final;

    include 'views/investor_table.php';
    
    include 'views/panel_add_investor_form.php';
    
	require 'views/footer.php';
?>