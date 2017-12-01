<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlist
 *
 * @ORM\Table(name="Playlist")
 * @ORM\Entity
 */
class Playlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PlaylistId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $playlistid;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=120, nullable=true)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Track", inversedBy="playlistid")
     * @ORM\JoinTable(name="PlaylistTrack",
     *   joinColumns={
     *     @ORM\JoinColumn(name="PlaylistId", referencedColumnName="PlaylistId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="TrackId", referencedColumnName="TrackId")
     *   }
     * )
     */
    private $trackid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trackid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getPlaylistid()
    {
        return $this->playlistid;
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

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $trackid
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;
    }

    function __toString()
    {
        return $this->getName();
    }


}

