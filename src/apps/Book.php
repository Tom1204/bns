<?php

/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 06-May-17
 * Time: 13:33
 */
class Book extends Model
{
    public $id;
    public $productId;
    public $producerId;
    public $user;
    public $total_cost;
    public $time;
    public $is_delete = 0;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }


    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }


    /**
     * @return mixed
     */
    public function getProducerId()
    {
        return $this->producerId;
    }

    /**
     * @param mixed $producerId
     */
    public function setProducerId($producerId)
    {
        $this->producerId = $producerId;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @param $user
     * @internal param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
     * @return mixed
     */
    public function getTotalCost()
    {
        return $this->total_cost;
    }


    /**
     * @param mixed $total_cost
     */
    public function setTotalCost($total_cost)
    {
        $this->total_cost = $total_cost;
    }


    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }


    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
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