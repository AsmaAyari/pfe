<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SprintReview
 */
class SprintReview extends Document
{


    /**
     * @var \DateTime
     */
    private $createdAt;



    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return SprintReview
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
