<?php


/**
 * 
 */
class Register_Model extends Model
{
	
	function __construct()
	{

	}

	public function create()
	{

		
		// create user

// if(isset($_POST['submit'])){

	// if($_POST['repeat_password'] == $_POST['users_password']){

		$user = new Users;
		$user -> users_fname = $_POST['users_fname'];
		$user -> users_sname = $_POST['users_lname'];
		$user -> users_name = $_POST['user_name'];
		$user -> users_password = Password::create_password($_POST['users_password']);
		$user -> users_group = $_POST['users_group'] =1;
		$userId = $_SESSION["user"] = $user ->create();

		// if($userId){
		// 	$email = new Email;
		// 	$email -> user_email_info_email = $_POST['email'];
  //   		$email -> user_email_info_type = 2;
  //   		$email -> user_id = $userId;
  //   		$email ->create();
		// }


		// redirect_to(URL.'index.php');

		// }else{

		// 	echo "repeat_password";
		// }

		// }else{
			
			redirect_to("../index");
		// }
			}

	

	
}


?>



