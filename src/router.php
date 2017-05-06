<?php
require_once "basic/Url.php";
require_once "Controllers/Registration.php";
require_once "Controllers/Login.php";
require_once "Controllers/Dashboard.php";
require_once "Controllers/Users.php";


class Urls extends Url
{
    public static $urls = array("/",
        "/^registration/" => array("Registration", "as_view"),
        "/^login/" => array("Login", "as_view"),
        "/^dashboard/" => array("Dashboard", "as_view"),
        "/^users/" => array("Users", "as_view"),
    );
}
