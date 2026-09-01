<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigationContactDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $emailAddress;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $telephoneNumber;
    public function definedProperties(): array
    {
        return ['emailAddress' => 'emailAddress', 'name' => 'name', 'telephoneNumber' => 'telephoneNumber'];
    }
}