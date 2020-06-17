<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResult
{
    /**
     * 
     *
     * @var float
     */
    protected $totalSize;
    /**
     * 
     *
     * @var CompanySearchSuccessResultCompaniesItem[]
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
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return CompanySearchSuccessResultCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param CompanySearchSuccessResultCompaniesItem[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->companies = $companies;
        return $this;
    }
}