<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseClusterCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Cluster
     */
    public Cluster $kubernetesCluster;
    public function definedProperties(): array
    {
        return ['kubernetesCluster' => 'kubernetes_cluster'];
    }
}