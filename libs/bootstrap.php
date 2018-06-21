<?php

/**
 * 
 */
class Bootstrap
{
	
	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = explode("/", rtrim($url));

		

		if(empty($url[0]) || $url[0] == "index.php"){
			require "controllers/index.php";
			$controller = new Index();
			return false;
		}

		$file = "controllers/".$url[0].".php";	

			
		if(file_exists($file)){
			require $file;
		}else{
			require "controllers/errors.php";
			$controller = new Errors($file);
			return false;
		}

		$controller = new $url[0];
		$controller -> loadModel($url[0]);


		if(isset($url[2])){
			$controller -> {$url[1]}($url[2]);
		}else{

			if (isset($url[1])) {
				$controller -> {$url[1]}();
			}
		}
	}
}

?>