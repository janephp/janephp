<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingVpc implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var iterable<string, mixed>
     */
    public iterable $vpc;
    public function definedProperties(): array
    {
        return ['vpc' => 'vpc'];
    }
}