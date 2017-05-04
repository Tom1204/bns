<?php
require "../apps/Authentication.php";

$user = User::get(array("username"=>"lucy"));
$user->username="tom";
$user->save();

//try {
//    $session = Authentication::login("tom", "aprel12aprel15");
//    setcookie("IP",$session,time()+(86400*30));
//} catch (InvalidArgumentException $e) {
//    echo $e->getMessage();
//}
//
//echo $_COOKIE["IP"];