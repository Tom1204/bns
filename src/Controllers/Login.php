<?php

require_once "../basic/FormView.php";
require_once "../apps/Authentication.php";
require_once "../basic/template_renderer.php";

/**
 * Created by PhpStorm.
 * User: tom1
 * Date: 5/5/17
 * Time: 2:13 PM
 */
class Login extends FormView
{

    public static function render($parameter = null)
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $session = Authentication::login($username, $password);
        if (in_array("error", $session)){
            url("login.php");
        }
        setcookie("Auth", $session, time()+86400*30);
        url("statistics.php");
    }

}

?>