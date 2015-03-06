<?php

namespace Project\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DailyScrum
 */
class DailyScrum extends Document
{

    /**
     * @var \DateTime
     */
    private $createdAt;
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return DailyScrum
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
