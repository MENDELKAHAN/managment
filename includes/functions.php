<?php
    
    // calls lib classes
    function __autoload($class_name){
        $class_name = strtolower($class_name);
        $path       = LIB . DS . "{$class_name}.php";
        if (file_exists($path)) {
            require_once($path);
        } else {
            die("The file {$class_name}.php could not be found.");
        }
    }

    // calls the header function 
    function redirect_to($location = NULL){
        if ($location != NULL) {
            header("Location: ".URL.DS.$location);
            exit;
        }
    }

    function if_is_set($value)
    {
        if(isset($value)){
            return $value;
    }
        return "";
    }

?>