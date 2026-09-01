<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CreateFreshInvestigationRequestContactInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $emailAddress;
    /**
     * @var string
     */
    public string $telephoneNumber;
    /**
     * @var CreateFreshInvestigationRequestContactInfoCompany
     */
    public CreateFreshInvestigationRequestContactInfoCompany $company;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'emailAddress' => 'emailAddress', 'telephoneNumber' => 'telephoneNumber', 'company' => 'company'];
    }
}