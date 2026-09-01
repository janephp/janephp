<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedKubernetesResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of names and IDs for associated load balancers that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    public array $loadBalancers;
    /**
     * A list of names and IDs for associated volumes that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    public array $volumes;
    /**
     * A list of names and IDs for associated volume snapshots that can be destroyed along with the cluster.
     *
     * @var list<AssociatedKubernetesResource>
     */
    public array $volumeSnapshots;
    public function definedProperties(): array
    {
        return ['loadBalancers' => 'load_balancers', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots'];
    }
}