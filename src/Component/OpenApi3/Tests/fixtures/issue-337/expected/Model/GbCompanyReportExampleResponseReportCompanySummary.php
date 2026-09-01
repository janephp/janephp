<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanySummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $businessName;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $companyNumber;
    /**
     * @var string
     */
    public string $companyRegistrationNumber;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryMainActivity
     */
    public GbCompanyReportExampleResponseReportCompanySummaryMainActivity $mainActivity;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus
     */
    public GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus $companyStatus;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure
     */
    public GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure $latestTurnoverFigure;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure
     */
    public GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure $latestShareholdersEquityFigure;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRating
     */
    public GbCompanyReportExampleResponseReportCompanySummaryCreditRating $creditRating;
    public function definedProperties(): array
    {
        return ['businessName' => 'businessName', 'country' => 'country', 'companyNumber' => 'companyNumber', 'companyRegistrationNumber' => 'companyRegistrationNumber', 'mainActivity' => 'mainActivity', 'companyStatus' => 'companyStatus', 'latestTurnoverFigure' => 'latestTurnoverFigure', 'latestShareholdersEquityFigure' => 'latestShareholdersEquityFigure', 'creditRating' => 'creditRating'];
    }
}