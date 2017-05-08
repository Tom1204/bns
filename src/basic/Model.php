<?php


require_once "DBConnector.php";
require_once "Query.php";

abstract class Model extends Query
{
    public $id = null;
    static $counter = 0;


    static function all()
    {
        $class_name = get_called_class();
        $query = "SELECT * FROM " . $class_name . " WHERE is_delete=0";
        $objects = array();
        if ($result = DBConnector::Instance()->make_query($query)) {
            if (mysqli_num_rows($result) != 0) {
                while ($object = mysqli_fetch_object($result, $class_name)) {
                    array_push($objects, $object);
                }
                return $objects;
            }
        }
        return $objects;
    }

    static function get(array $query)
    {
        $query_args = self::get_query($query);
        $class_name = get_called_class();
        $query_string = "SELECT * FROM " . $class_name . " WHERE is_delete=0 AND " . $query_args;
        if ($result = DBConnector::Instance()->make_query($query_string)) {
            if (mysqli_num_rows($result) != 0) {
                $object = mysqli_fetch_object($result, $class_name);
                return $object;
            }
        }
        return null;
    }

    static function filter(array $query)
    {
        $query_args = self::get_query($query);
        $class_name = get_called_class();
        $query_string = "SELECT * FROM " . $class_name . " WHERE is_delete=0 AND " . $query_args;
        $objects = array();
        if ($result = DBConnector::Instance()->make_query($query_string)) {
            if (mysqli_num_rows($result) != 0) {
                while ($object = mysqli_fetch_object($result, $class_name)) {
                    array_push($objects, $object);
                }
                return $objects;
            }
        }
        return $objects;
    }

    static function reverse_filter(array $query)
    {
        $query_args = self::reverse_filter($query);
        $class_name = get_called_class();
        $query_string = "SELECT * FROM " . $class_name . " WHERE is_delete=0 AND " . $query_args;
        $objects = array();
        if ($result = DBConnector::Instance()->make_query($query_string)) {
            if (mysqli_num_rows($result) != 0) {
                while ($object = mysqli_fetch_object($result, $class_name)) {
                    array_push($objects, $object);
                }
                return $objects;
            }
        }
        return $objects;
    }

    function save()
    {
        $class_name = get_called_class();
        if ($this->id != null) {
            $this->update();
            return;
        }
        $properties = $this->properties();
        $columns = $properties["columns"];
        $values = $properties["values"];
        $query = "INSERT INTO  $class_name ($columns) VALUES($values);";
        DBConnector::Instance()->insert($query);
    }


    public static function advancedquery($query)
    {

        if ($result = DBConnector::Instance()->make_query($query)) {
            if (mysqli_num_rows($result) != 0) {
                return $result;
            } else {
                return null;
            }
        }
    }


    private function update()
    {
        $class_name = get_called_class();
        $query_args = $this->get_update_query();
        $query = "UPDATE $class_name SET  $query_args WHERE id=$this->id";
        DBConnector::Instance()->insert($query);
    }

    static function search($pattern)
    {
        $class_name = get_called_class();
        $query_args = self::get_search_args($pattern);
        $query = "SELECT * FROM $class_name WHERE $query_args";
        $objects = array();
        if ($result = DBConnector::Instance()->make_query($query)) {
            if (mysqli_num_rows($result) != 0) {
                while ($object = mysqli_fetch_object($result, $class_name)) {
                    array_push($objects, $object);
                }
                return $objects;
            }
        }
        return $objects;
    }
}