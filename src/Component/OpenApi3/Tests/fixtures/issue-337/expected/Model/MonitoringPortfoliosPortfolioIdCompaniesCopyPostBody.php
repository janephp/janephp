<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody extends \ArrayObject
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
     * @var list<MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem>
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
     * @return list<MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem>
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param list<MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem> $companies
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