<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ComplianceSearchResultDataBodySearchResult
     */
    public ComplianceSearchResultDataBodySearchResult $searchResult;
    public function definedProperties(): array
    {
        return ['searchResult' => 'searchResult'];
    }
}