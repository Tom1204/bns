<?php

require_once "User.php";

class Authentication extends Model
{
    public $user;
    public $session;
    public $is_delete = 0;

    static public function login($username, $password)
    {
        $args = array("username" => $username, "password" => $password);
        $user = User::get($args);
        if ($user == null) {
            return array("error" => "Username or password is incorrect");
        }
        $authenticated_user = Authentication::check($user->id);
        if ($authenticated_user != null) {
            return $authenticated_user->session;
        }
        $session = hash("haval128,4", $username . $password);
        $auth = Authentication::create($user->id, $session);
        $auth->save();
        return $session;
    }

    static public function is_authenticated($session)
    {
        $user = Authentication::get(array("session" => $session));
        if ($user != null) {
            return true;
        }
        return false;
    }

    static function create($id, $session)
    {
        $instance = new self();
        $instance->user = $id;
        $instance->session = $session;
        return $instance;
    }

    private static function check($id)
    {
        $user = Authentication::get(array("user" => $id));
        return $user;
    }

    public function get_user($session)
    {
        $user = Authentication::get(array("session" => $session));
        return $user;
    }


    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return bool
     */
    public function isIsDelete()
    {
        return $this->is_delete;
    }


    /**
     * @param bool $is_delete
     */
    public function setIsDelete($is_delete)
    {
        $this->is_delete = $is_delete;
    }


}