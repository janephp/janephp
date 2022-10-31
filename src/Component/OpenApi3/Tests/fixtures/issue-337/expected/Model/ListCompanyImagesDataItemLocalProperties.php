<?php

namespace CreditSafe\API\Model;

class ListCompanyImagesDataItemLocalProperties extends \ArrayObject
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
    protected $accountRefNumber;
    /**
     * 
     *
     * @return string
     */
    public function getAccountRefNumber() : string
    {
        return $this->accountRefNumber;
    }
    /**
     * 
     *
     * @param string $accountRefNumber
     *
     * @return self
     */
    public function setAccountRefNumber(string $accountRefNumber) : self
    {
        $this->initialized['accountRefNumber'] = true;
        $this->accountRefNumber = $accountRefNumber;
        return $this;
    }
}