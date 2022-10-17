<?php

namespace CreditSafe\API\Model;

class ListCompanyImagesDataItemLocalProperties extends \ArrayObject
{
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
        $this->accountRefNumber = $accountRefNumber;
        return $this;
    }
}