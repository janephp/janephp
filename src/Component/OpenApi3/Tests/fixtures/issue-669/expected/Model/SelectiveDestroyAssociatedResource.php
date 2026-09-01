<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SelectiveDestroyAssociatedResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of unique identifiers for the floating IPs to be scheduled for deletion.
     *
     * @deprecated
     *
     * @var list<string>
     */
    public array $floatingIps;
    /**
     * An array of unique identifiers for the reserved IPs to be scheduled for deletion.
     *
     * @var list<string>
     */
    public array $reservedIps;
    /**
     * An array of unique identifiers for the snapshots to be scheduled for deletion.
     *
     * @var list<string>
     */
    public array $snapshots;
    /**
     * An array of unique identifiers for the volumes to be scheduled for deletion.
     *
     * @var list<string>
     */
    public array $volumes;
    /**
     * An array of unique identifiers for the volume snapshots to be scheduled for deletion.
     *
     * @var list<string>
     */
    public array $volumeSnapshots;
    public function definedProperties(): array
    {
        return ['floatingIps' => 'floating_ips', 'reservedIps' => 'reserved_ips', 'snapshots' => 'snapshots', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots'];
    }
}