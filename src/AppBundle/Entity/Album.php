<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="Album", indexes={@ORM\Index(name="IFK_AlbumArtistId", columns={"ArtistId"})})
 * @ORM\Entity
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AlbumId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumid;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=160, nullable=false)
     */
    private $title;

    /**
     * @var Artist
     *
     * @ORM\ManyToOne(targetEntity="Artist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ArtistId", referencedColumnName="ArtistId")
     * })
     */
    private $artistid;

    /**
     * @return int
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return Artist
     */
    public function getArtistid()
    {
        return $this->artistid;
    }

    /**
     * @param Artist $artistid
     */
    public function setArtistid($artistid)
    {
        $this->artistid = $artistid;
    }

    function __toString()
    {
        return $this->getTitle();
    }


}

