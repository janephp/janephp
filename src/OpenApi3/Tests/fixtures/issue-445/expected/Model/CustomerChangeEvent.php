<?php

namespace PicturePark\API\Model;

class CustomerChangeEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * Lifecycle
     *
     * @var string
     */
    protected $lifeCycle;
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
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
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
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Lifecycle
     *
     * @return string
     */
    public function getLifeCycle() : string
    {
        return $this->lifeCycle;
    }
    /**
     * Lifecycle
     *
     * @param string $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle(string $lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
}