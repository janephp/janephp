<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $classification;
    /**
     * @var list<GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem>
     */
    public array $activities;
    public function definedProperties(): array
    {
        return ['classification' => 'classification', 'activities' => 'activities'];
    }
}