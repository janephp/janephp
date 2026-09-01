<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsCurrentItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $companyName;
    /**
     * @var string
     */
    public string $companyNumber;
    /**
     * @var string
     */
    public string $companyRegistrationNumber;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemPosition
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemPosition $position;
    /**
     * @var string
     */
    public string $companyRegistrationDate;
    /**
     * @var int
     */
    public int $legalCount;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore $creditScore;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData $additionalData;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure $latestTurnoverFigure;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth $netWorth;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount
     */
    public GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount $legalAmount;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName', 'companyNumber' => 'companyNumber', 'companyRegistrationNumber' => 'companyRegistrationNumber', 'status' => 'status', 'position' => 'position', 'companyRegistrationDate' => 'companyRegistrationDate', 'legalCount' => 'legalCount', 'creditScore' => 'creditScore', 'additionalData' => 'additionalData', 'latestTurnoverFigure' => 'latestTurnoverFigure', 'netWorth' => 'netWorth', 'legalAmount' => 'legalAmount'];
    }
}