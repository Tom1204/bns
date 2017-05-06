<?php
require_once "basic/Url.php";
require_once "controllers/Registration.php";
require_once "controllers/Login.php";
require_once "controllers/Dashboard.php";


class Urls extends Url
{
    public static $urls = array("/",
        "/^registration/" => array("Registration", "as_view"),
        "/^login/" => array("Login", "as_view"),
        "/^dashboard/" => array("Dashboard", "as_view"),
        "/^statistics/" => array("Dashboard", "as_view"),

    );
}
