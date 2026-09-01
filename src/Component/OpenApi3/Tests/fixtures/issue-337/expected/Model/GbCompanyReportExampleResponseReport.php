<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReport implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $companyId;
    /**
     * @var string
     */
    public string $language;
    /**
     * @var GbCompanyReportExampleResponseReportCompanySummary
     */
    public GbCompanyReportExampleResponseReportCompanySummary $companySummary;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentification
     */
    public GbCompanyReportExampleResponseReportCompanyIdentification $companyIdentification;
    /**
     * @var GbCompanyReportExampleResponseReportCreditScore
     */
    public GbCompanyReportExampleResponseReportCreditScore $creditScore;
    /**
     * @var GbCompanyReportExampleResponseReportContactInformation
     */
    public GbCompanyReportExampleResponseReportContactInformation $contactInformation;
    /**
     * @var GbCompanyReportExampleResponseReportShareCapitalStructure
     */
    public GbCompanyReportExampleResponseReportShareCapitalStructure $shareCapitalStructure;
    /**
     * @var GbCompanyReportExampleResponseReportDirectors
     */
    public GbCompanyReportExampleResponseReportDirectors $directors;
    /**
     * @var GbCompanyReportExampleResponseReportOtherInformation
     */
    public GbCompanyReportExampleResponseReportOtherInformation $otherInformation;
    /**
     * @var GbCompanyReportExampleResponseReportGroupStructure
     */
    public GbCompanyReportExampleResponseReportGroupStructure $groupStructure;
    /**
     * @var list<GbCompanyReportExampleResponseReportExtendedGroupStructureItem>
     */
    public array $extendedGroupStructure;
    /**
     * @var list<GbCompanyReportExampleResponseReportFinancialStatementsItem>
     */
    public array $financialStatements;
    /**
     * @var list<GbCompanyReportExampleResponseReportLocalFinancialStatementsItem>
     */
    public array $localFinancialStatements;
    /**
     * @var GbCompanyReportExampleResponseReportPaymentData
     */
    public GbCompanyReportExampleResponseReportPaymentData $paymentData;
    /**
     * @var GbCompanyReportExampleResponseReportNegativeInformation
     */
    public GbCompanyReportExampleResponseReportNegativeInformation $negativeInformation;
    /**
     * @var GbCompanyReportExampleResponseReportAdditionalInformation
     */
    public GbCompanyReportExampleResponseReportAdditionalInformation $additionalInformation;
    public function definedProperties(): array
    {
        return ['companyId' => 'companyId', 'language' => 'language', 'companySummary' => 'companySummary', 'companyIdentification' => 'companyIdentification', 'creditScore' => 'creditScore', 'contactInformation' => 'contactInformation', 'shareCapitalStructure' => 'shareCapitalStructure', 'directors' => 'directors', 'otherInformation' => 'otherInformation', 'groupStructure' => 'groupStructure', 'extendedGroupStructure' => 'extendedGroupStructure', 'financialStatements' => 'financialStatements', 'localFinancialStatements' => 'localFinancialStatements', 'paymentData' => 'paymentData', 'negativeInformation' => 'negativeInformation', 'additionalInformation' => 'additionalInformation'];
    }
}