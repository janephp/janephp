<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterRegistry implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array containing the UUIDs of Kubernetes clusters.
     *
     * @var list<string>
     */
    public array $clusterUuids;
    public function definedProperties(): array
    {
        return ['clusterUuids' => 'cluster_uuids'];
    }
}