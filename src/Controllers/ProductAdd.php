<?php
require_once "../basic/FormView.php";
require_once "../basic/template_renderer.php";
require_once "../apps/Product.php";

/**
 * Created by PhpStorm.
 * User: Tulkinjon
 * Date: 5/5/17
 * Time: 2:46 PM
 */
class ProductAdd extends FormView
{

    public static function render($parameter = null)
    {
        $product = new Product();
        $product->name = $_POST["name"];
        $product->type = $_POST["type"];
        $product->cost = $_POST["cost"];
        $product->description = $_POST["description"];

        $session = $_COOKIE["Auth"];
        $auth = Authentication::get(array("session" => $session));
        $userId = $auth->user;

        $product->user = $userId;

        $product->save();

        url('myProducts.php');
    }

}