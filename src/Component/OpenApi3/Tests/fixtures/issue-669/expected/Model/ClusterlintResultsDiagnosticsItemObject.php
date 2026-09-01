<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResultsDiagnosticsItemObject implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the object
     *
     * @var string
     */
    public string $name;
    /**
     * The kind of Kubernetes API object
     *
     * @var string
     */
    public string $kind;
    /**
     * The namespace the object resides in the cluster.
     *
     * @var string
     */
    public string $namespace;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'kind' => 'kind', 'namespace' => 'namespace'];
    }
}