<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentAPIKey implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Api key
     *
     * @var string
     */
    public string $apiKey;
    public function definedProperties(): array
    {
        return ['apiKey' => 'api_key'];
    }
}