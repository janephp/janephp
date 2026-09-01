<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImagesDataItemCompany implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var string
     */
    public string $localId;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'country' => 'country', 'localId' => 'localId', 'name' => 'name'];
    }
}