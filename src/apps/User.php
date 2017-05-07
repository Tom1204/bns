<?php


require_once "../basic/Model.php";


class User extends Model
{
    public $username;
    public $password;
    public $full_name;
    public $user_type;
    public $email;
    public $is_delete = false;

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