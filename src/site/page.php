<?php
require "../apps/Authentication.php";

if(Authentication::is_authenticated($_COOKIE["IP"])){
    echo "True";
}else{
    echo "False";
}