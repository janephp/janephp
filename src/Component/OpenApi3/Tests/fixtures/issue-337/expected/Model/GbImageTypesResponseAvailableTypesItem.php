<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbImageTypesResponseAvailableTypesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $imageType;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var list<string>
     */
    public array $availableFormats;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'imageType' => 'imageType', 'description' => 'description', 'availableFormats' => 'availableFormats'];
    }
}