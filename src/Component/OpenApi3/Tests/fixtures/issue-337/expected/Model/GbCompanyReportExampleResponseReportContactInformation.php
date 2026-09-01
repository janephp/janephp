<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportContactInformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var GbCompanyReportExampleResponseReportContactInformationMainAddress
     */
    public GbCompanyReportExampleResponseReportContactInformationMainAddress $mainAddress;
    /**
     * @var list<GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem>
     */
    public array $otherAddresses;
    /**
     * @var list<string>
     */
    public array $websites;
    public function definedProperties(): array
    {
        return ['mainAddress' => 'mainAddress', 'otherAddresses' => 'otherAddresses', 'websites' => 'websites'];
    }
}