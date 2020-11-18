<?php

namespace PicturePark\API\Model;

class Activity
{
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $creationDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $modificationDate;
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreationDate() : ?\DateTime
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?\DateTime $creationDate) : self
    {
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getModificationDate() : ?\DateTime
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $modificationDate
     *
     * @return self
     */
    public function setModificationDate(?\DateTime $modificationDate) : self
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }
}