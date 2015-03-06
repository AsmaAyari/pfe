<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Releases
 */
class Releases
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $version;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set version
     *
     * @param string $version
     * @return Releases
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
     * Set date
     *
     * @param \DateTime $date
     * @return Releases
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
     * @var \Project\ManagerBundle\Entity\Project
     */
    private $project;


    /**
     * Set project
     *
     * @param \Project\ManagerBundle\Entity\Project $project
     * @return Releases
     */
    public function setProject(\Project\ManagerBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Project\ManagerBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
