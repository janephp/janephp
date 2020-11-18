<?php

namespace PicturePark\API\Model;

class UserAudit
{
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
     * @var string|null
     */
    protected $createdByUser;
    /**
     * ID of the last user who modified the document.
     *
     * @var string|null
     */
    protected $modifiedByUser;
    /**
     * The date on which the document was created.
     *
     * @return \DateTime
     */
    public function getCreationDate() : \DateTime
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
    public function setCreationDate(\DateTime $creationDate) : self
    {
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * The last date on which the document was modified.
     *
     * @return \DateTime
     */
    public function getModificationDate() : \DateTime
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
    public function setModificationDate(\DateTime $modificationDate) : self
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * ID of the user who created the document.
     *
     * @return string|null
     */
    public function getCreatedByUser() : ?string
    {
        return $this->createdByUser;
    }
    /**
     * ID of the user who created the document.
     *
     * @param string|null $createdByUser
     *
     * @return self
     */
    public function setCreatedByUser(?string $createdByUser) : self
    {
        $this->createdByUser = $createdByUser;
        return $this;
    }
    /**
     * ID of the last user who modified the document.
     *
     * @return string|null
     */
    public function getModifiedByUser() : ?string
    {
        return $this->modifiedByUser;
    }
    /**
     * ID of the last user who modified the document.
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