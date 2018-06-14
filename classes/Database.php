<?php
/**
 * MySQLDatabase
 * 
 * This is a standard Database class for MYSQL servers
 * @author Mendel Kahan <mendy@onlineforu.co.uk>
 */

class MySQLDatabase {
    
    protected $connection;
    
    function __construct(){
        $this->open_connection();
    }
    
    /**
     * 
     * Open Database connection paramators are stored in the config.php file
     *
     * @param DB_SERVER  
     * @param DB_USER  
     * @param iDB_PASS  
     * @param DB_NAME  
     */
    
    public function open_connection(){
        $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        
        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
        }
    }
    
    
    /**
     * Close Database connection
     */
    public function close_connection(){
        if (isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }
    
    /**
     * query
     * queries the databasee
     *
     * @param $sql, sql query
     * @return $result 
     */
    
       public function query($sql){
        
        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }
    
    /**
     * confirm_query
     * tests a query result
     *
     * @param $sql, sql query
     */
    private function confirm_query($result){
        if (!$result) {
            die("Database query failed.");
        }
    }
    
    /**
     * escape_value
     * escapes SQL queries keeps site integrity
     * this mentod user php mysqli_real_escape_string function
     *
     * @param $string 
     */
    public function escape_value($string){
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        return $escaped_string;
    }
    
    /**
     * fetch_array
     *
     * @param $result_set
     * @return $result_set
     */
    public function fetch_array($result_set){
        return mysqli_fetch_array($result_set);
    }
    
    /**
     * num_rows
     *
     * @param $result_set
     * @return mysqli_num_rows();
     */
    public function num_rows($result_set){
        return mysqli_num_rows($result_set);
    }
    
    /**
     * insert_id
     *
     * @param $insert_id
     * @return mysqli_insert_id();
     */
    public function insert_id(){
        // get the last id inserted over the current db connection
        return mysqli_insert_id($this->connection);
    }
    
    /**
     * affected_rows
     *
     * @return mysqli_affected_rows();
     */
    public function affected_rows(){
        return mysqli_affected_rows($this->connection);
    }
    
}

// starts the sql server
$database = new MySQLDatabase();
$db =& $database;

?>