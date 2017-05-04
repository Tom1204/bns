<?php

abstract class View
{
    public static $model;
    public static $success_url;

    public static function as_view($parameter=null)
    {
        static::render($parameter);

        self::go_success_url();
    }

    private static function go_success_url(){
        ob_start();
        if (!self::$success_url){
            echo "Not provided success url";
            return;
        }
        $url = self::$success_url;
        header("Location: $url");
    }

    abstract public static function render($parameter=null);


}