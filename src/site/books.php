<?php
/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 06-May-17
 * Time: 14:10
 */

require_once "../Controllers/Books.php";

$orders = Books::render();

foreach ($orders as $order){
    echo $order->time;
    echo $order->total_cost;
}

?>