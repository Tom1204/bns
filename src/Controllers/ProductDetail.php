<?php
require_once "../basic/View.php";
require_once "../basic/template_renderer.php";

class ProductDetail extends View
{

    public static function render($parameter = null)
    {
        $product = Product::get(array("id" => $_GET["id"]));
        if (isset($_POST["delete"])) {
            $product->is_delete = 1;
            $product->save();
            url('myProducts.php');
        }
        if (isset($_POST["update"])) {
            $product->name = $_POST["name"];
            $product->type = $_POST["type"];
            $product->description = $_POST["description"];
            $product->cost = $_POST["cost"];
            $product->save();
            url('myProducts.php');
        }
        return $product;
    }
}