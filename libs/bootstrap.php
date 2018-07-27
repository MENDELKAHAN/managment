<?php

/**
 *  mvv managment
 *  reads hte name spaces
 *  calls models 
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
			$controller-> index();
			return false;
		}

		$file = "controllers/".$url[0].".php";

		if(file_exists($file)){
			require $file;
		}else{
			$this->error($file);
		}

		//still calling ecen if error
		$controller = new $url[0];
		$controller -> loadModel($url[0]);
		if(isset($url[2])){
			if(method_exists($controller, $url[1])){
				$controller -> {$url[1]}($url[2]);
			}else{
				$this->error();
			}
		}else{
			if(isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller -> {$url[1]}();
				}elseif (method_exists($controller, "index")) {
						$controller -> {"index"}($url[1]);
				}else{					
					$this->error();
				}
			}else{
				$controller->Index();
			}
		}
	}
		 function error($file='')
		{
			require "controllers/errors.php";
			$controller = new Errors($file);
			$controller->index();
			return false;
		}
}
?>