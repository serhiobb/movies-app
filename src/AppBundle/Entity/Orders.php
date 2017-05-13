<?php

namespace AppBundle\Entity;

/**
 * Orders
 */
class Orders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Customer
     */
    private $customerId;

    /**
     * @var Goods
     */
    private $goods;

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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Orders
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return Customer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getGoods()
    {
        return $this->goods;
    }

    public function setGoods(Goods $goods)
    {
        $this->goods = $goods;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }
}

