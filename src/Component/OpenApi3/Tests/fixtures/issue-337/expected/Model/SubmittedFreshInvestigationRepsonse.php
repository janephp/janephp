<?php

namespace CreditSafe\API\Model;

class SubmittedFreshInvestigationRepsonse extends \ArrayObject
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
     * Fresh Investigation Unique Identifier
     *
     * @var string
     */
    protected $orderID;
    /**
     * Fresh Investigation Internal Identifier
     *
     * @var string
     */
    protected $transactionID;
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
     * Fresh Investigation Unique Identifier
     *
     * @return string
     */
    public function getOrderID() : string
    {
        return $this->orderID;
    }
    /**
     * Fresh Investigation Unique Identifier
     *
     * @param string $orderID
     *
     * @return self
     */
    public function setOrderID(string $orderID) : self
    {
        $this->initialized['orderID'] = true;
        $this->orderID = $orderID;
        return $this;
    }
    /**
     * Fresh Investigation Internal Identifier
     *
     * @return string
     */
    public function getTransactionID() : string
    {
        return $this->transactionID;
    }
    /**
     * Fresh Investigation Internal Identifier
     *
     * @param string $transactionID
     *
     * @return self
     */
    public function setTransactionID(string $transactionID) : self
    {
        $this->initialized['transactionID'] = true;
        $this->transactionID = $transactionID;
        return $this;
    }
}