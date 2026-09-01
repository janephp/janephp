<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class GeofenceProfileGetGeofenceProfile
{
    /**
     * Geofence Profile's id
     *
     * @var string
     */
    public string $id;
    /**
     * Geofence Profile's name
     *
     * @var string
     */
    public string $name;
    /**
     * The zone which Geofence Profile belong to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Geofence Profile's description
     *
     * @var string
     */
    public string $description;
    /**
     * Geofence Profile's radius
     *
     * @var int
     */
    public int $radiusMeter;
    /**
     * Geofence Profile's location list
     *
     * @var list<GeofenceProfileGeofenceProfileLocationData>
     */
    public array $locationList;
}