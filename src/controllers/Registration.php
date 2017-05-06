<?php
require_once "../basic/FormView.php";
require_once "../basic/template_renderer.php";
require_once "../apps/User.php";

class Registration extends FormView
{
    public static $model;
    public static $template_name = "registration.php";
    public static $success_url = "/login.php";

    public static function render($parameter = null)
    {
        $user = new User();
        $user->username = $_REQUEST["username"];
        $user->password = $_REQUEST["password"];
        $user->user_type = "0";
        $user->full_name = $_REQUEST["full_name"];
        $user->email = $_REQUEST["email"];
        $user->save();
        url('login.php');
    }
}
