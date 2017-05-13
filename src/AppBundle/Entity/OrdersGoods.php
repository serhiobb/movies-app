<?php

namespace AppBundle\Entity;

/**
 * OrdersGoods
 */
class OrdersGoods
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Order
     */
    private $orderId;

    /**
     * @var Good
     */
    private $goodId;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrdersGoods
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return Orders
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set goodId
     *
     * @param integer $goodId
     *
     * @return OrdersGoods
     */
    public function setGoodId($goodId)
    {
        $this->goodId = $goodId;

        return $this;
    }

    /**
     * Get goodId
     *
     * @return Goods
     */
    public function getGoodId()
    {
        return $this->goodId;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }
}

