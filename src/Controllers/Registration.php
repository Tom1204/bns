<?php
require "../basic/View.php";
require "../apps/User.php";

class Registration extends View
{
    public static $model;
    public static $success_url;


    public static function render($parameter = null)
    {
        echo "Registration";
        $user = new User();
        $user->username = $_REQUEST["username"];
        $user->password = $_REQUEST["password"];
        $user->user_type = "0";
        $user->full_name = $_REQUEST["full_name"];
        $user->email = $_REQUEST["email"];
        $user->save();
    }
}