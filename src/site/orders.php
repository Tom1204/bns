<?php
/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 06-May-17
 * Time: 14:10
 */

require_once "../Controllers/Orders.php";

$orders = Orders::render();

foreach ($orders as $order){
    echo $order->name;
}