<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResourceStatusResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    public array $reservedIps;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    public array $floatingIps;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    public array $snapshots;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    public array $volumes;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    public array $volumeSnapshots;
    public function definedProperties(): array
    {
        return ['reservedIps' => 'reserved_ips', 'floatingIps' => 'floating_ips', 'snapshots' => 'snapshots', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots'];
    }
}