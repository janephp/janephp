<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered
     */
    public GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered $registered;
    public function definedProperties(): array
    {
        return ['registered' => 'registered'];
    }
}