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


    public static function filterBooks($parameter = null){

        $session=$_COOKIE["Auth"];
        $auth=Authentication::get(array("session"=>$session));
        $userId=$auth->user;
        $query = "SELECT * FROM product, book WHERE product.user=2".$userId." AND book.productId=product.id";
        $myBooks = Book::advancedquery($query);
        echo $myBooks;
        echo "cvsadkjcbashjbashjcbasjcbasjcbasjbcas";
        return $myBooks;
    }


    public static function filterPurchase($parameter = null){

        $session=$_COOKIE["Auth"];
        $auth=Authentication::get(array("session"=>$session));
        $userId=$auth->user;


        $mypurchases = Book::filter(array("user"=>$userId));
        return $mypurchases;

    }


}

?>