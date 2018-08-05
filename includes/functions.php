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

    function title ($title)
    {
        
    $file  = 'templates/body_title.html';
    $tpl_a = file_get_contents($file);
    $final = str_replace('[+page_title+]', $title, $tpl_a);
    echo $final;
    }

?>