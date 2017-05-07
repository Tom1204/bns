<?php

require_once "../Controllers/Users.php";

$user=Users::render();

echo $user->username;
echo $_COOKIE["Auth"];