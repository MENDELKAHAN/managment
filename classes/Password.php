<?php


/**
 * 
 */
	class Password{
		public static function  create_password($input){
				return  password_hash ($input , PASSWORD_DEFAULT);
		}

		public function verify($password, $db_password){
			return password_verify ($password , $db_password);
		}	
	}

	// lost password

?>