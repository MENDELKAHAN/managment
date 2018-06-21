<?php

include 'languages/en.php';
	$file  = 'templates/register.html';
	$tpl_a = file_get_contents($file);
	$pass1 = str_replace('[+cleaning_managment+]', $lang['cleaning_managment'], $tpl_a);


	$pass2 = str_replace('[+create_an_account+]', $lang['create_an_account'], $pass1);
	$pass3 = str_replace('[+user_name+]', $lang['user_name'], $pass2);
	$pass4 = str_replace('[+passowrd+]', $lang['passowrd'], $pass3);
	$pass5 = str_replace('[+create_an_account+]', $lang['create_an_account'], $pass4);
	$pass6 = str_replace('[+log_in_header+]', $lang['log_in_header'], $pass5);
	$pass7 = str_replace('[+admin+]', $lang['admin'], $pass6);
	$pass8 = str_replace('[+year+]', $lang['year'], $pass7);

	$pass9 = str_replace('[+already_have_an_account+]', $lang['already_have_an_account'], $pass8);

	$pass10 = str_replace('[+first_name+]', $lang['first_name'], $pass9);
	$pass11 = str_replace('[+last_name+]', $lang['last_name'], $pass10);
	$pass12 = str_replace('[+email+]', $lang['email'], $pass11);
	$pass13 = str_replace('[+repeat_passowrd+]', $lang['repeat_passowrd'], $pass12);

	$final =  str_replace('[+create_account+]', $lang['create_account'], $pass13);
	echo $final;


	?>