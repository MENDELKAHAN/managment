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
    public $users_name;
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

    public function authenticate($username="", $password="") {

     

        $username = self::$database->escape_string($username);
        $password = self::$database->escape_string($password);
       
        $sql = "SELECT * FROM   users  WHERE users_fname =" . "'". $username ."'";
        $result_set = self::$database->query($sql);

      
        if($result_set->num_rows > 0){
            $sql = "SELECT * FROM   users  WHERE users_fname =" . "'". $username ."'";

            $result_set = self::$database->query($sql);
            $row =  mysqli_fetch_assoc($result_set);
            if(Password::verify($password,$row['users_password'])){
                Session::set('user',$row['id']);
                Session::set('logedIn',true);

                // redirect_to('index');
                header('index');
            }else{
                 // redirect_to(URL.'login');

        }

    }
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
    
