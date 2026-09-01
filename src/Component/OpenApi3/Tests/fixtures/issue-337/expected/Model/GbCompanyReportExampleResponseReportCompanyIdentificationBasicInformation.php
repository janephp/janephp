<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $businessName;
    /**
     * @var string
     */
    public string $registeredCompanyName;
    /**
     * @var string
     */
    public string $companyRegistrationNumber;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $companyRegistrationDate;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm
     */
    public GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm $legalForm;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus
     */
    public GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus $companyStatus;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity
     */
    public GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity $principalActivity;
    /**
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress
     */
    public GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress $contactAddress;
    public function definedProperties(): array
    {
        return ['businessName' => 'businessName', 'registeredCompanyName' => 'registeredCompanyName', 'companyRegistrationNumber' => 'companyRegistrationNumber', 'country' => 'country', 'companyRegistrationDate' => 'companyRegistrationDate', 'legalForm' => 'legalForm', 'companyStatus' => 'companyStatus', 'principalActivity' => 'principalActivity', 'contactAddress' => 'contactAddress'];
    }
}