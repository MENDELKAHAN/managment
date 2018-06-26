<?php


/**
 * 
 */
class Login_Model extends Model
{
	
	function __construct()
	{

	}

	public function run()
	{
		$username = $user = $_POST['username'];
		$password = $pass = $_POST['password'];  
		Users::authenticate($user, $pass);
		// redirect_to(URL."index");
		header('location: ../index');
	}
 
	
}


?>