<?php

namespace CreditSafe\API\Model;

class BadRequestError extends \ArrayObject
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
     * @var string
     */
    protected $correlationId;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * Provides further information on why the request was rejected
     *
     * @var string
     */
    protected $details;
    /**
     * 
     *
     * @return string
     */
    public function getCorrelationId() : string
    {
        return $this->correlationId;
    }
    /**
     * 
     *
     * @param string $correlationId
     *
     * @return self
     */
    public function setCorrelationId(string $correlationId) : self
    {
        $this->initialized['correlationId'] = true;
        $this->correlationId = $correlationId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Provides further information on why the request was rejected
     *
     * @return string
     */
    public function getDetails() : string
    {
        return $this->details;
    }
    /**
     * Provides further information on why the request was rejected
     *
     * @param string $details
     *
     * @return self
     */
    public function setDetails(string $details) : self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}