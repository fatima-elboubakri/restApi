<?php

namespace CandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="CandidatBundle\Repository\CandidatRepository")
 */
class Candidat
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
     * @ORM\Column(name="nom_can", type="string", length=255)
     */
    private $nomCan;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_can", type="string", length=255)
     */
    private $prenomCan;

    /**
     * @var string
     *
     * @ORM\Column(name="dn_can", type="string", length=255)
     */
    private $dnCan;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;



    /**
     * @var string
     *
     * @ORM\Column(name="photo_can", type="string", length=255)
     */
    private $photoCan;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_can", type="string", length=255)
     */
    private $adrCan;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_can", type="string", length=255)
     */
    private $telCan;

    /**
     * @var string
     *
     * @ORM\Column(name="email_can", type="string", length=255)
     */
    private $emailCan;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_can", type="string", length=255)
     */
    private $titreCan;



    /**
     * @var string
     *
     * @ORM\Column(name="netude_can", type="string", length=255)
     */
    private $netudeCan;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_can", type="string", length=255)
     */
    private $expCan;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_can", type="text")
     */
    private $compCan;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_cam", type="text")
     */
    private $descCam;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_can", type="string", length=255)
     */
    private $cvCan;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_can", type="string", length=255)
     */
    private $etatCan;


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
     * Set nomCan
     *
     * @param string $nomCan
     *
     * @return Candidat
     */
    public function setNomCan($nomCan)
    {
        $this->nomCan = $nomCan;

        return $this;
    }

    /**
     * Get nomCan
     *
     * @return string
     */
    public function getNomCan()
    {
        return $this->nomCan;
    }

    /**
     * Set prenomCan
     *
     * @param string $prenomCan
     *
     * @return Candidat
     */
    public function setPrenomCan($prenomCan)
    {
        $this->prenomCan = $prenomCan;

        return $this;
    }

    /**
     * Get prenomCan
     *
     * @return string
     */
    public function getPrenomCan()
    {
        return $this->prenomCan;
    }

    /**
     * Set dnCan
     *
     * @param string $dnCan
     *
     * @return Candidat
     */
    public function setDnCan($dnCan)
    {
        $this->dnCan = $dnCan;

        return $this;
    }

    /**
     * Get dnCan
     *
     * @return string
     */
    public function getDnCan()
    {
        return $this->dnCan;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Candidat
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }




    /**
     * Set photoCan
     *
     * @param string $photoCan
     *
     * @return Candidat
     */
    public function setPhotoCan($photoCan)
    {
        $this->photoCan = $photoCan;

        return $this;
    }

    /**
     * Get photoCan
     *
     * @return string
     */
    public function getPhotoCan()
    {
        return $this->photoCan;
    }

    /**
     * Set adrCan
     *
     * @param string $adrCan
     *
     * @return Candidat
     */
    public function setAdrCan($adrCan)
    {
        $this->adrCan = $adrCan;

        return $this;
    }

    /**
     * Get adrCan
     *
     * @return string
     */
    public function getAdrCan()
    {
        return $this->adrCan;
    }

    /**
     * Set telCan
     *
     * @param string $telCan
     *
     * @return Candidat
     */
    public function setTelCan($telCan)
    {
        $this->telCan = $telCan;

        return $this;
    }

    /**
     * Get telCan
     *
     * @return string
     */
    public function getTelCan()
    {
        return $this->telCan;
    }

    /**
     * Set emailCan
     *
     * @param string $emailCan
     *
     * @return Candidat
     */
    public function setEmailCan($emailCan)
    {
        $this->emailCan = $emailCan;

        return $this;
    }

    /**
     * Get emailCan
     *
     * @return string
     */
    public function getEmailCan()
    {
        return $this->emailCan;
    }

    /**
     * Set titreCan
     *
     * @param string $titreCan
     *
     * @return Candidat
     */
    public function setTitreCan($titreCan)
    {
        $this->titreCan = $titreCan;

        return $this;
    }

    /**
     * Get titreCan
     *
     * @return string
     */
    public function getTitreCan()
    {
        return $this->titreCan;
    }



    /**
     * Set netudeCan
     *
     * @param string $netudeCan
     *
     * @return Candidat
     */
    public function setNetudeCan($netudeCan)
    {
        $this->netudeCan = $netudeCan;

        return $this;
    }

    /**
     * Get netudeCan
     *
     * @return string
     */
    public function getNetudeCan()
    {
        return $this->netudeCan;
    }
    /**
     * Set expCan
     *
     * @param string $expCan
     *
     * @return Candidat
     */
    public function setExpCan($expCan)
    {
        $this->expCan = $expCan;

        return $this;
    }

    /**
     * Get expCan
     *
     * @return string
     */
    public function getExpCan()
    {
        return $this->expCan;
    }

    /**
     * Set compCan
     *
     * @param string $compCan
     *
     * @return Candidat
     */
    public function setCompCan($compCan)
    {
        $this->compCan = $compCan;

        return $this;
    }

    /**
     * Get compCan
     *
     * @return string
     */
    public function getCompCan()
    {
        return $this->compCan;
    }

    /**
     * Set descCam
     *
     * @param string $descCam
     *
     * @return Candidat
     */
    public function setDescCam($descCam)
    {
        $this->descCam = $descCam;

        return $this;
    }

    /**
     * Get descCam
     *
     * @return string
     */
    public function getDescCam()
    {
        return $this->descCam;
    }

    /**
     * Set cvCan
     *
     * @param string $cvCan
     *
     * @return Candidat
     */
    public function setCvCan($cvCan)
    {
        $this->cvCan = $cvCan;

        return $this;
    }

    /**
     * Get cvCan
     *
     * @return string
     */
    public function getCvCan()
    {
        return $this->cvCan;
    }

    /**
     * Set etatCan
     *
     * @param string $etatCan
     *
     * @return Candidat
     */
    public function setEtatCan($etatCan)
    {
        $this->etatCan = $etatCan;

        return $this;
    }

    /**
     * Get etatCan
     *
     * @return string
     */
    public function getEtatCan()
    {
        return $this->etatCan;
    }
}

