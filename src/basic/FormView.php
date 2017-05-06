<?php
ob_start();

abstract class FormView
{
    public static $model;
    public static $template_name;
    public static $success_url;

    public static function as_view($url)
    {
        header("LOCATION: $url");
    }

    abstract public static function render($parameter = null);
}