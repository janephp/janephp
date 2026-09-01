<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationPapertrailSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Papertrail syslog endpoint.
     *
     * @var string
     */
    public string $endpoint;
    public function definedProperties(): array
    {
        return ['endpoint' => 'endpoint'];
    }
}