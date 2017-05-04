<?php
require "../apps/Authentication.php";

try {
    $session = Authentication::login("tom", "aprel12aprel15");
    setcookie("IP",$session,time()+(86400*30));
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo $_COOKIE["IP"];