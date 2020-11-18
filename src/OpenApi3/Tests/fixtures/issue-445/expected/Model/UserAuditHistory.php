<?php

namespace PicturePark\API\Model;

class UserAuditHistory
{
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
        $this->modifiedByUser = $modifiedByUser;
        return $this;
    }
}