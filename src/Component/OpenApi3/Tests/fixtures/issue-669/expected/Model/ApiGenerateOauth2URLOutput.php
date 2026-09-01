<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGenerateOauth2URLOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The oauth2 url
     *
     * @var string
     */
    public string $url;
    public function definedProperties(): array
    {
        return ['url' => 'url'];
    }
}