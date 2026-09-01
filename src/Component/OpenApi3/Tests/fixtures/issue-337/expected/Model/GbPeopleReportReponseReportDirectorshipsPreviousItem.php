<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $companyName;
    /**
     * @var string
     */
    public string $companyRegistrationNumber;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemPosition
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemPosition $position;
    /**
     * @var string
     */
    public string $companyRegistrationDate;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure $latestTurnoverFigure;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorth
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorth $netWorth;
    /**
     * @var int
     */
    public int $legalCount;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore $creditScore;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData
     */
    public GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData $additionalData;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName', 'companyRegistrationNumber' => 'companyRegistrationNumber', 'status' => 'status', 'position' => 'position', 'companyRegistrationDate' => 'companyRegistrationDate', 'latestTurnoverFigure' => 'latestTurnoverFigure', 'netWorth' => 'netWorth', 'legalCount' => 'legalCount', 'creditScore' => 'creditScore', 'additionalData' => 'additionalData'];
    }
}