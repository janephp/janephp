<?php

namespace PicturePark\API\Model;

class DocumentChange
{
    /**
     * 
     *
     * @var string|null
     */
    protected $documentName;
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
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $action;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timeStamp;
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentName() : ?string
    {
        return $this->documentName;
    }
    /**
     * 
     *
     * @param string|null $documentName
     *
     * @return self
     */
    public function setDocumentName(?string $documentName) : self
    {
        $this->documentName = $documentName;
        return $this;
    }
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
        $this->documentId = $documentId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimeStamp() : \DateTime
    {
        return $this->timeStamp;
    }
    /**
     * 
     *
     * @param \DateTime $timeStamp
     *
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp) : self
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }
}