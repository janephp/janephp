<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsInactiveItem implements AdditionalPropertiesInterface
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
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemPosition
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemPosition $position;
    /**
     * @var string
     */
    public string $companyRegistrationDate;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth $netWorth;
    /**
     * @var int
     */
    public int $legalCount;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore $creditScore;
    /**
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData
     */
    public GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData $additionalData;
    public function definedProperties(): array
    {
        return ['companyName' => 'companyName', 'companyNumber' => 'companyNumber', 'companyRegistrationNumber' => 'companyRegistrationNumber', 'status' => 'status', 'position' => 'position', 'companyRegistrationDate' => 'companyRegistrationDate', 'netWorth' => 'netWorth', 'legalCount' => 'legalCount', 'creditScore' => 'creditScore', 'additionalData' => 'additionalData'];
    }
}