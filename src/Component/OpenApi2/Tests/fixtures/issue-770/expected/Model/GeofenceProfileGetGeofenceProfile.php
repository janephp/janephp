<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class GeofenceProfileGetGeofenceProfile
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
     * Geofence Profile's id
     *
     * @var string
     */
    protected $id;
    /**
     * Geofence Profile's name
     *
     * @var string
     */
    protected $name;
    /**
     * The zone which Geofence Profile belong to
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Geofence Profile's description
     *
     * @var string
     */
    protected $description;
    /**
     * Geofence Profile's radius
     *
     * @var int
     */
    protected $radiusMeter;
    /**
     * Geofence Profile's location list
     *
     * @var list<GeofenceProfileGeofenceProfileLocationData>
     */
    protected $locationList;
    /**
     * Geofence Profile's id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Geofence Profile's id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Geofence Profile's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Geofence Profile's name
     *
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
     * The zone which Geofence Profile belong to
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * The zone which Geofence Profile belong to
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Geofence Profile's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Geofence Profile's description
     *
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
     * Geofence Profile's radius
     *
     * @return int
     */
    public function getRadiusMeter(): int
    {
        return $this->radiusMeter;
    }
    /**
     * Geofence Profile's radius
     *
     * @param int $radiusMeter
     *
     * @return self
     */
    public function setRadiusMeter(int $radiusMeter): self
    {
        $this->initialized['radiusMeter'] = true;
        $this->radiusMeter = $radiusMeter;
        return $this;
    }
    /**
     * Geofence Profile's location list
     *
     * @return list<GeofenceProfileGeofenceProfileLocationData>
     */
    public function getLocationList(): array
    {
        return $this->locationList;
    }
    /**
     * Geofence Profile's location list
     *
     * @param list<GeofenceProfileGeofenceProfileLocationData> $locationList
     *
     * @return self
     */
    public function setLocationList(array $locationList): self
    {
        $this->initialized['locationList'] = true;
        $this->locationList = $locationList;
        return $this;
    }
}