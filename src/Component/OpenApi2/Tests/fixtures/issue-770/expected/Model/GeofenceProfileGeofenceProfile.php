<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class GeofenceProfileGeofenceProfile
{
    /**
     * Geofence Profile's name
     *
     * @var string
     */
    public string $name;
    /**
     * Geofence Profile's description
     *
     * @var string
     */
    public string $description;
    /**
     * Geofence Profile's radius (1 - 100) meter
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