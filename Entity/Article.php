<?php

namespace Site\ReverseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\ReverseBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\NotBlank(message="Required")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="texte", type="string", length=255)
     */
    private $texte;

    /**
     * @var integer
     * @Assert\NotBlank(message="Required")
     * @Assert\Range(
     *      min = "1",
     *      max = "29",
     *      minMessage = "1 Min",
     *      maxMessage = "29 Max")
     * @Assert\Type(type="integer", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="id2", type="integer")
     */
    private $id2;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Man")
     * @Assert\NotBlank(message="Required")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @Assert\Url()
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

    function __construct(){
        $this->date = new \DateTime();

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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Article
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    
        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
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
     * Set url
     *
     * @param string $url
     * @return Article
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Article
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return Article
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set id2
     *
     * @param integer $id2
     * @return Article
     */
    public function setId2($id2)
    {
        $this->id2 = $id2;

        return $this;
    }

    /**
     * Get id2
     *
     * @return integer
     */
    public function getId2()
    {
        return $this->id2;
    }
}
