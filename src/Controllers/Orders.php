<?php

/**
 * Created by PhpStorm.
 * User: tom1
 * Date: 5/5/17
 * Time: 2:47 PM
 */
class Orders extends View
{
    public static function render($parameter = null)
    {
        $orders = Order::all();
        return $orders;
    }
}