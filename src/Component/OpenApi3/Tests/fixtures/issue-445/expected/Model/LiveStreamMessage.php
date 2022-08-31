<?php

namespace PicturePark\API\Model;

class LiveStreamMessage extends Message
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $retries;
    /**
     * 
     *
     * @var int
     */
    protected $priority;
    /**
     * 
     *
     * @var bool
     */
    protected $deduplicate;
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
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAlias;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string|null
     */
    protected $scope;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $documentChange;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $applicationEvent;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRetries() : int
    {
        return $this->retries;
    }
    /**
     * 
     *
     * @param int $retries
     *
     * @return self
     */
    public function setRetries(int $retries) : self
    {
        $this->retries = $retries;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriority() : int
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDeduplicate() : bool
    {
        return $this->deduplicate;
    }
    /**
     * 
     *
     * @param bool $deduplicate
     *
     * @return self
     */
    public function setDeduplicate(bool $deduplicate) : self
    {
        $this->deduplicate = $deduplicate;
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
    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAlias() : ?string
    {
        return $this->customerAlias;
    }
    /**
     * 
     *
     * @param string|null $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(?string $customerAlias) : self
    {
        $this->customerAlias = $customerAlias;
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
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDocumentChange()
    {
        return $this->documentChange;
    }
    /**
     * 
     *
     * @param mixed $documentChange
     *
     * @return self
     */
    public function setDocumentChange($documentChange) : self
    {
        $this->documentChange = $documentChange;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getApplicationEvent()
    {
        return $this->applicationEvent;
    }
    /**
     * 
     *
     * @param mixed $applicationEvent
     *
     * @return self
     */
    public function setApplicationEvent($applicationEvent) : self
    {
        $this->applicationEvent = $applicationEvent;
        return $this;
    }
}