<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for an available version of Kubernetes for use when creating or updating a cluster. The string contains both the upstream version of Kubernetes as well as the DigitalOcean revision.
     *
     * @var string
     */
    public string $slug;
    /**
     * The upstream version string for the version of Kubernetes provided by a given slug.
     *
     * @var string
     */
    public string $kubernetesVersion;
    /**
     * The features available with the version of Kubernetes provided by a given slug.
     *
     * @var list<string>
     */
    public array $supportedFeatures;
    public function definedProperties(): array
    {
        return ['slug' => 'slug', 'kubernetesVersion' => 'kubernetes_version', 'supportedFeatures' => 'supported_features'];
    }
}