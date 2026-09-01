<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterRegistries implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @var list<string>
     */
    public array $clusterUuids;
    /**
     * An array containing the registry names.
     *
     * @var list<string>
     */
    public array $registries;
    public function definedProperties(): array
    {
        return ['clusterUuids' => 'cluster_uuids', 'registries' => 'registries'];
    }
}