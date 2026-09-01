<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationLogtailSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Logtail token.
     *
     * @var string
     */
    public string $token;
    public function definedProperties(): array
    {
        return ['token' => 'token'];
    }
}