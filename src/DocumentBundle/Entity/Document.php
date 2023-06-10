<?php

namespace DocumentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="DocumentBundle\Repository\DocumentRepository")
 */
class Document
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="obj", type="string", length=255)
     */
    private $obj;

    /**
     * @var \string
     *
     * @ORM\Column(name="date_creation", type="string", length=255)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="string", length=255)
     */
    private $corps;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="descp", type="string", length=255)
     */
    private $descp;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=255)
     */
    private $signature;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Doc
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
     * Set obj
     *
     * @param string $obj
     *
     * @return Doc
     */
    public function setObj($obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * Get obj
     *
     * @return string
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     * Set dateCreation
     *
     * @param \string $dateCreation
     *
     * @return Doc
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set corps
     *
     * @param string $corps
     *
     * @return Doc
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;

        return $this;
    }

    /**
     * Get corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Doc
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set descp
     *
     * @param string $descp
     *
     * @return Doc
     */
    public function setDescp($descp)
    {
        $this->descp = $descp;

        return $this;
    }

    /**
     * Get descp
     *
     * @return string
     */
    public function getDescp()
    {
        return $this->descp;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return Doc
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    public function __construct()
    {
    }
}

