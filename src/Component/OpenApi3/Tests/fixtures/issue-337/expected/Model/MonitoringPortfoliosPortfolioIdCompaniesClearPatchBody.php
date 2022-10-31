<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody extends \ArrayObject
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
     * @var MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem[]
     */
    protected $companies;
    /**
     * 
     *
     * @return MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem[] $companies
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