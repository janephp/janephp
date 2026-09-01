<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem>
     */
    public array $exact;
    /**
     * @var list<GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem>
     */
    public array $possible;
    public function definedProperties(): array
    {
        return ['exact' => 'exact', 'possible' => 'possible'];
    }
}