<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ComplianceSearchResultData
     */
    public ComplianceSearchResultData $data;
    public function definedProperties(): array
    {
        return ['data' => 'data'];
    }
}