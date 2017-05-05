<?php
require "basic/Url.php";
require "Controllers/Registration.php";


class Urls extends Url
{
    public static $urls = array("/",
        "/^register/" => array("Registration", "as_view"),
    );
}
