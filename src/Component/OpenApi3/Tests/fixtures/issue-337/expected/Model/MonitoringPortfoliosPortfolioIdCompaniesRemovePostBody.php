<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody extends \ArrayObject
{
    /**
     * 
     *
     * @var string[]
     */
    protected $portfolios;
    /**
     * 
     *
     * @var MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem[]
     */
    protected $companies;
    /**
     * 
     *
     * @return string[]
     */
    public function getPortfolios() : array
    {
        return $this->portfolios;
    }
    /**
     * 
     *
     * @param string[] $portfolios
     *
     * @return self
     */
    public function setPortfolios(array $portfolios) : self
    {
        $this->portfolios = $portfolios;
        return $this;
    }
    /**
     * 
     *
     * @return MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->companies = $companies;
        return $this;
    }
}