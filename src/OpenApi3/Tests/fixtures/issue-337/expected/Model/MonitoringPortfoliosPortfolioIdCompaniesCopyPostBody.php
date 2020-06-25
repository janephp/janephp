<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody
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
     * @var MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[]
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
     * @return MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[]
     */
    public function getCompanies() : array
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem[] $companies
     *
     * @return self
     */
    public function setCompanies(array $companies) : self
    {
        $this->companies = $companies;
        return $this;
    }
}