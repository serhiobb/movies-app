<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatype
 *
 * @ORM\Table(name="MediaType")
 * @ORM\Entity
 */
class Mediatype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MediaTypeId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediatypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=120, nullable=true)
     */
    private $name;

    /**
     * @return int
     */
    public function getMediatypeid()
    {
        return $this->mediatypeid;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    function __toString()
    {
        return $this->getName();
    }


}

