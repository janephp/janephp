<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ComplianceSearchResultDataBody
     */
    public ComplianceSearchResultDataBody $body;
    public function definedProperties(): array
    {
        return ['body' => 'body'];
    }
}