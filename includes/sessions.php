<?php

Session_start();

// sets lang to english
if (!isset($_SESSION["lang"])) {
    // $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    // switch ($browser_lang){
    //        case "fr":
    //     $_SESSION["lang"] = "fr";
    //     default:
    //         $_SESSION["lang"] = "en";
    //         break;
    //     }
    // }else{
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