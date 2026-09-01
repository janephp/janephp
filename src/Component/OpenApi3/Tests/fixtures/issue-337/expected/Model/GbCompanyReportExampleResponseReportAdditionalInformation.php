<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem>
     */
    public array $companyHistory;
    /**
     * @var GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary
     */
    public GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary $mortgageSummary;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem>
     */
    public array $mortgageDetails;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem>
     */
    public array $commentaries;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem>
     */
    public array $ratingHistory;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem>
     */
    public array $creditLimitHistory;
    /**
     * @var list<GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem>
     */
    public array $badDebtDetails;
    public function definedProperties(): array
    {
        return ['companyHistory' => 'companyHistory', 'mortgageSummary' => 'mortgageSummary', 'mortgageDetails' => 'mortgageDetails', 'commentaries' => 'commentaries', 'ratingHistory' => 'ratingHistory', 'creditLimitHistory' => 'creditLimitHistory', 'badDebtDetails' => 'badDebtDetails'];
    }
}