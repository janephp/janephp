<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $dateChanged;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'dateChanged' => 'dateChanged'];
    }
}