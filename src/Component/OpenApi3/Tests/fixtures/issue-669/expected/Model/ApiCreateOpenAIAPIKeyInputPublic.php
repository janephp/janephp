<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateOpenAIAPIKeyInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * OpenAI API key
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