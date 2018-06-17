<?php

	require_once('includes/initialize.php');
	$session['user'] = null;
	session_destroy();
	redirect_to("index.php");
?>