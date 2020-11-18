<?php

namespace PicturePark\API\Model;

class LiveStream
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $document;
    /**
     * 
     *
     * @var string|null
     */
    protected $scopeType;
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
    protected $traceJob;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
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
        $this->document = $document;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScopeType() : ?string
    {
        return $this->scopeType;
    }
    /**
     * 
     *
     * @param string|null $scopeType
     *
     * @return self
     */
    public function setScopeType(?string $scopeType) : self
    {
        $this->scopeType = $scopeType;
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
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTraceJob()
    {
        return $this->traceJob;
    }
    /**
     * 
     *
     * @param mixed $traceJob
     *
     * @return self
     */
    public function setTraceJob($traceJob) : self
    {
        $this->traceJob = $traceJob;
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
        $this->audit = $audit;
        return $this;
    }
}