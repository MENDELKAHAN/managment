<?php
include ("initialize.php");



// $user = new Users;
// $user -> users_fname = $_POST['users_fname'] = "1";
// $user -> users_sname = $_POST['users_sname']="1";
// $user -> users_salt = "password_hash();";
// $user -> users_password = Password::create_password($_POST['users_password']);
// $user -> users_password = $pass = Password::create_password("1234");
// $user -> users_group = $_POST['users_group'] =1;
// $user ->create();





$user     = new Users;
$user1 = $user->find_by_id(27);
$users_password = $user1 -> users_password;

Password::verify("1234",$users_password));
  

	// redirect_to("index.php");
// }

?>