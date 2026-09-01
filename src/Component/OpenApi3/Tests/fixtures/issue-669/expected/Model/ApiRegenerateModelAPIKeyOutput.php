<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRegenerateModelAPIKeyOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Model API Key Info
     *
     * @var ApiModelAPIKeyInfo
     */
    public ApiModelAPIKeyInfo $apiKeyInfo;
    public function definedProperties(): array
    {
        return ['apiKeyInfo' => 'api_key_info'];
    }
}