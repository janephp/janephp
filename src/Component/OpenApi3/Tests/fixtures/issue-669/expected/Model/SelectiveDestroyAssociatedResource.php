<?php

namespace Jane\Generated\DigitalOcean\Model;

class SelectiveDestroyAssociatedResource extends \ArrayObject
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
     * An array of unique identifiers for the floating IPs to be scheduled for deletion.
     *
     * @deprecated
     *
     * @var list<string>
     */
    protected $floatingIps;
    /**
     * An array of unique identifiers for the reserved IPs to be scheduled for deletion.
     *
     * @var list<string>
     */
    protected $reservedIps;
    /**
     * An array of unique identifiers for the snapshots to be scheduled for deletion.
     *
     * @var list<string>
     */
    protected $snapshots;
    /**
     * An array of unique identifiers for the volumes to be scheduled for deletion.
     *
     * @var list<string>
     */
    protected $volumes;
    /**
     * An array of unique identifiers for the volume snapshots to be scheduled for deletion.
     *
     * @var list<string>
     */
    protected $volumeSnapshots;
    /**
     * An array of unique identifiers for the floating IPs to be scheduled for deletion.
     *
     * @deprecated
     *
     * @return list<string>
     */
    public function getFloatingIps(): array
    {
        return $this->floatingIps;
    }
    /**
     * An array of unique identifiers for the floating IPs to be scheduled for deletion.
     *
     * @param list<string> $floatingIps
     *
     * @deprecated
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
     * An array of unique identifiers for the reserved IPs to be scheduled for deletion.
     *
     * @return list<string>
     */
    public function getReservedIps(): array
    {
        return $this->reservedIps;
    }
    /**
     * An array of unique identifiers for the reserved IPs to be scheduled for deletion.
     *
     * @param list<string> $reservedIps
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
     * An array of unique identifiers for the snapshots to be scheduled for deletion.
     *
     * @return list<string>
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }
    /**
     * An array of unique identifiers for the snapshots to be scheduled for deletion.
     *
     * @param list<string> $snapshots
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
     * An array of unique identifiers for the volumes to be scheduled for deletion.
     *
     * @return list<string>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * An array of unique identifiers for the volumes to be scheduled for deletion.
     *
     * @param list<string> $volumes
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
     * An array of unique identifiers for the volume snapshots to be scheduled for deletion.
     *
     * @return list<string>
     */
    public function getVolumeSnapshots(): array
    {
        return $this->volumeSnapshots;
    }
    /**
     * An array of unique identifiers for the volume snapshots to be scheduled for deletion.
     *
     * @param list<string> $volumeSnapshots
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