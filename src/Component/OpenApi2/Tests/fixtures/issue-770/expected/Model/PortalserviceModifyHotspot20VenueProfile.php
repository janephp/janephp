<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceModifyHotspot20VenueProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Category group of the Hotspot 2.0 venue profile
     *
     * @var string
     */
    protected $group;
    /**
     * Category type of the Hotspot 2.0 venue profile
     *
     * @var string
     */
    protected $type;
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @var float
     */
    protected $downlinkSpeedInKbps;
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @var float
     */
    protected $uplinkSpeedInKbps;
    /**
     * @var list<PortalserviceVenueName>
     */
    protected $venueNames;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Category group of the Hotspot 2.0 venue profile
     *
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }
    /**
     * Category group of the Hotspot 2.0 venue profile
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * Category type of the Hotspot 2.0 venue profile
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Category type of the Hotspot 2.0 venue profile
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @return float
     */
    public function getDownlinkSpeedInKbps(): float
    {
        return $this->downlinkSpeedInKbps;
    }
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @param float $downlinkSpeedInKbps
     *
     * @return self
     */
    public function setDownlinkSpeedInKbps(float $downlinkSpeedInKbps): self
    {
        $this->initialized['downlinkSpeedInKbps'] = true;
        $this->downlinkSpeedInKbps = $downlinkSpeedInKbps;
        return $this;
    }
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @return float
     */
    public function getUplinkSpeedInKbps(): float
    {
        return $this->uplinkSpeedInKbps;
    }
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @param float $uplinkSpeedInKbps
     *
     * @return self
     */
    public function setUplinkSpeedInKbps(float $uplinkSpeedInKbps): self
    {
        $this->initialized['uplinkSpeedInKbps'] = true;
        $this->uplinkSpeedInKbps = $uplinkSpeedInKbps;
        return $this;
    }
    /**
     * @return list<PortalserviceVenueName>
     */
    public function getVenueNames(): array
    {
        return $this->venueNames;
    }
    /**
     * @param list<PortalserviceVenueName> $venueNames
     *
     * @return self
     */
    public function setVenueNames(array $venueNames): self
    {
        $this->initialized['venueNames'] = true;
        $this->venueNames = $venueNames;
        return $this;
    }
}