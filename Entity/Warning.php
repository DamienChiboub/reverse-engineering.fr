<?php

namespace Site\ReverseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Warning
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\ReverseBundle\Entity\WarningRepository")
 */
class Warning
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
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\NotBlank(message="Required")
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
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\NotBlank(message="Required")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\NotBlank(message="Required")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * @return Warning
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
     * Set vendor
     *
     * @param string $vendor
     * @return Warning
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Warning
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
     * Set etat
     *
     * @param boolean $etat
     * @return Warning
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Warning
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
     * Set type
     *
     * @param \stdClass $type
     * @return Warning
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \stdClass 
     */
    public function getType()
    {
        return $this->type;
    }
}
