<?php
require_once "../Controllers/Dashboard.php";

$data = Dashboard::render();
extract($data);
echo $user->username;