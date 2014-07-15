<?php
namespace Zero\ZeroBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="personnage")
 */

class Personnage
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $prononciation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $signification;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $age;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $taille;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $anniversaire;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $yeux;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $cheveux;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $poils;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $qualites;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $defauts;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $caractere;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $ambitions;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $statut;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $matiere_forte;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $matiere_avec_des_difficultes;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $aptitude;

    /**
     * @ORM\Column(type="text")
     */
    protected $histoire;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $principal;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Personnage
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set signification
     *
     * @param string $signification
     * @return Personnage
     */
    public function setSignification($signification)
    {
        $this->signification = $signification;

        return $this;
    }

    /**
     * Get signification
     *
     * @return string 
     */
    public function getSignification()
    {
        return $this->signification;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Personnage
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return Personnage
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set anniversaire
     *
     * @param string $anniversaire
     * @return Personnage
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }

    /**
     * Get anniversaire
     *
     * @return string 
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }

    /**
     * Set yeux
     *
     * @param string $yeux
     * @return Personnage
     */
    public function setYeux($yeux)
    {
        $this->yeux = $yeux;

        return $this;
    }

    /**
     * Get yeux
     *
     * @return string 
     */
    public function getYeux()
    {
        return $this->yeux;
    }

    /**
     * Set cheveux
     *
     * @param string $cheveux
     * @return Personnage
     */
    public function setCheveux($cheveux)
    {
        $this->cheveux = $cheveux;

        return $this;
    }

    /**
     * Get cheveux
     *
     * @return string 
     */
    public function getCheveux()
    {
        return $this->cheveux;
    }

    /**
     * Set poils
     *
     * @param string $poils
     * @return Personnage
     */
    public function setPoils($poils)
    {
        $this->poils = $poils;

        return $this;
    }

    /**
     * Get poils
     *
     * @return string 
     */
    public function getPoils()
    {
        return $this->poils;
    }

    /**
     * Set qualites
     *
     * @param string $qualites
     * @return Personnage
     */
    public function setQualites($qualites)
    {
        $this->qualites = $qualites;

        return $this;
    }

    /**
     * Get qualites
     *
     * @return string 
     */
    public function getQualites()
    {
        return $this->qualites;
    }

    /**
     * Set defauts
     *
     * @param string $defauts
     * @return Personnage
     */
    public function setDefauts($defauts)
    {
        $this->defauts = $defauts;

        return $this;
    }

    /**
     * Get defauts
     *
     * @return string 
     */
    public function getDefauts()
    {
        return $this->defauts;
    }

    /**
     * Set ambitions
     *
     * @param string $ambitions
     * @return Personnage
     */
    public function setAmbitions($ambitions)
    {
        $this->ambitions = $ambitions;

        return $this;
    }

    /**
     * Get ambitions
     *
     * @return string 
     */
    public function getAmbitions()
    {
        return $this->ambitions;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Personnage
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set matiere_forte
     *
     * @param string $matiereForte
     * @return Personnage
     */
    public function setMatiereForte($matiereForte)
    {
        $this->matiere_forte = $matiereForte;

        return $this;
    }

    /**
     * Get matiere_forte
     *
     * @return string 
     */
    public function getMatiereForte()
    {
        return $this->matiere_forte;
    }

    /**
     * Set matiere_avec_des_difficultes
     *
     * @param string $matiereAvecDesDifficultes
     * @return Personnage
     */
    public function setMatiereAvecDesDifficultes($matiereAvecDesDifficultes)
    {
        $this->matiere_avec_des_difficultes = $matiereAvecDesDifficultes;

        return $this;
    }

    /**
     * Get matiere_avec_des_difficultes
     *
     * @return string 
     */
    public function getMatiereAvecDesDifficultes()
    {
        return $this->matiere_avec_des_difficultes;
    }

    /**
     * Set histoire
     *
     * @param string $histoire
     * @return Personnage
     */
    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;

        return $this;
    }

    /**
     * Get histoire
     *
     * @return string 
     */
    public function getHistoire()
    {
        return $this->histoire;
    }

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return Personnage
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
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
     * Set caractere
     *
     * @param string $caractere
     * @return Personnage
     */
    public function setCaractere($caractere)
    {
        $this->caractere = $caractere;

        return $this;
    }

    /**
     * Get caractere
     *
     * @return string 
     */
    public function getCaractere()
    {
        return $this->caractere;
    }

    /**
     * Set aptitude
     *
     * @param string $aptitude
     * @return Personnage
     */
    public function setAptitude($aptitude)
    {
        $this->aptitude = $aptitude;

        return $this;
    }

    /**
     * Get aptitude
     *
     * @return string 
     */
    public function getAptitude()
    {
        return $this->aptitude;
    }

    /**
     * Set prononciation
     *
     * @param string $prononciation
     * @return Personnage
     */
    public function setPrononciation($prononciation)
    {
        $this->prononciation = $prononciation;

        return $this;
    }

    /**
     * Get prononciation
     *
     * @return string 
     */
    public function getPrononciation()
    {
        return $this->prononciation;
    }
}
