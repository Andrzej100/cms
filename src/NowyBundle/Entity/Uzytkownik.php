<?php

namespace NowyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownik
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Uzytkownik
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
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;
    
    
     /**
     * @ORM\OneToMany(targetEntity="Nrtelefonu", mappedBy="uzytkownik")
     * @ORM\JoinColumn(name="nrtelefonu_id", referencedColumnName="id", nullable=true)
     * 
     */
    private $nrtelefonu;
    
   
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nrtelefonu = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->name. " " .$this->surname;
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
     *
     * @return Uzytkownik
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
     * Set surname
     *
     * @param string $surname
     *
     * @return Uzytkownik
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Add nrtelefonu
     *
     * @param \NowyBundle\Entity\Nrtelefonu $nrtelefonu
     *
     * @return Uzytkownik
     */
    public function addNrtelefonu(\NowyBundle\Entity\Nrtelefonu $nrtelefonu)
    {
        $this->nrtelefonu[] = $nrtelefonu;

        return $this;
    }

    /**
     * Remove nrtelefonu
     *
     * @param \NowyBundle\Entity\Nrtelefonu $nrtelefonu
     */
    public function removeNrtelefonu(\NowyBundle\Entity\Nrtelefonu $nrtelefonu)
    {
        $this->nrtelefonu->removeElement($nrtelefonu);
    }

    /**
     * Get nrtelefonu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNrtelefonu()
    {
        return $this->nrtelefonu;
    }
}
