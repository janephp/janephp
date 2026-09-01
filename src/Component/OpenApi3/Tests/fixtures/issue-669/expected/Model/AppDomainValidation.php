<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppDomainValidation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $txtName;
    /**
     * @var string
     */
    public string $txtValue;
    public function definedProperties(): array
    {
        return ['txtName' => 'txt_name', 'txtValue' => 'txt_value'];
    }
}