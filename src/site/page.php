<?php
require "../apps/Authentication.php";

echo $_SERVER["REQUEST_URI"];

//if(Authentication::is_authenticated($_COOKIE["IP"])){
//    echo "True";
//}else{
//    echo "False";
//}