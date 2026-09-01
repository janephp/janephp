<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseCa implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Ca
     */
    public Ca $ca;
    public function definedProperties(): array
    {
        return ['ca' => 'ca'];
    }
}