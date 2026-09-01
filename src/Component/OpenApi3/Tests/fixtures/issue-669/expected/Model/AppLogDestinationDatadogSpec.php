<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationDatadogSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Datadog HTTP log intake endpoint.
     *
     * @var string
     */
    public string $endpoint;
    /**
     * Datadog API key.
     *
     * @var string
     */
    public string $apiKey;
    public function definedProperties(): array
    {
        return ['endpoint' => 'endpoint', 'apiKey' => 'api_key'];
    }
}