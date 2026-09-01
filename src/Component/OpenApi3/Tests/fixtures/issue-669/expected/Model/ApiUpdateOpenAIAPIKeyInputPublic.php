<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateOpenAIAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * OpenAI API key
     *
     * @var string
     */
    public string $apiKey;
    /**
     * API key ID
     *
     * @var string
     */
    public string $apiKeyUuid;
    /**
     * Name of the key
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['apiKey' => 'api_key', 'apiKeyUuid' => 'api_key_uuid', 'name' => 'name'];
    }
}