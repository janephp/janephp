<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CreateFreshInvestigationRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $consent;
    /**
     * @var CreateFreshInvestigationRequestContactInfo
     */
    public CreateFreshInvestigationRequestContactInfo $contactInfo;
    /**
     * @var string
     */
    public string $chargeReference;
    /**
     * @var CreateFreshInvestigationRequestSearchCriteria
     */
    public CreateFreshInvestigationRequestSearchCriteria $searchCriteria;
    public function definedProperties(): array
    {
        return ['consent' => 'consent', 'contactInfo' => 'contactInfo', 'chargeReference' => 'chargeReference', 'searchCriteria' => 'searchCriteria'];
    }
}