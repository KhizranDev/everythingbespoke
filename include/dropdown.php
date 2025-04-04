<?php

require_once(LIB_PATH.DS.'database.php');

class Dropdown extends DatabaseObject {

    protected static $table_name="";
    protected static $db_fields = array();

    public $Id;
    public $FullName;
    public $IsActive;

    public static function find_all_type() {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_type WHERE isactive = 1 ORDER BY fullname");
    }

    public static function find_all_brand_by_type($type_id) {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_brand WHERE type_id = '$type_id' AND isactive = 1 ORDER BY fullname");
    }

    public static function find_all_fabric_by_brand($brand_id) {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_fabric WHERE brand_id = '$brand_id' AND isactive = 1 ORDER BY fullname");
    }

    public static function find_all_article_by_fabric($fabric_id) {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_article WHERE fabric_id = '$fabric_id' AND isactive = 1 ORDER BY fullname");
    }

    public static function find_all_style_type_by_type($type_id) {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_style_type WHERE type_id = '$type_id' AND isactive = 1 ORDER BY fullname");
    }

    public static function find_all_style_by_style_type($style_type_id) {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_style WHERE style_type_id = '$style_type_id' AND isactive = 1 ORDER BY fullname");
    }

    public static function find_all_locations() {
        return self::find_by_sql("SELECT id,fullname,isactive FROM tbl_location WHERE isactive = 1 ORDER BY fullname");
    }

    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    private static function instantiate($record) {
        // Could check that $record exists and is an array
        $object = new self;
        // Simple, long-form approach:
        $object->Id 		    = $record['id'];
        $object->FullName 		= $record['fullname'];
        $object->IsActive 	    = $record['active'];

        return $object;
    }

    private function has_attribute($attribute) {
        // We don't care about the value, we just want to know if the key exists
        // Will return true or false
        return array_key_exists($attribute, $this->attributes());
    }

    protected function attributes() {
        // return an array of attribute names and their values
        $attributes = array();
        foreach(self::$db_fields as $field) {
            if(property_exists($this, $field)) {
                $attributes[$field] = $this->$field;
            }
        }
        return $attributes;
    }

    protected function sanitized_attributes() {
        global $database;
        $clean_attributes = array();
        // sanitize the values before submitting
        // Note: does not alter the actual value of each attribute
        foreach($this->attributes() as $key => $value){
            $clean_attributes[$key] = $database->escape_value($value);
        }
        return $clean_attributes;
    }

}