<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateAgentAPIKeyOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agent API Key Info
     *
     * @var ApiAgentAPIKeyInfo
     */
    public ApiAgentAPIKeyInfo $apiKeyInfo;
    public function definedProperties(): array
    {
        return ['apiKeyInfo' => 'api_key_info'];
    }
}