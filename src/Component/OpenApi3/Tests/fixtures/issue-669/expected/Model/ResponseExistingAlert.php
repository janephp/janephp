<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingAlert implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, mixed>
     */
    public iterable $alert;
    public function definedProperties(): array
    {
        return ['alert' => 'alert'];
    }
}