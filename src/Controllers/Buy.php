<?php

    require_once "../basic/View.php";
    require_once "../basic/template_renderer.php";

/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 07-May-17
 * Time: 19:33
 */
class Buy extends View
{

    public static function render($parameter = null)
    {

        if(isset($parameter)){

            $productId=$parameter;
            $product=Product::get(array("id"=>$productId));

            $total_cost=$product->cost;

            date_default_timezone_set("Asia/Tashkent");

            $time=date("Y-m-d");

            if(isset($_COOKIE["Auth"])){

                $session = $_COOKIE["Auth"];
                $auth = Authentication::get(array("session"=>$session));
                $user_id = $auth->user;

                $newbook=new Book();
                $newbook->productId=$productId;
                $newbook->total_cost=$total_cost;
                $newbook->time=$time;
                $newbook->user=$user_id;

                $newbook->save();

                url('purchase.php');

            }

        }

    }


}