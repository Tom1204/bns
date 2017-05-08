<?php

require_once "../basic/View.php";
require_once "../apps/User.php";

/**
 * Created by PhpStorm.
 * User: tom1
 * Date: 5/5/17
 * Time: 3:07 PM
 */
class Users extends View
{

    public static function render($parameter = null)
    {

        $users=User::all();

        return $users;

    }
}