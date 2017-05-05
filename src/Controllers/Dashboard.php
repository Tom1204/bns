<?php
require_once "../basic/View.php";
require_once "../apps/Authentication.php";

class Dashboard extends View
{

    public static function render($parameter = null)
    {
        $auth = Authentication::get(array("session" => $_COOKIE["Auth"]));
        $user = User::get(array("id"=>$auth->user));
        return array("user" => $user);
    }
}