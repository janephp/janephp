<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCreditScore implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating
     */
    public GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating $currentCreditRating;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit
     */
    public GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit $currentContractLimit;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating
     */
    public GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating $previousCreditRating;
    /**
     * @var string
     */
    public string $latestRatingChangeDate;
    public function definedProperties(): array
    {
        return ['currentCreditRating' => 'currentCreditRating', 'currentContractLimit' => 'currentContractLimit', 'previousCreditRating' => 'previousCreditRating', 'latestRatingChangeDate' => 'latestRatingChangeDate'];
    }
}