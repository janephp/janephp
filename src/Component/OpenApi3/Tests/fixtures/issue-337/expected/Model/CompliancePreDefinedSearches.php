<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompliancePreDefinedSearches implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $totalSize;
    /**
     * @var list<CompliancePreDefinedSearchesPredefinedSearchesItem>
     */
    public array $predefinedSearches;
    public function definedProperties(): array
    {
        return ['totalSize' => 'totalSize', 'predefinedSearches' => 'predefinedSearches'];
    }
}