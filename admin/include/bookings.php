<?php

require_once(LIB_PATH.DS.'database.php');

class Bookings extends DatabaseObject {

    protected static $table_name="tbl_appointment";
    protected static $db_fields = array();

    public $Id;
    public $FullName;
    public $Number;
    public $Occupation;
    public $Email;
    public $ScheduleDate;
    public $ScheduleTime;
    public $SchedulePlace;
    public $Message;
    public $Wardrobe;
    public $BookingDatetime;
    public $TypeName;
    public $BrandName;

    public static function find_all() {

        $sql = "SELECT b.id, b.fullname, b.number, b.occupation, b.email, b.schedule_date, b.schedule_time, b.schedule_place, b.booking_datetime
                FROM ".self::$table_name." b
                ORDER BY b.id DESC";

        return self::find_by_sql($sql);
    }

    public static function find_all_by_id($id) {

        $sql = "SELECT a.*, t.fullname type_name, b.fullname brand_name
                FROM ".self::$table_name." a
                INNER JOIN tbl_type t ON a.type_id = t.id
                INNER JOIN tbl_brand b ON a.brand_id = b.id
                WHERE a.id = '$id'";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
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
        $object->Id 		        = $record['id'];
        $object->FullName 		    = $record['fullname'];
        $object->Number 		    = $record['number'];
        $object->Occupation 		= $record['occupation'];
        $object->Email 	            = $record['email'];
        $object->ScheduleDate 	    = $record['schedule_date'];
        $object->ScheduleTime 	    = $record['schedule_time'];
        $object->SchedulePlace 	    = $record['schedule_place'];
        $object->Message 	        = $record['message'];
        $object->Wardrobe 	        = $record['wardrobe'];
        $object->BookingDatetime 	= $record['booking_datetime'];
        $object->TypeName 	        = $record['type_name'];
        $object->BrandName 	        = $record['brand_name'];

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