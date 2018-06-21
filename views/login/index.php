<?php
	include 'languages/en.php';
	$file  = 'templates/login.html';
	$tpl_a = file_get_contents($file);
	$pass1 = str_replace('[+cleaning_managment+]', $lang['cleaning_managment'], $tpl_a);
	$pass2 = str_replace('[+log_in_header+]', $lang['log_in_header'], $pass1);
	$pass3 = str_replace('[+login+]', $lang['login'], $pass2);
	$pass4 = str_replace('[+forgot_password+]', $lang['forgot_password'], $pass3);
	$pass5 = str_replace('[+cleaning_managment+]', $lang['cleaning_managment'], $pass4);
	$pass6 = str_replace('[+year+]', $lang['year'], $pass5);
	$pass7 = str_replace('[+admin+]', $lang['admin'], $pass6);
	$pass8 = str_replace('[+create_an_account+]', $lang['create_an_account'], $pass7);
	$pass9 = str_replace('[+passowrd+]', $lang['passowrd'], $pass8);
	$pass10 =str_replace('[+do_not_have_an_account+]', $lang['do_not_have_an_account'], $pass9);
	$final = str_replace('[+user_name+]', $lang['user_name'], $pass10);
	echo $final;

?>