<?php

namespace PicturePark\API\Model;

class UserAuditHistory
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
     * @var \DateTime
     */
    protected $modificationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $modifiedByUser;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getModificationDate() : \DateTime
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param \DateTime $modificationDate
     *
     * @return self
     */
    public function setModificationDate(\DateTime $modificationDate) : self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getModifiedByUser() : ?string
    {
        return $this->modifiedByUser;
    }
    /**
     * 
     *
     * @param string|null $modifiedByUser
     *
     * @return self
     */
    public function setModifiedByUser(?string $modifiedByUser) : self
    {
        $this->initialized['modifiedByUser'] = true;
        $this->modifiedByUser = $modifiedByUser;
        return $this;
    }
}