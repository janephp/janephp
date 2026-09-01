<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAssociatedResourcesList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Reserved IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @var list<AssociatedResource>
     */
    public array $reservedIps;
    /**
     * Floating IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @var list<AssociatedResource>
     */
    public array $floatingIps;
    /**
     * Snapshots that are associated with this Droplet.<br>Requires `image:read` scope.
     *
     * @var list<AssociatedResource>
     */
    public array $snapshots;
    /**
     * Volumes that are associated with this Droplet.<br>Requires `block_storage:read` scope.
     *
     * @var list<AssociatedResource>
     */
    public array $volumes;
    /**
     * Volume Snapshots that are associated with this Droplet.<br>Requires `block_storage_snapshot:read` scope.
     *
     * @var list<AssociatedResource>
     */
    public array $volumeSnapshots;
    public function definedProperties(): array
    {
        return ['reservedIps' => 'reserved_ips', 'floatingIps' => 'floating_ips', 'snapshots' => 'snapshots', 'volumes' => 'volumes', 'volumeSnapshots' => 'volume_snapshots'];
    }
}