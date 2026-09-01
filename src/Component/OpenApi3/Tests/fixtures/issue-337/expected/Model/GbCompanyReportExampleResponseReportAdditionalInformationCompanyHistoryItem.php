<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $date;
    /**
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'description' => 'description'];
    }
}