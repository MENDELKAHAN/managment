<?php


/**
 * 
 */
class Login_Model extends Model
{
	
	function __construct()
	{

	}

	// logingin function
	// sets sessions 
	public function run()
	{
		$username = $user = $_POST['username'];
		$password = $pass = $_POST['password'];  
		if(Users::authenticate($user, $pass)){
			Session::set('user',$user);
            Session::set('logedIn',true);
            redirect_to("index");
		}
			redirect_to("login");		
	}
 
	
}


?>