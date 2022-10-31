<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResultCompaniesItemTradingNames extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}