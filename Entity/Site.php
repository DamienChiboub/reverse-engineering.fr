<?php

namespace Site\ReverseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Site\ReverseBundle\Entity\SiteRepository")
 */
class Site
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
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime")
     */
    private $lastUpdate;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="index_title", type="string", length=255)
     */
    private $indexTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="articletitle", type="string", length=255)
     */
    private $ArticleTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="publicationtitle", type="string", length=255)
     */
    private $publicationTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="submittitle", type="string", length=255)
     */
    private $submitTitle;

    /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="warningtitle", type="string", length=255)
     */
    private $warningTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="abouttitle", type="string", length=255)
     */
    private $aboutTitle;


   /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="contacttitle", type="string", length=255)
     */
    private $contactTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="legaltitle", type="string", length=255)
     */
    private $legalTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="jobstitle", type="string", length=255)
     */
    private $jobsTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="securitytitle", type="string", length=255)
     */
    private $securityTitle;

     /**
     * @var string
     * @Assert\NotBlank(message="Required")
     * @ORM\Column(name="servicetitle", type="string", length=255)
     */
    private $serviceTitle;


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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Site
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Site
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set indexTitle
     *
     * @param string $indexTitle
     * @return Site
     */
    public function setIndexTitle($indexTitle)
    {
        $this->indexTitle = $indexTitle;

        return $this;
    }

    /**
     * Get indexTitle
     *
     * @return string 
     */
    public function getIndexTitle()
    {
        return $this->indexTitle;
    }

    /**
     * Set ArticleTitle
     *
     * @param string $articleTitle
     * @return Site
     */
    public function setArticleTitle($articleTitle)
    {
        $this->ArticleTitle = $articleTitle;

        return $this;
    }

    /**
     * Get ArticleTitle
     *
     * @return string 
     */
    public function getArticleTitle()
    {
        return $this->ArticleTitle;
    }

    /**
     * Set publicationTitle
     *
     * @param string $publicationTitle
     * @return Site
     */
    public function setPublicationTitle($publicationTitle)
    {
        $this->publicationTitle = $publicationTitle;

        return $this;
    }

    /**
     * Get publicationTitle
     *
     * @return string 
     */
    public function getPublicationTitle()
    {
        return $this->publicationTitle;
    }

    /**
     * Set submitTitle
     *
     * @param string $submitTitle
     * @return Site
     */
    public function setSubmitTitle($submitTitle)
    {
        $this->submitTitle = $submitTitle;

        return $this;
    }

    /**
     * Get submitTitle
     *
     * @return string 
     */
    public function getSubmitTitle()
    {
        return $this->submitTitle;
    }

    /**
     * Set warningTitle
     *
     * @param string $warningTitle
     * @return Site
     */
    public function setWarningTitle($warningTitle)
    {
        $this->warningTitle = $warningTitle;

        return $this;
    }

    /**
     * Get warningTitle
     *
     * @return string 
     */
    public function getWarningTitle()
    {
        return $this->warningTitle;
    }

    /**
     * Set aboutTitle
     *
     * @param string $aboutTitle
     * @return Site
     */
    public function setAboutTitle($aboutTitle)
    {
        $this->aboutTitle = $aboutTitle;

        return $this;
    }

    /**
     * Get aboutTitle
     *
     * @return string 
     */
    public function getAboutTitle()
    {
        return $this->aboutTitle;
    }

    /**
     * Set contactTitle
     *
     * @param string $contactTitle
     * @return Site
     */
    public function setContactTitle($contactTitle)
    {
        $this->contactTitle = $contactTitle;

        return $this;
    }

    /**
     * Get contactTitle
     *
     * @return string 
     */
    public function getContactTitle()
    {
        return $this->contactTitle;
    }

    /**
     * Set legalTitle
     *
     * @param string $legalTitle
     * @return Site
     */
    public function setLegalTitle($legalTitle)
    {
        $this->legalTitle = $legalTitle;

        return $this;
    }

    /**
     * Get legalTitle
     *
     * @return string 
     */
    public function getLegalTitle()
    {
        return $this->legalTitle;
    }

    /**
     * Set jobsTitle
     *
     * @param string $jobsTitle
     * @return Site
     */
    public function setJobsTitle($jobsTitle)
    {
        $this->jobsTitle = $jobsTitle;

        return $this;
    }

    /**
     * Get jobsTitle
     *
     * @return string 
     */
    public function getJobsTitle()
    {
        return $this->jobsTitle;
    }

    /**
     * Set securityTitle
     *
     * @param string $securityTitle
     * @return Site
     */
    public function setSecurityTitle($securityTitle)
    {
        $this->securityTitle = $securityTitle;

        return $this;
    }

    /**
     * Get securityTitle
     *
     * @return string 
     */
    public function getSecurityTitle()
    {
        return $this->securityTitle;
    }

    /**
     * Set serviceTitle
     *
     * @param string $serviceTitle
     * @return Site
     */
    public function setServiceTitle($serviceTitle)
    {
        $this->serviceTitle = $serviceTitle;

        return $this;
    }

    /**
     * Get serviceTitle
     *
     * @return string 
     */
    public function getServiceTitle()
    {
        return $this->serviceTitle;
    }
}
