<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDestination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DestinationOmitCredentials
     */
    public DestinationOmitCredentials $destination;
    public function definedProperties(): array
    {
        return ['destination' => 'destination'];
    }
}