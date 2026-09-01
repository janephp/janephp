<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesRegion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A DigitalOcean region where Kubernetes is available.
     *
     * @var string
     */
    public string $name;
    /**
     * The identifier for a region for use when creating a new cluster.
     *
     * @var string
     */
    public string $slug;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'slug' => 'slug'];
    }
}