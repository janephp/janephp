<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $occupation;
    /**
     * @var string
     */
    public string $statusDescription;
    /**
     * @var float
     */
    public float $gearing;
    public function definedProperties(): array
    {
        return ['occupation' => 'occupation', 'statusDescription' => 'statusDescription', 'gearing' => 'gearing'];
    }
}