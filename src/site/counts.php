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

    $onlyUsers = count(User::filter(array("user_type"=>0)));

    $onlyCompanies = count(User::filter(array("user_type"=>1)));

    $companyPercent = (float)$onlyCompanies * 100 / ($onlyCompanies + $onlyUsers);

    $userPercent = (float)$onlyUsers * 100 / ($onlyCompanies + $onlyUsers);

    $userId=0;

    if(isset($_COOKIE["Auth"])){
        $session = $_COOKIE["Auth"];
        $auth = Authentication::get(array("session" => $session));
        $userId = $auth->user;
    }

    $productPercent = round((float) count(Product::filter(array("user"=>$userId))) * 100 / $allProducts, 1);

    $orders = Books::filterBooks();
    $actualorders=array();
    $number = 0;

    if(isset($orders)){
        while($order=mysqli_fetch_array($orders)){
            $productObject=Product::get(array("id"=>$order['productId']));
            $order['productId']=$productObject->name;
            $userObject = User::get(array("id"=>$order['user']));
            $order['user'] = $userObject->full_name;
            $actualorders[]=$order;
            $number++;
        }
    }

    $orderPercent = round($number * 100 / $allBooks, 1);

?>