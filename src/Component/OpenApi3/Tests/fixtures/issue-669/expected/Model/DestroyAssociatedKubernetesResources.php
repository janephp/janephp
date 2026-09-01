<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DestroyAssociatedKubernetesResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of IDs for associated load balancers to destroy along with the cluster.
     *
     * @var list<string>
     */
    public array $loadBalancers;
    /**
     * A list of IDs for associated volumes to destroy along with the cluster.
     *
     * @var list<string>
     */
    public array $volumes;
    /**
     * A list of IDs for associated volume snapshots to destroy along with the cluster.
     *
     * @var list<string>
     */
    public array $volumeSnapshots;
    public function definedProperties(): array
    {
        return ['loadBalancers' => 'load_balancers', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots'];
    }
}