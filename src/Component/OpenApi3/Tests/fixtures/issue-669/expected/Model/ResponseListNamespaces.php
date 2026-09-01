<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseListNamespaces implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<NamespaceInfo>
     */
    public array $namespaces;
    public function definedProperties(): array
    {
        return ['namespaces' => 'namespaces'];
    }
}