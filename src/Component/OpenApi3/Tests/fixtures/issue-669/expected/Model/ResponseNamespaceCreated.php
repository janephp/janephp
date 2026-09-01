<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseNamespaceCreated implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var NamespaceInfo
     */
    public NamespaceInfo $namespace;
    public function definedProperties(): array
    {
        return ['namespace' => 'namespace'];
    }
}