<?php

namespace AppBundle\Entity;

/**
 * GoodCards
 */
class GoodCards
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $goodId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var binary
     */
    private $image;


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
     * Set goodId
     *
     * @param integer $goodId
     *
     * @return GoodCards
     */
    public function setGoodId($goodId)
    {
        $this->goodId = $goodId;

        return $this;
    }

    /**
     * Get goodId
     *
     * @return integer
     */
    public function getGoodId()
    {
        return $this->goodId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return GoodCards
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param binary $image
     *
     * @return GoodCards
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return binary
     */
    public function getImage()
    {
        return $this->image;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }
}

