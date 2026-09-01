<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImagesDataItemLocalProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $accountRefNumber;
    public function definedProperties(): array
    {
        return ['accountRefNumber' => 'accountRefNumber'];
    }
}