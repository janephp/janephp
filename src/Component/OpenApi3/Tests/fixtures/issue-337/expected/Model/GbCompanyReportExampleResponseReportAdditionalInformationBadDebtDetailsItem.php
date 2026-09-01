<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $statementDate;
    /**
     * @var string
     */
    public string $registrationNumber;
    /**
     * @var string
     */
    public string $companyName;
    /**
     * @var GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount
     */
    public GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount $amount;
    public function definedProperties(): array
    {
        return ['statementDate' => 'statementDate', 'registrationNumber' => 'registrationNumber', 'companyName' => 'companyName', 'amount' => 'amount'];
    }
}