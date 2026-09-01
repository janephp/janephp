<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingCluster implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ClusterRead
     */
    public ClusterRead $kubernetesCluster;
    public function definedProperties(): array
    {
        return ['kubernetesCluster' => 'kubernetes_cluster'];
    }
}