<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompanySearchSuccessResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $totalSize;
    /**
     * @var list<CompanySearchSuccessResultCompaniesItem>
     */
    public array $companies;
    public function definedProperties(): array
    {
        return ['totalSize' => 'totalSize', 'companies' => 'companies'];
    }
}