<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CreateFreshInvestigationRequestSearchCriteria implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $additionalInfo;
    /**
     * @var string
     */
    public string $telephoneNumber;
    /**
     * @var CreateFreshInvestigationRequestSearchCriteriaAddress
     */
    public CreateFreshInvestigationRequestSearchCriteriaAddress $address;
    /**
     * @var string
     */
    public string $regNo;
    /**
     * @var string
     */
    public string $vatNo;
    /**
     * @var string
     */
    public string $countryCode;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'additionalInfo' => 'additionalInfo', 'telephoneNumber' => 'telephoneNumber', 'address' => 'address', 'regNo' => 'regNo', 'vatNo' => 'vatNo', 'countryCode' => 'countryCode'];
    }
}