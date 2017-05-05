<?php
require_once "../Controllers/Products.php";

$products = Products::render();

foreach ($products as $product) {
    echo $product->name;
}

