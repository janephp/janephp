<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceCreateHotspot20VenueProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Category group of the Hotspot 2.0 venue profile
     *
     * @var string
     */
    public string $group;
    /**
     * Category type of the Hotspot 2.0 venue profile
     *
     * @var string
     */
    public string $type;
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @var float
     */
    public float $downlinkSpeedInKbps;
    /**
     * Link Speed of the Hotspot 2.0 venue profile
     *
     * @var float
     */
    public float $uplinkSpeedInKbps;
    /**
     * @var list<PortalserviceVenueName>
     */
    public array $venueNames;
}