<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $outstanding;
    /**
     * @var float
     */
    public float $satisfied;
    public function definedProperties(): array
    {
        return ['outstanding' => 'outstanding', 'satisfied' => 'satisfied'];
    }
}