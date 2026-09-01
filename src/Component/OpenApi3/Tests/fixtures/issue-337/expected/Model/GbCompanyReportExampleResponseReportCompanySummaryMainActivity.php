<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanySummaryMainActivity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $code;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $classification;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'description' => 'description', 'classification' => 'classification'];
    }
}