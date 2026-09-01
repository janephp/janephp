<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiDeleteAnthropicAPIKeyOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Anthropic API Key Info
     *
     * @var ApiAnthropicAPIKeyInfo
     */
    public ApiAnthropicAPIKeyInfo $apiKeyInfo;
    public function definedProperties(): array
    {
        return ['apiKeyInfo' => 'api_key_info'];
    }
}