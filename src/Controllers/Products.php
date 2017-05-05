<?php
require_once "../basic/View.php";
require_once "../basic/template_renderer.php";
require_once "../apps/Product.php";

class Products extends View
{

    public static function render($parameter = null)
    {
        $products = Product::all();
        return $products;
    }
}