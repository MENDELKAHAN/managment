<?php
	$file  = 'templates/top.html';
	$tpl_a = file_get_contents($file);
	$pass1 = str_replace('[+error_404+]', $lang['error_404'], $tpl_a);
	$pass2 = str_replace('[+h1_header+]', $lang['h1_header'], $pass1);
	$pass3 = str_replace('[+home+]', $lang['home'], $pass2);
	$pass4 = str_replace('[+uplaod_image+]', $lang['uplaod_image'], $pass3);
	$pass5 = str_replace('[+language+]', $lang['language'], $pass4);

	if ($_SESSION['lang'] == 'en') {
	    $pass6 = str_replace('[+en_selected+]', "selected", $pass5);
	    $pass7 = str_replace('[+fr_selected+]', "", $pass6);
	} else {
	    $pass6 = str_replace('[+en_selected+]', "", $pass5);
	    $pass7 = str_replace('[+fr_selected+]', "selected", $pass6);
	}

	$final = str_replace('[+Submit+]', $lang['Submit'], $pass7);
	echo $final;
?>