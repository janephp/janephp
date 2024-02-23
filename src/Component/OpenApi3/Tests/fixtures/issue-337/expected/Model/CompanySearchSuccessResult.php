<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var float
     */
    protected $totalSize;
    /**
     * 
     *
     * @var list<CompanySearchSuccessResultCompaniesItem>
     */
    protected $companies;
    /**
     * 
     *
     * @return float
     */
    public function getTotalSize() : float
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param float $totalSize
     *
     * @return self
     */
    public function setTotalSize(float $totalSize) : self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return list<CompanySearchSuccessResultCompaniesItem>
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param list<CompanySearchSuccessResultCompaniesItem> $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
}