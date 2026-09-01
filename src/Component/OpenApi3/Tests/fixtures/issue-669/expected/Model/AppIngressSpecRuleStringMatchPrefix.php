<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRuleStringMatchPrefix implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Prefix-based match. For example, `/api` will match `/api`, `/api/`, and any nested paths such as `/api/v1/endpoint`.
     *
     * @var string
     */
    public string $prefix;
    public function definedProperties(): array
    {
        return ['prefix' => 'prefix'];
    }
}