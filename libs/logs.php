<?php

class Log{
	private $logfile;
	private $logs = array();
	
	public function __construct($logfile){
		$this->logfile = $logfile;
		if((file_exists($logfile))&& is_readable($logfile)){
   			$handle = fopen($logfile, 'r');
   			$entry= array();
   		    while (!feof($handle)) {
		    	$entry[] = fgets($handle);
		    }
		    fclose($handle);
		}
		$this->logs = $entry;
	}

	public static function clear_log($logfile){
	    if($handle = fopen($logfile, 'w')){ 
	    	file_put_contents($logfile, "");
	    	log_action("cleared log", "mendy");
	    	redirect_to("logfile.php");
		}
	}

	public function get_log(){
		return $this->logs;
	}

	public function log_action($action, $message=""){
  		if($handle = fopen($this->logfile, 'a')){ 
    		$timestamp = strftime("%Y-%m-%d %H:%M:%S",time());
    		$content = "{$timestamp} | {$action}: {$message} \n";
    		fwrite($handle, $content);
		}
	}

	public function display(){
		$logs = $this->get_log();
    	$out_put = "<ul>";
    	foreach ($logs as $log){
     		if($log!="")
        		$out_put .= "<li>{$log}</li>";
    	}
    	$out_put .= "</ul>";
    	return $out_put;
	}
}

?>