<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $portfolios;
    /**
     * @var list<MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem>
     */
    public array $companies;
    public function definedProperties(): array
    {
        return ['portfolios' => 'portfolios', 'companies' => 'companies'];
    }
}