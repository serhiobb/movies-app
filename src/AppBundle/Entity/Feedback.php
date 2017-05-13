<?php

namespace AppBundle\Entity;

/**
 * Feedback
 */
class Feedback
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $whereFrom;

    /**
     * @var string
     */
    private $content;


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
     * Set whereFrom
     *
     * @param string $whereFrom
     *
     * @return Feedback
     */
    public function setWhereFrom($whereFrom)
    {
        $this->whereFrom = $whereFrom;

        return $this;
    }

    /**
     * Get whereFrom
     *
     * @return string
     */
    public function getWhereFrom()
    {
        return $this->whereFrom;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Feedback
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    public function __toString()
    {
        return $this->getId();
    }
}

