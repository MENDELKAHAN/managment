<?php

/**
 *  parent class from banks
 *  extends db object
 */

class Bank extends DatabaseObject{

	function __construct() {
       $this-> db_fields = $this->getColumnNames();

   }
}
?>

