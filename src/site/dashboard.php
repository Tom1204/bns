<?php
require_once "../controllers/Dashboard.php";

$data = Dashboard::render();
extract($data);
if($user){
	echo $user->username;
}else{
	echo "exception";
}