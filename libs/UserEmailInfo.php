<?php
require_once('DatabaseObject.php');

/**
 * Users
 * 
 * Class for users table
 * @author Mendel Kahan <mendy@onlineforu.co.uk>
 */

class UserEmailInfo extends DatabaseObject{
    protected static $table_name = "user_email_info";
    
    // SHOW COLUMNS FROM table_name
    public $db_fields = array();

    public $user_email_info_id;
    public $user_email_info_email;
    public $user_email_info_type;
    public $user_id;
    
    
    function __construct()
    {
        $this->db_fields = $this->getColumnNames();
    }


}
?>
    
