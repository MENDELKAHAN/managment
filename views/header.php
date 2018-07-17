<?php

// temp
include 'languages/en.php';

	$file  = 'templates/header.html';
	$tpl_a = file_get_contents($file);
	$pass1 = str_replace('[+my_profile+]', $lang['my_profile'], $tpl_a);
	$pass2 = str_replace('[+my_calendar+]', $lang['my_calendar'], $pass1);
	$pass3 = str_replace('[+my_inbox+]', $lang['my_inbox'], $pass2);
	$pass4 = str_replace('[+my_tasks+]', $lang['my_tasks'], $pass3);
	$final = str_replace('[+log_out+]', $lang['log_out'], $pass4);
	echo $final;


?>