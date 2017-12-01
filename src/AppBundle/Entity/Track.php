<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Track
 *
 * @ORM\Table(name="Track", indexes={@ORM\Index(name="IFK_TrackAlbumId", columns={"AlbumId"}), @ORM\Index(name="IFK_TrackGenreId", columns={"GenreId"}), @ORM\Index(name="IFK_TrackMediaTypeId", columns={"MediaTypeId"})})
 * @ORM\Entity
 */
class Track
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TrackId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trackid;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Composer", type="string", length=220, nullable=true)
     */
    private $composer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Milliseconds", type="integer", nullable=false)
     */
    private $milliseconds;

    /**
     * @var integer
     *
     * @ORM\Column(name="Bytes", type="integer", nullable=true)
     */
    private $bytes;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitPrice", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $unitprice;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AlbumId", referencedColumnName="AlbumId")
     * })
     */
    private $albumid;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GenreId", referencedColumnName="GenreId")
     * })
     */
    private $genreid;

    /**
     * @var \Mediatype
     *
     * @ORM\ManyToOne(targetEntity="Mediatype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MediaTypeId", referencedColumnName="MediaTypeId")
     * })
     */
    private $mediatypeid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Playlist", mappedBy="trackid")
     */
    private $playlistid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->playlistid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getTrackid()
    {
        return $this->trackid;
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
     * @return string
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @param string $composer
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;
    }

    /**
     * @return int
     */
    public function getMilliseconds()
    {
        return $this->milliseconds;
    }

    /**
     * @param int $milliseconds
     */
    public function setMilliseconds($milliseconds)
    {
        $this->milliseconds = $milliseconds;
    }

    /**
     * @return int
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * @param int $bytes
     */
    public function setBytes($bytes)
    {
        $this->bytes = $bytes;
    }

    /**
     * @return string
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * @param string $unitprice
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;
    }

    /**
     * @return \Album
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }

    /**
     * @param \Album $albumid
     */
    public function setAlbumid($albumid)
    {
        $this->albumid = $albumid;
    }

    /**
     * @return \Genre
     */
    public function getGenreid()
    {
        return $this->genreid;
    }

    /**
     * @param \Genre $genreid
     */
    public function setGenreid($genreid)
    {
        $this->genreid = $genreid;
    }

    /**
     * @return \Mediatype
     */
    public function getMediatypeid()
    {
        return $this->mediatypeid;
    }

    /**
     * @param \Mediatype $mediatypeid
     */
    public function setMediatypeid($mediatypeid)
    {
        $this->mediatypeid = $mediatypeid;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaylistid()
    {
        return $this->playlistid;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $playlistid
     */
    public function setPlaylistid($playlistid)
    {
        $this->playlistid = $playlistid;
    }

    function __toString()
    {
        return $this->getName();
    }


}

