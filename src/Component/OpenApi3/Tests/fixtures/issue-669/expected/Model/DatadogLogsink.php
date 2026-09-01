<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatadogLogsink implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Datadog connection URL
     *
     * @var string
     */
    public string $site;
    /**
     * Datadog API key
     *
     * @var string
     */
    public string $datadogApiKey;
    public function definedProperties(): array
    {
        return ['site' => 'site', 'datadogApiKey' => 'datadog_api_key'];
    }
}