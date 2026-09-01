<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseMonitoringListDestinations implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<DestinationOmitCredentials>
     */
    public array $destinations;
    public function definedProperties(): array
    {
        return ['destinations' => 'destinations'];
    }
}