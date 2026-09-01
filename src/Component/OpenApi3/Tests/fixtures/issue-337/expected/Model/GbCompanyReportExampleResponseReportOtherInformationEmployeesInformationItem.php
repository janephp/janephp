<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $year;
    /**
     * @var string
     */
    public string $numberOfEmployees;
    public function definedProperties(): array
    {
        return ['year' => 'year', 'numberOfEmployees' => 'numberOfEmployees'];
    }
}