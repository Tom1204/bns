<?php
/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 08-May-17
 * Time: 15:39
 */

    require_once "../Controllers/Users.php";
    require_once "../Controllers/Products.php";
    require_once "../Controllers/Books.php";

    $allBooks = count(Book::all());

    $allProducts = count(Product::all());

    $allUsers = count(User::all());

    $onlyCompanies = count(User::filter(array("user_type"=>1)));

?>