<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody extends \ArrayObject
{
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
        $this->companies = $companies;
        return $this;
    }
}