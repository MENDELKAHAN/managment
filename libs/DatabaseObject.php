<?php
// require_once('Database.php');

/**
 * MySQLDatabase
 * 
 * This is a custom Database class for MYSQL servers
 * @author Mendel Kahan <mendy@onlineforu.co.uk>
 */

// class DatabaseObject extends MySQLDatabase{
 class DatabaseObject {


    static public $database;

    static public function set_database($database){
        self::$database = $database;
    }

    /**
     * getColumnNames
     * this mentod returns all column names in a table, it is used for creade a class object
     * helps keeps classes dynamic
     *
     * @return $list a list of all columns in the table 
     */
    
   public function getColumnNames()
    {

        $query = "SELECT * from " . static::$table_name;
        if ($result = self::$database -> query($query)) {
            $list = array();
            while ($finfo = $result->fetch_field()) {
                $list[] = ($finfo->name);
            }
        }
        return $list;
    }
    
    /**
     * save
     * helps decide when to call the update or create mentod 
     */
    public function save(){
        return (isset($this->id)) ? $this->update() : $this->create();
    }
    
    /**
     * creade
     * inserts into database 
     *
     * @return insert_id() last inserted id
     */
    public function create(){
  
        $attributes = $this->sanitized_attributes();
        $table_name = static::$table_name;
        $sql        = "INSERT INTO " . $table_name . " (";
        $sql .= join(", ", array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        if (self::$database->query($sql)) {
            
            return $this->{$table_name . "_id"} = self::$database->insert_id;
            
            // return true;
        } else {
            return false;
        }
    }
    
    
    /**
     * delete
     * delete from database 
     * After deleting, the instance of deleted value is still in object, can be used for undoing delete
     *
     * @return true if affected_rows() = 1 
     */
    public function delete(){
        global $database;
        $sql = "DELETE FROM " . static::$table_name;
        $sql .= " WHERE id=" . $database->escape_value($this->id);
        $sql .= " LIMIT 1";
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;
    }
    
    /**
     * update
     *
     * @return true if affected_rows() = 1 
     */
    
    public function update(){
        global $database;
        $table_name = static::$table_name;
        $id_varible = static::$table_name . "_id";
        $attributes      = $this->sanitized_attributes();
        $attribute_pairs = array();
        foreach ($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
        }
        $sql = "UPDATE " . static::$table_name . " SET ";
        $sql .= join(", ", $attribute_pairs);
        $sql .= " WHERE " . static::$table_name . "_id=" . $database->escape_value($this->$id_varible);
        
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;
        }
    
    /**
     * find_all
     * select all values from table
     *
     * @return find_by_sql(); 
     */
    
    public static function find_all(){
        return static::find_by_sql("SELECT * FROM  " . static::$table_name);
    }
    
    /**
     * count_all
     * count all rows from table
     *
     * @return total rows 
     */
    
    public static function count_all(){
        global $database;
        $sql        = "SELECT COUNT(*) FROM " . static::$table_name;
        $result_set = $database->query($sql);
        $row        = $database->fetch_array($result_set);
        return array_shift($row);
    }
    
    /**
     * find_by_any_key
     * select from table based on any column
     * @param $column column from where to search from
     * @param $key to seach based on
     * @return find_by_sql(); sql result
     */
    
    public static function find_by_any_key($column, $key = 0){
        $sql = "SELECT * FROM  " . static::$table_name . "  WHERE " . $column . " = " . "'" .$key . "'";
        return static::find_by_sql($sql);
    }
    
    /**
     * find_by_id
     * return row based on id
     * @param $id 
     * @return sql result
     */
    public static function find_by_id($id = 0){
        $result_array = static::find_by_sql("SELECT * FROM  " . static::$table_name . "  WHERE " . static::$table_name . "_id={$id} LIMIT 1");
        
        return !empty($result_array) ? array_shift($result_array) : false;
    }
    
    /**
     * find_by_sql
     * calls query method, 
     * @param $sql 
     * @return $object_array values are returned are an object
     */
    public static function find_by_sql($sql = ""){
        
        global $database;
        $result_set = $database->query($sql);
        
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            
            $object_array[] = static::instantiate($row);
            
        }
        return $object_array;
    }
    
    private static function instantiate($record){
        $class_name = get_called_class();
        $object     = new $class_name;
        foreach ($record as $attribute => $value) {
            if ($object->has_attribute($attribute)) {
                
                $object->$attribute = $value;
            }
        }
        return $object;
    }
    
    /**
     * has_attribute
     * @param $has_attribute
     * @return array_key_exists();
     */
    private function has_attribute($attribute){
        $object_vars = get_object_vars($this);

        return array_key_exists($attribute, $object_vars);
    }
    
    /**
     * has_attribute
     * @return attributes();
     */
    protected function attributes(){
        $attributes = array();
        foreach ($this->db_fields as $field) {
            if (property_exists($this, $field)) {
                $attributes[$field] = $this->$field;
            }
        }
        return $attributes;
    }
    
    /**
     * sanitized_attributes
     * this method escapse values
     * @return clean_attributes;
     */
    protected function sanitized_attributes(){
        $clean_attributes = array();
        foreach ($this->attributes() as $key => $value) {
            $clean_attributes[$key] = self::$database->escape_string($value);
        }
        return $clean_attributes;
    }
    
}

?>