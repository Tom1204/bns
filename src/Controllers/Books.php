<?php

/**
 * Created by PhpStorm.
 * User: tom1
 * Date: 24/4/17
 * Time: 2:47 PM
 */

require_once "../basic/View.php";
require_once "../basic/template_renderer.php";
require_once "../apps/Book.php";


class Books extends View
{
    public static function render($parameter = null)
    {
        $orders = Book::all();
        return $orders;
    }
}

?>