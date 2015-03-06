<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 */
class Role
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;


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
     * @return Role
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
     * Set description
     *
     * @param string $description
     * @return Role
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affectations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affectations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add affectations
     *
     * @param \Project\ManagerBundle\Entity\UserAffectation $affectations
     * @return Role
     */
    public function addAffectation(\Project\ManagerBundle\Entity\UserAffectation $affectations)
    {
        $this->affectations[] = $affectations;

        return $this;
    }

    /**
     * Remove affectations
     *
     * @param \Project\ManagerBundle\Entity\UserAffectation $affectations
     */
    public function removeAffectation(\Project\ManagerBundle\Entity\UserAffectation $affectations)
    {
        $this->affectations->removeElement($affectations);
    }

    /**
     * Get affectations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffectations()
    {
        return $this->affectations;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affectation;


    /**
     * Get affectation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffectation()
    {
        return $this->affectation;
    }

    public function __toString()
    {
        return (string)$this->getName();
    }
}
