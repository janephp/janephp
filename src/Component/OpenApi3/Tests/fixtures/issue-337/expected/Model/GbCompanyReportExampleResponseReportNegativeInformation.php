<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportNegativeInformationCcjSummary
     */
    public GbCompanyReportExampleResponseReportNegativeInformationCcjSummary $ccjSummary;
    /**
     * @var GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements
     */
    public GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements $countyCourtJudgements;
    public function definedProperties(): array
    {
        return ['ccjSummary' => 'ccjSummary', 'countyCourtJudgements' => 'countyCourtJudgements'];
    }
}