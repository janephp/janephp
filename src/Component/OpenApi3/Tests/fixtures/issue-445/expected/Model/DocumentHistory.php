<?php

namespace PicturePark\API\Model;

class DocumentHistory
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
     * @var string|null
     */
    protected $documentId;
    /**
     * 
     *
     * @var int
     */
    protected $documentVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $documentDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $document;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var string
     */
    protected $action;
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentId() : ?string
    {
        return $this->documentId;
    }
    /**
     * 
     *
     * @param string|null $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId) : self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDocumentVersion() : int
    {
        return $this->documentVersion;
    }
    /**
     * 
     *
     * @param int $documentVersion
     *
     * @return self
     */
    public function setDocumentVersion(int $documentVersion) : self
    {
        $this->initialized['documentVersion'] = true;
        $this->documentVersion = $documentVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentType() : ?string
    {
        return $this->documentType;
    }
    /**
     * 
     *
     * @param string|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType) : self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDocumentDate() : \DateTime
    {
        return $this->documentDate;
    }
    /**
     * 
     *
     * @param \DateTime $documentDate
     *
     * @return self
     */
    public function setDocumentDate(\DateTime $documentDate) : self
    {
        $this->initialized['documentDate'] = true;
        $this->documentDate = $documentDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocument() : ?string
    {
        return $this->document;
    }
    /**
     * 
     *
     * @param string|null $document
     *
     * @return self
     */
    public function setDocument(?string $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * 
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit) : self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}