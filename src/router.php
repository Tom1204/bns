<?php
require_once "basic/Url.php";
require_once "Controllers/Registration.php";
require_once "Controllers/Login.php";
require_once "Controllers/Dashboard.php";


class Urls extends Url
{
    public static $urls = array("/",
        "/^registration/" => array("Registration", "as_view"),
        "/^login/" => array("Login", "as_view"),
        "/^dashboard/" => array("Dashboard", "as_view"),
        "/^myBooks/" => array("Book", "as_view"),
        "/^myProducts/" => array("Products", "as_view"),
        "/^purchase/" => array("Purchase", "as_view"),
        "/^statistics/" => array("Statistics", "as_view"),
    );
}
