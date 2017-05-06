<?php
require_once "../controllers/Dashboard.php";

$data = Dashboard::render();
extract($data);
echo $user->username;