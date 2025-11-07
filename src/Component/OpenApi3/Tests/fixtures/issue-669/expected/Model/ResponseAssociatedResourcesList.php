<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAssociatedResourcesList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Reserved IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @var list<AssociatedResource>
     */
    protected $reservedIps;
    /**
     * Floating IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @var list<AssociatedResource>
     */
    protected $floatingIps;
    /**
     * Snapshots that are associated with this Droplet.<br>Requires `image:read` scope.
     *
     * @var list<AssociatedResource>
     */
    protected $snapshots;
    /**
     * Volumes that are associated with this Droplet.<br>Requires `block_storage:read` scope.
     *
     * @var list<AssociatedResource>
     */
    protected $volumes;
    /**
     * Volume Snapshots that are associated with this Droplet.<br>Requires `block_storage_snapshot:read` scope.
     *
     * @var list<AssociatedResource>
     */
    protected $volumeSnapshots;
    /**
     * Reserved IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @return list<AssociatedResource>
     */
    public function getReservedIps(): array
    {
        return $this->reservedIps;
    }
    /**
     * Reserved IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @param list<AssociatedResource> $reservedIps
     *
     * @return self
     */
    public function setReservedIps(array $reservedIps): self
    {
        $this->initialized['reservedIps'] = true;
        $this->reservedIps = $reservedIps;
        return $this;
    }
    /**
     * Floating IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @return list<AssociatedResource>
     */
    public function getFloatingIps(): array
    {
        return $this->floatingIps;
    }
    /**
     * Floating IPs that are associated with this Droplet.<br>Requires `reserved_ip:read` scope.
     *
     * @param list<AssociatedResource> $floatingIps
     *
     * @return self
     */
    public function setFloatingIps(array $floatingIps): self
    {
        $this->initialized['floatingIps'] = true;
        $this->floatingIps = $floatingIps;
        return $this;
    }
    /**
     * Snapshots that are associated with this Droplet.<br>Requires `image:read` scope.
     *
     * @return list<AssociatedResource>
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }
    /**
     * Snapshots that are associated with this Droplet.<br>Requires `image:read` scope.
     *
     * @param list<AssociatedResource> $snapshots
     *
     * @return self
     */
    public function setSnapshots(array $snapshots): self
    {
        $this->initialized['snapshots'] = true;
        $this->snapshots = $snapshots;
        return $this;
    }
    /**
     * Volumes that are associated with this Droplet.<br>Requires `block_storage:read` scope.
     *
     * @return list<AssociatedResource>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * Volumes that are associated with this Droplet.<br>Requires `block_storage:read` scope.
     *
     * @param list<AssociatedResource> $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * Volume Snapshots that are associated with this Droplet.<br>Requires `block_storage_snapshot:read` scope.
     *
     * @return list<AssociatedResource>
     */
    public function getVolumeSnapshots(): array
    {
        return $this->volumeSnapshots;
    }
    /**
     * Volume Snapshots that are associated with this Droplet.<br>Requires `block_storage_snapshot:read` scope.
     *
     * @param list<AssociatedResource> $volumeSnapshots
     *
     * @return self
     */
    public function setVolumeSnapshots(array $volumeSnapshots): self
    {
        $this->initialized['volumeSnapshots'] = true;
        $this->volumeSnapshots = $volumeSnapshots;
        return $this;
    }
}