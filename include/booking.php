<?php

require_once(LIB_PATH.DS.'database.php');

class Booking extends DatabaseObject {

    protected static $table_name="tbl_appointment";
    protected static $db_fields = array();

    public $Id;
    public $FullName;
    public $IsActive;

    public static function save($data,$wardrobe) {

        global $database;
        $datetime = date('Y-m-d H:m:i');

        $sql = "INSERT INTO tbl_appointment (fullname,number,occupation,email,schedule_date,schedule_time,schedule_place,type_id,brand_id,fabric_id,article_id,style_id,message,wardrobe,booking_datetime)";
        $sql .= "VALUES ('".$data["txtFullName"]."', '".$data["txtNumber"]."', '".$data["txtOccupation"]."', '".$data["txtEmail"]."', '".$data["dtpDate"]."', '".$data["ddlTime"]."', '".$data["txtPlace"]."',
                '".$data["ddlType"]."', '".$data["ddlBrand"]."', '".$data["ddlFabric"]."', '".$data["ddlArticle"]."', '".$data["ddlStyle"]."', '".$data["txtMessage"]."', '".$wardrobe."', '".$datetime."')";
        //return $sql;
        $database->query($sql);
        return "000";
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