<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem>
     */
    public array $companies;
    public function definedProperties(): array
    {
        return ['companies' => 'companies'];
    }
}