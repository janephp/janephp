<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AssociatedResourceStatusResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<DestroyedAssociatedResource>
     */
    protected $reservedIps;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    protected $floatingIps;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    protected $snapshots;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    protected $volumes;
    /**
     * @var list<DestroyedAssociatedResource>
     */
    protected $volumeSnapshots;
    /**
     * @return list<DestroyedAssociatedResource>
     */
    public function getReservedIps(): array
    {
        return $this->reservedIps;
    }
    /**
     * @param list<DestroyedAssociatedResource> $reservedIps
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
     * @return list<DestroyedAssociatedResource>
     */
    public function getFloatingIps(): array
    {
        return $this->floatingIps;
    }
    /**
     * @param list<DestroyedAssociatedResource> $floatingIps
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
     * @return list<DestroyedAssociatedResource>
     */
    public function getSnapshots(): array
    {
        return $this->snapshots;
    }
    /**
     * @param list<DestroyedAssociatedResource> $snapshots
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
     * @return list<DestroyedAssociatedResource>
     */
    public function getVolumes(): array
    {
        return $this->volumes;
    }
    /**
     * @param list<DestroyedAssociatedResource> $volumes
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
     * @return list<DestroyedAssociatedResource>
     */
    public function getVolumeSnapshots(): array
    {
        return $this->volumeSnapshots;
    }
    /**
     * @param list<DestroyedAssociatedResource> $volumeSnapshots
     *
     * @return self
     */
    public function setVolumeSnapshots(array $volumeSnapshots): self
    {
        $this->initialized['volumeSnapshots'] = true;
        $this->volumeSnapshots = $volumeSnapshots;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['reservedIps' => ['reserved_ips', 'getReservedIps', 'setReservedIps'], 'floatingIps' => ['floating_ips', 'getFloatingIps', 'setFloatingIps'], 'snapshots' => ['snapshots', 'getSnapshots', 'setSnapshots'], 'volumes' => ['volumes', 'getVolumes', 'setVolumes'], 'volumeSnapshots' => ['volume_snapshots', 'getVolumeSnapshots', 'setVolumeSnapshots']];
    }
}