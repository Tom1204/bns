<?php
require_once "../controllers/Products.php";

$products = Products::render();

foreach ($products as $product) {
    echo $product->name;
}

