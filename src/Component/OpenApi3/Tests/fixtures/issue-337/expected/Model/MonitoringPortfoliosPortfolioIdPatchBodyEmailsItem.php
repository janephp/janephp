<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $firstName;
    /**
     * @var string
     */
    public string $lastName;
    /**
     * @var string
     */
    public string $emailAddress;
    public function definedProperties(): array
    {
        return ['firstName' => 'firstName', 'lastName' => 'lastName', 'emailAddress' => 'emailAddress'];
    }
}