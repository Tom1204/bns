<?php


require "../basic/Model.php";


class User extends Model
{
    public $id;
    public $username;
    public $password;
    public $full_name;
    public $user_type;
    public $email;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

}