<?php
require_once('DatabaseObject.php');

/**
 * Users
 * 
 * Class for users table
 * @author Mendel Kahan <mendy@onlineforu.co.uk>
 */

class Users extends DatabaseObject{
    protected static $table_name = "users";
    
    // SHOW COLUMNS FROM table_name
    public $db_fields = array();


    public $users_fname;
    public $users_sname;
    public $users_password;
    public $users_group;
    
    function __construct()
    {
        $this->db_fields = $this->getColumnNames();
    }


    public function full_name() {
        if(isset($this->first_name) && isset($this->last_name)) {
          return $this->first_name . " " . $this->last_name;
        } else {
          return "";
        }
      }

    public static function authenticate($username="", $password="") {
        global $database;
        $username = $database->escape_value($username);
        $password = $database->escape_value($password);

        $sql  = "SELECT * FROM  users ";
        $sql .= "WHERE users_username = '{$username}' ";
        $sql .= "AND users_password = '{$password}' ";
        $sql .= "LIMIT 1";

        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    private function has_attributes($aattributes){
        $object_vars = $this-> attributes();
        return array_key_exists($attributes, $object_vars);
    }



// temp over ride

      /**
     * find_by_id
     * return row based on id
     * @param $id 
     * @return sql result
     */
    public static function find_by_id($id = 0){
        $result_array = static::find_by_sql("SELECT * FROM  " . static::$table_name . "  WHERE " . "id={$id} LIMIT 1");
        
        return !empty($result_array) ? array_shift($result_array) : false;
    }


}
?>
    
