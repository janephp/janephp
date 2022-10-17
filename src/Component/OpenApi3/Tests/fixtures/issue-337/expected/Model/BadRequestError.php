<?php

namespace CreditSafe\API\Model;

class BadRequestError extends \ArrayObject
{
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
        $this->details = $details;
        return $this;
    }
}