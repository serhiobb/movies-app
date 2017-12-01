<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table(name="Artist")
 * @ORM\Entity
 */
class Artist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ArtistId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artistid;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=120, nullable=true)
     */
    private $name;

    /**
     * @return int
     */
    public function getArtistid()
    {
        return $this->artistid;
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

