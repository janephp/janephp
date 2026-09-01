<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['status' => 'status', 'description' => 'description'];
    }
}