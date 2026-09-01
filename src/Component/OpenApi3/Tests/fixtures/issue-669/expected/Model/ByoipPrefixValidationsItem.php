<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefixValidationsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the validation
     *
     * @var string
     */
    public string $name;
    /**
     * Status of the validation
     *
     * @var string
     */
    public string $status;
    /**
     * Additional notes or details about the validation
     *
     * @var string
     */
    public string $note;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'status' => 'status', 'note' => 'note'];
    }
}