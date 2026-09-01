<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $number;
    /**
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['number' => 'number', 'type' => 'type'];
    }
}