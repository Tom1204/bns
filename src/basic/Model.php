<?php


require "DBConnector.php";

abstract class Model
{

    static function all()
    {
        $class_name = get_called_class();
        $query = "SELECT * FROM " . $class_name;
        $result = DBConnector::Instance()->make_query($query);
        $objects = array();
        if (mysqli_num_rows($result) != 0) {
            while ($object = mysqli_fetch_object($result, $class_name)) {
                array_push($objects, $object);
            }
            return $objects;
        } else {
            return $objects;
        }
    }

    static function get(array $query)
    {
        $query_args = self::get_query($query);
        $class_name = get_called_class();
        $query_string = "SELECT * FROM " . $class_name . " WHERE " . $query_args;
        $result = DBConnector::Instance()->make_query($query_string);
        if (mysqli_num_rows($result) != 0) {
            $object = mysqli_fetch_object($result, $class_name);
            return $object;
        } else {
            return null;
        }
    }

    static function filter(array $query)
    {
        $query_args = self::get_query($query);
        $class_name = get_called_class();
        $query_string = "SELECT * FROM " . $class_name . " WHERE " . $query_args;
        $result = DBConnector::Instance()->make_query($query_string);
        $objects = array();
        if (mysqli_num_rows($result) != 0) {
            while ($object = mysqli_fetch_object($result, $class_name)) {
                array_push($objects, $object);
            }
            return $objects;
        } else {
            return $objects;
        }
    }

    function save()
    {
        $class_name = get_called_class();
        $properties = $this->properties();
        $columns = $properties["columns"];
        $values = $properties["values"];
        $query = "INSERT INTO  $class_name ($columns) VALUES ($values);";
        DBConnector::Instance()->insert($query);

    }

    function properties()
    {
        $columns = "";
        $values = "";
        $map = get_object_vars($this);
        unset($map["id"]);
        $count = count($map);
        $i = 0;
        foreach ($map as $key => $value) {
            if ($i != $count - 1) {
                $columns .= "$key,";
                $values .= "'$value',";
            } else {
                $columns .= "$key";
                $values .= "'$value'";
            }
            $i++;
        }
        return array("columns" => $columns, "values" => $values);
    }

    static function get_query(array $args)
    {
        $query = "";
        $count = count($args);
        $i = 0;
        foreach ($args as $key => $value) {
            if ($i != $count - 1) {
                $query .= "BINARY $key='$value' and ";
            } else {
                $query .= "BINARY $key='$value'";
            }
            $i++;
        }
        return $query;
    }


}