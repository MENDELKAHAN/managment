<?php

Session_start();

// stores user id

if (isset($_SESSION["user"])){
        $userId = $_SESSION["user"];
    };

 
    
    function errors(){
        if (isset($_SESSION["errors"])){
          $errors =  $_SESSION["errors"];
          $_SESSION["errors"]= null;
          return $errors;
      }
    }

    


if (!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = "en";
}

// sets $message from session and then clears session
if (isset($_SESSION["message"])) {
    $message             = $_SESSION["message"];
    $_SESSION["message"] = null;
} else {
    $message = "";
}
?>