<?php

/**
 * 
 */
class Session
{

    function __construct()
    {
      Session_start();
    }
 
  
    public function set($key, $value)
    {
      $_SESSION[$key] = $value;
    }

    public function get($key)
    {
      if(isset($_SESSION[$key])){
          return $_SESSION[$key];
      }
      
    }

    static function destroy()
    {
      session_destroy();
    }


  // if (isset($_SESSION["user"])){
  //         $userId = $_SESSION["user"];
  //     };

   
      
  //     function errors(){
  //         if (isset($_SESSION["errors"])){
  //           $errors =  $_SESSION["errors"];
  //           $_SESSION["errors"]= null;
  //           return $errors;
  //       }
  //     }

      


  // if (!isset($_SESSION["lang"])) {
  //     $_SESSION["lang"] = "en";
  // }

  // // sets $message from session and then clears session
  // if (isset($_SESSION["message"])) {
  //     $message             = $_SESSION["message"];
  //     $_SESSION["message"] = null;
  // } else {
  //     $message = "";
  // }



}
?>