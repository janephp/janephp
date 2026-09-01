<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItem>
     */
    public array $records;
    /**
     * @var string
     */
    public string $searchEngineVersion;
    public function definedProperties(): array
    {
        return ['records' => 'records', 'searchEngineVersion' => 'searchEngineVersion'];
    }
}