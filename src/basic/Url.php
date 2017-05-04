<?php

class Url
{
    public static $urls = array("/",
//                "/^register$" => array("Registration", "as_view"),
    );

    public static function check($url, $parameter = null)
    {
        foreach (static::$urls as $pattern => $func) {
            if(preg_match($pattern, $url)){
                echo "MATCH";
            }else{
                echo "NOT MATCH";
            }
            preg_match("$pattern", $url) ? $func($parameter) : false;
        }
    }
}