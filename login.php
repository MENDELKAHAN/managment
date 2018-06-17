<?php
	include ("includes/initialize.php");

if(isset($_POST['submit'])){
	$username = $user = $_POST['username'];
	$password = $pass = $_POST['password'];  
	Users::authenticate($user, $pass);
	redirect_to("index.php");

  	}else{
		redirect_to("login.php");
	}

?>