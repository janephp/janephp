<?php

namespace PicturePark\API\Model;

class UserAuditDetail
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The date on which the document was created.
     *
     * @var \DateTime
     */
    protected $creationDate;
    /**
     * The last date on which the document was modified.
     *
     * @var \DateTime
     */
    protected $modificationDate;
    /**
     * ID of the user who created the document.
     *
     * @var mixed|null
     */
    protected $createdByUser;
    /**
     * ID of the last user who modified the document.
     *
     * @var mixed|null
     */
    protected $modifiedByUser;
    /**
     * The date on which the document was created.
     *
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }
    /**
     * The date on which the document was created.
     *
     * @param \DateTime $creationDate
     *
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * The last date on which the document was modified.
     *
     * @return \DateTime
     */
    public function getModificationDate(): \DateTime
    {
        return $this->modificationDate;
    }
    /**
     * The last date on which the document was modified.
     *
     * @param \DateTime $modificationDate
     *
     * @return self
     */
    public function setModificationDate(\DateTime $modificationDate): self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * ID of the user who created the document.
     *
     * @return mixed
     */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }
    /**
     * ID of the user who created the document.
     *
     * @param mixed $createdByUser
     *
     * @return self
     */
    public function setCreatedByUser($createdByUser): self
    {
        $this->initialized['createdByUser'] = true;
        $this->createdByUser = $createdByUser;
        return $this;
    }
    /**
     * ID of the last user who modified the document.
     *
     * @return mixed
     */
    public function getModifiedByUser()
    {
        return $this->modifiedByUser;
    }
    /**
     * ID of the last user who modified the document.
     *
     * @param mixed $modifiedByUser
     *
     * @return self
     */
    public function setModifiedByUser($modifiedByUser): self
    {
        $this->initialized['modifiedByUser'] = true;
        $this->modifiedByUser = $modifiedByUser;
        return $this;
    }
}