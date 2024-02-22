<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody extends \ArrayObject
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
     * @var list<string>
     */
    protected $portfolios;
    /**
     * 
     *
     * @var list<MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem>
     */
    protected $companies;
    /**
     * 
     *
     * @return list<string>
     */
    public function getPortfolios() : array
    {
        return $this->portfolios;
    }
    /**
     * 
     *
     * @param list<string> $portfolios
     *
     * @return self
     */
    public function setPortfolios(array $portfolios) : self
    {
        $this->initialized['portfolios'] = true;
        $this->portfolios = $portfolios;
        return $this;
    }
    /**
     * 
     *
     * @return list<MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem>
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param list<MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem> $companies
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