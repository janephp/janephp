<?php

namespace PicturePark\API\Model;

class LiveStream
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
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $document;
    /**
     * @var string|null
     */
    protected $scopeType;
    /**
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * @var LiveStreamTraceJob|null
     */
    protected $traceJob;
    /**
     * @var UserAudit|null
     */
    protected $audit;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }
    /**
     * @param string|null $document
     *
     * @return self
     */
    public function setDocument(?string $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getScopeType(): ?string
    {
        return $this->scopeType;
    }
    /**
     * @param string|null $scopeType
     *
     * @return self
     */
    public function setScopeType(?string $scopeType): self
    {
        $this->initialized['scopeType'] = true;
        $this->scopeType = $scopeType;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }
    /**
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return LiveStreamTraceJob|null
     */
    public function getTraceJob(): ?LiveStreamTraceJob
    {
        return $this->traceJob;
    }
    /**
     * @param LiveStreamTraceJob|null $traceJob
     *
     * @return self
     */
    public function setTraceJob(?LiveStreamTraceJob $traceJob): self
    {
        $this->initialized['traceJob'] = true;
        $this->traceJob = $traceJob;
        return $this;
    }
    /**
     * @return UserAudit|null
     */
    public function getAudit(): ?UserAudit
    {
        return $this->audit;
    }
    /**
     * @param UserAudit|null $audit
     *
     * @return self
     */
    public function setAudit(?UserAudit $audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
}