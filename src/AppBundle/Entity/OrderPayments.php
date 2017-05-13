<?php

namespace AppBundle\Entity;

/**
 * OrderPayments
 */
class OrderPayments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Customer
     */
    private $customerId;


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
     * Set status
     *
     * @param string $status
     *
     * @return OrderPayments
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return OrderPayments
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

    public function __toString()
    {
        return (string) $this->getId();
    }
}

