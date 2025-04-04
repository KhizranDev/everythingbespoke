<?php

require_once(LIB_PATH.DS.'database.php');

class Fabrics extends DatabaseObject {

    protected static $table_name="tbl_fabric";
    protected static $db_fields = array();

    public $Id;
    public $TypeId;
    public $TypeName;
    public $FullName;
    public $BrandId;
    public $BrandName;
    public $IsActive;

    public static function find_all() {

        $sql = "SELECT f.id, f.fullname, f.isactive, b.id brand_id, b.fullname brand_name, t.id type_id, t.fullname type_name
                FROM ".self::$table_name." f
                INNER JOIN tbl_brand b ON b.id = f.brand_id
                INNER JOIN tbl_type t ON t.id = f.type_id";

        return self::find_by_sql($sql);
    }

    public static function find_all_by_id($data) {
        $id = $data['dataid'];

        $sql = "SELECT id,type_id,brand_id,fullname,isactive FROM ".self::$table_name." WHERE id = '$id'";
        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function save($data) {

        //return 50;

        global $database;
        $datetime = date('Y-m-d H:m:i');
        $login_id = @$_SESSION['login_id'];
        $response = 0;

        $isactive = $data["chkIsActive"] == "on" ? 1 : 0;

        if ($data['dataid'] == 0){
            $sql = "INSERT INTO ".self::$table_name." (type_id,brand_id,fullname,isactive,modified_by,modified_on)";
            $sql .= "VALUES ('".$data["ddlType"]."', '".$data["ddlBrand"]."', '".$data["txtFabricName"]."', '".$isactive."', '".$login_id."', '".$datetime."')";

            if ($database->query($sql)) {
                $response = $database->insert_id();
            }

        }
        else{
            $sql = "UPDATE ".self::$table_name." SET type_id = '".$data["ddlType"]."', brand_id = '".$data["ddlBrand"]."', fullname = '".$data["txtFabricName"]."', isactive = '".$isactive."', modified_by = '$login_id', modified_on = '$datetime' ";
            $sql .= " WHERE id = '".$data['dataid']."'";
            $database->query($sql);
            $response = 1;
        }

        return $response;
    }

    public static function delete($data) {

        global $database;
        $sql = "DELETE FROM ".self::$table_name." WHERE id = '".$data['dataid']."'";

        if ($database->query($sql)) {
            return "000";
        }else{
            return "999";
        }
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
        $object->TypeId 		= $record['type_id'];
        $object->TypeName 		= $record['type_name'];
        $object->BrandId 		= $record['brand_id'];
        $object->BrandName 		= $record['brand_name'];
        $object->IsActive 	    = $record['isactive'];

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