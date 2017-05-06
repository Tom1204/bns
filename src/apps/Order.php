<?php

/**
 * Created by PhpStorm.
 * User: Sherzodbek
 * Date: 06-May-17
 * Time: 13:33
 */
class Order extends Model
{
    public $id;
    public $productId;
    public $userId;
    public $total_cost;
    public $time;

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
    public function getUserId()
    {
        return $this->userId;
    }


    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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


}