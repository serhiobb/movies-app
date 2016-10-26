<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255)
     */
    private $cover;

    /**
     * @var array
     *
     * @ORM\ManyToMany(targetEntity="Author")
     * @ORM\JoinTable(name="authors_books",
     *      joinColumns={@ORM\JoinColumn(name="author_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="book_id", referencedColumnName="id")}
     *      )
     */
    private $authors;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_puplished", type="date")
     *
     */
    private $datePuplished;

    /**
     * @var string
     *
     * @ORM\Column(name="city_published", type="string", length=255)
     */
    private $cityPublished;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;


    public function __construct()
    {
        $this->authors = new ArrayCollection();
    }

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
     * @return Book
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
     * Set cover
     *
     * @param string $cover
     * @return Book
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set authors
     *
     * @param array $authors
     * @return Book
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * Get authors
     *
     * @return array 
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set datePuplished
     *
     * @param \DateTime $datePuplished
     * @return Book
     */
    public function setDatePuplished($datePuplished)
    {
        $this->datePuplished = $datePuplished;

        return $this;
    }

    /**
     * Get datePuplished
     *
     * @return \DateTime 
     */
    public function getDatePuplished()
    {
        return $this->datePuplished;
    }

    /**
     * Set cityPublished
     *
     * @param string $cityPublished
     * @return Book
     */
    public function setCityPublished($cityPublished)
    {
        $this->cityPublished = $cityPublished;

        return $this;
    }

    /**
     * Get cityPublished
     *
     * @return string 
     */
    public function getCityPublished()
    {
        return $this->cityPublished;
    }

    /**
     * @return boolean
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param boolean $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
        $authors = $this->getAuthors()->toArray();

        $city = $this->getCityPublished();
        $cities = array_map(function(Author $author){return $author->getCity();}, $authors);
        if(count($cities) > 0 && !in_array($city, $cities))
        {
            $context->buildViolation('Нельзя добавить книгу, которая издана в городе, отличном от города ее автора.')
                ->atPath('cityPublished')->addViolation();
        };

        $publishDate = $this->getDatePuplished();
        $publishDates = array_map(function(Author $author){return $author->getBirthDate();}, $authors);
        if($publishDate > max($publishDates))
        {
            $context->buildViolation('Нельзя добавить книгу, которая издана до рождения автора.')
                ->atPath('datePublished')->addViolation();
        };

        $deathDates = array_map(function(Author $author){return $author->getDeathDate();}, $authors);
        if($publishDate->diff(max($deathDates)) < (new \DateInterval('P70Y')))
        {
            $context->buildViolation('Нельзя добавить книгу, изданную менее чем через 70 лет после смерти одного из авторов.')
                ->atPath('datePublished')->addViolation();
        }

        //Нельзя показывать, удалять, или изменять книги, авторы которых мертвы и со времени смерти не
        // прошло 100 лет на текущий момент.
        $now = (new \DateTime('now'));
        if($now->diff(max($deathDates)) < (new \DateInterval('P100Y')))
        {
            $this->setVisible(false);
        }
    }
}
