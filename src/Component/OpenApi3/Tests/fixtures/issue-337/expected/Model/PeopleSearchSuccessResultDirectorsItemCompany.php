<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PeopleSearchSuccessResultDirectorsItemCompany implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $companyName;
    /**
     * @var string
     */
    public string $companyNumber;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $regNo;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'companyName' => 'companyName', 'companyNumber' => 'companyNumber', 'type' => 'type', 'regNo' => 'regNo'];
    }
}