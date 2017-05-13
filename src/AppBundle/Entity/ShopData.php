<?php

namespace AppBundle\Entity;

/**
 * ShopData
 */
class ShopData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $apiKeys;


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
     * Set name
     *
     * @param string $name
     *
     * @return ShopData
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set apiKeys
     *
     * @param string $apiKeys
     *
     * @return ShopData
     */
    public function setApiKeys($apiKeys)
    {
        $this->apiKeys = $apiKeys;

        return $this;
    }

    /**
     * Get apiKeys
     *
     * @return string
     */
    public function getApiKeys()
    {
        return $this->apiKeys;
    }

    function __toString()
    {
        return $this->getName();
    }
}

