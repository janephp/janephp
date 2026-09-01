<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompanySearchSuccessResultCompaniesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $regNo;
    /**
     * @var CompanySearchSuccessResultCompaniesItemVatNo
     */
    public CompanySearchSuccessResultCompaniesItemVatNo $vatNo;
    /**
     * @var string
     */
    public string $safeNo;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $officeType;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $statusDescription;
    /**
     * @var string
     */
    public string $activityCode;
    /**
     * @var CompanySearchSuccessResultCompaniesItemTradingNames
     */
    public CompanySearchSuccessResultCompaniesItemTradingNames $tradingNames;
    /**
     * @var CompanySearchSuccessResultCompaniesItemAddress
     */
    public CompanySearchSuccessResultCompaniesItemAddress $address;
    /**
     * @var CompanySearchSuccessResultCompaniesItemDateOfLatestChange
     */
    public CompanySearchSuccessResultCompaniesItemDateOfLatestChange $dateOfLatestChange;
    /**
     * @var CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts
     */
    public CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts $dateOfLatestCAccounts;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'country' => 'country', 'regNo' => 'regNo', 'vatNo' => 'vatNo', 'safeNo' => 'safeNo', 'name' => 'name', 'status' => 'status', 'officeType' => 'officeType', 'type' => 'type', 'statusDescription' => 'statusDescription', 'activityCode' => 'activityCode', 'tradingNames' => 'tradingNames', 'address' => 'address', 'dateOfLatestChange' => 'dateOfLatestChange', 'dateOfLatestCAccounts' => 'dateOfLatestCAccounts'];
    }
}