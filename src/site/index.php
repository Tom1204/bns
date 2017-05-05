<?php
require "../apps/Authentication.php";

//$user = User::get(array("username"=>"lucy"));
//$user->username="tom";
//$user->save();
//
//try {
//    $session = Authentication::login("tom", "aprel12aprel15");
//    setcookie("IP",$session,time()+(86400*30));
//} catch (InvalidArgumentException $e) {
//    echo $e->getMessage();
//}
//
//echo $_COOKIE["IP"];

//echo $_SERVER["REQUEST_URI"];
//if(preg_match("/^page[/]/", "page/")){
//    echo "yes";
//}
//$model = "User";
//$users =  $model::all();
//foreach ($users as $user) {
//    echo $user->username;
//}
//class A
//{
//    public static function hello()
//    {
//        echo "hello world";
//    }
//}
//
//$a = array("function" => array("A", "hello"));
//$a["function"]();

echo preg_match("/^page/", "page/") ? "yes" : "no";