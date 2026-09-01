<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVolumeAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, mixed>
     */
    public iterable $action;
    public function definedProperties(): array
    {
        return ['action' => 'action'];
    }
}