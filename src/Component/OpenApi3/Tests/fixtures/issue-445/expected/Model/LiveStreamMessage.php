<?php

namespace PicturePark\API\Model;

class LiveStreamMessage extends Message
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
        $this->initialized['customerId'] = true;
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
        $this->initialized['customerAlias'] = true;
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
        $this->initialized['timestamp'] = true;
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
        $this->initialized['scope'] = true;
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
        $this->initialized['documentChange'] = true;
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
        $this->initialized['applicationEvent'] = true;
        $this->applicationEvent = $applicationEvent;
        return $this;
    }
}