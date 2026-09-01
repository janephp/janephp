<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateOpenAIAPIKeyOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * OpenAI API Key Info
     *
     * @var ApiOpenAIAPIKeyInfo
     */
    public ApiOpenAIAPIKeyInfo $apiKeyInfo;
    public function definedProperties(): array
    {
        return ['apiKeyInfo' => 'api_key_info'];
    }
}