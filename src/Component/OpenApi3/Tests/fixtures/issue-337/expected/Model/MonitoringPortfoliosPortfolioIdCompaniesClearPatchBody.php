<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem>
     */
    protected $companies;
    /**
     * @return list<MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem>
     */
    public function getCompanies(): array
    {
        return $this->companies;
    }
    /**
     * @param list<MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem> $companies
     *
     * @return self
     */
    public function setCompanies(array $companies): self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['companies' => ['companies', 'getCompanies', 'setCompanies']];
    }
}