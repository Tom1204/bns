<?php
require_once "../basic/View.php";
require_once "../apps/Authentication.php";

class Dashboard extends View
{

    public static function render($parameter = null)
    {
    	if(isset($_COOKIE["Auth"])){
	        $auth = Authentication::get(array("session" => $_COOKIE["Auth"]));  		
	        $user = User::get(array("id"=>$auth->user));
	        return array("user" => $user);
    	}else{
    		echo "Failed Auth";
    	}
    }
}