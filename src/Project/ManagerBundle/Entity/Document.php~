<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 */
class Document
{
    /**
     * @var integer
     */
    private $id;



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
     * Set description
     *
     * @param string $description
     * @return Document
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
     * @var \Project\ManagerBundle\Entity\Document
     */
    private $sprint;


    /**
     * Set sprint
     *
     * @param \Project\ManagerBundle\Entity\Document $sprint
     * @return Document
     */
    public function setSprint(\Project\ManagerBundle\Entity\Document $sprint = null)
    {
        $this->sprint = $sprint;

        return $this;
    }

    /**
     * Get sprint
     *
     * @return \Project\ManagerBundle\Entity\Document 
     */
    public function getSprint()
    {
        return $this->sprint;
    }
}
