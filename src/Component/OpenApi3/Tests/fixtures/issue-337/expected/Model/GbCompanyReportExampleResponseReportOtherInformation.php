<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportOtherInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem>
     */
    public array $advisors;
    /**
     * @var list<GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem>
     */
    public array $employeesInformation;
    public function definedProperties(): array
    {
        return ['advisors' => 'advisors', 'employeesInformation' => 'employeesInformation'];
    }
}