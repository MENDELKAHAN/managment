<?php

function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
  $class_name = strtolower($class_name);
  $path = LIB_PATH.DS."{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
    die("The file {$class_name}.php could not be found.");
  }
}

function include_layout_template($template=""){
  include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function log_action($action, $message=""){
  $logfile = SITE_ROOT.DS."logs". DS ."log.txt";
  $new = file_exists($logfile) ? true : false;
  

  if($handle = fopen($logfile, 'a')){ 
   
    $timestamp = strftime("%Y-%m-%d %H:%M:%S",time());
    $content = "{$timestamp} | {$action}: {$message} \n";
    fwrite($handle, $content);
    // (!(is_writable($logfile)) ? "error":"";
   $content = file_get_contents($logfile);
  }
}

// html form drop down menu
function form_dropdown($class, $atribute_name,$value, $option_text){
  $objects = $class::find_all();
  $return  = "<select name='$atribute_name'> ";
  foreach($objects as $object):
      $return .="<option value='{$object -> $value}'>{$object -> $option_text}</option>";
  endforeach;
  $return .="</select>";
  return $return;

}

function datetime_to_text($datetime="") {
  $unixdatetime = strtotime($datetime);
  return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}

function text_to_email($text){
 $email = "<a href='mailto:{$text}'>{$text}</a>";
  return $email;

}

function cell_link($class_name,$link,$id, $class_row){
  if($id >0){
      $class_id = $class_name::find_by_id($id);
      $link_name = $class_id -> $class_row;
      return make_a_link($link_name,$link,$id);
  }
  return "Unlinked";
    }


function make_a_link($link_name,$link,$id){
  $return_value = "<a href='$link=$id'>{$link_name}</a>";
  return $return_value;
}

// function is_paid($expense_is){
//       $sql = "SELECT 
//       SUM(`payments_amount`) AS paid
//       FROM `payments` 
//       JOIN payments_expenses ON payments_id = fk_payments_id 
//       JOIN expenses on `expenses_id` = `fk_expenses_id` AND expenses_id = {$expense_is}";
  
//       $paid = Payments::find_by_sql($sql);
//       foreach($paid as $pay):
//       print_r($pay ->paid);
//     endforeach; 

//     }

?>