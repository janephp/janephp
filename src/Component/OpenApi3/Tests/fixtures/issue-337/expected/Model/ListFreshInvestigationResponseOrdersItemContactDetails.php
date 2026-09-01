<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponseOrdersItemContactDetails implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['name' => 'name', 'emailAddress' => 'emailAddress', 'telephoneNumber' => 'telephoneNumber'];
    }
}