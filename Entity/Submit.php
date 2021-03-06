<?php

namespace Site\ReverseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Submit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\ReverseBundle\Entity\SubmitRepository")
 */
class Submit
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
     * @ORM\Column(name="titre", type="string")
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
     * @ORM\Column(name="site", type="string")
     */
    private $site;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @Assert\Url()
     * @ORM\Column(name="url", type="string")
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "3 Min",
     *      maxMessage = "50 Max")
     * @Assert\Type(type="string", message="The value {{ value }} is not a valid {{ type }} type")
     * @ORM\Column(name="description", type="string")
     */
    private $description;


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
     * @return Submit
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
     * Set site
     *
     * @param string $site
     * @return Submit
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Submit
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
     * @return Submit
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
     * Set description
     *
     * @param string $description
     * @return Submit
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
}
