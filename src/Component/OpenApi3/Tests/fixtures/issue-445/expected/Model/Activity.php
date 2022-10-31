<?php

namespace PicturePark\API\Model;

class Activity
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['creationDate'] = true;
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
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
}