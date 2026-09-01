<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponseOrdersItemSearchCriteria implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $vatNo;
    /**
     * @var string
     */
    public string $regNo;
    /**
     * @var string
     */
    public string $additionalInfo;
    /**
     * @var ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress
     */
    public ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress $address;
    /**
     * @var string
     */
    public string $countryCode;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'vatNo' => 'vatNo', 'regNo' => 'regNo', 'additionalInfo' => 'additionalInfo', 'address' => 'address', 'countryCode' => 'countryCode'];
    }
}