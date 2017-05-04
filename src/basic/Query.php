<?php

/**
 * Created by PhpStorm.
 * User: tom1
 * Date: 5/4/17
 * Time: 9:12 AM
 */
class Query
{
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

    function get_update_query()
    {
        $query = "";
        $map = get_object_vars($this);
        unset($map["id"]);
        $count = count($map);
        $i = 0;
        foreach ($map as $key => $value) {
            if ($i != $count - 1) {
                $query .= "$key='$value',";
            } else {
                $query .= "$key='$value'";
            }
            $i++;
        }
        return $query;
    }
}