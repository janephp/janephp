<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationSearchCriteria implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $additionalInfo;
    /**
     * @var CompletedFreshInvestigationSearchCriteriaAddress
     */
    public CompletedFreshInvestigationSearchCriteriaAddress $address;
    /**
     * @var string
     */
    public string $countryCode;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $regNo;
    /**
     * @var string
     */
    public string $vatNo;
    public function definedProperties(): array
    {
        return ['additionalInfo' => 'additionalInfo', 'address' => 'address', 'countryCode' => 'countryCode', 'name' => 'name', 'regNo' => 'regNo', 'vatNo' => 'vatNo'];
    }
}