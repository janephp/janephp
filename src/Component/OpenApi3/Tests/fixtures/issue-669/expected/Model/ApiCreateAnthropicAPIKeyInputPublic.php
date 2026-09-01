<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateAnthropicAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Anthropic API key
     *
     * @var string
     */
    public string $apiKey;
    /**
     * Name of the key
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['apiKey' => 'api_key', 'name' => 'name'];
    }
}