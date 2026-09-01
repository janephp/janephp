<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedKubernetesResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of a resource associated with a Kubernetes cluster.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of a resource associated with a Kubernetes cluster.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name'];
    }
}