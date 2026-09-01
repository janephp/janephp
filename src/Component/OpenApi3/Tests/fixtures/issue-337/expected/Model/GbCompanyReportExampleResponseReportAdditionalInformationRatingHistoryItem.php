<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $date;
    /**
     * @var float
     */
    public float $companyValue;
    /**
     * @var string
     */
    public string $ratingDescription;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'companyValue' => 'companyValue', 'ratingDescription' => 'ratingDescription'];
    }
}