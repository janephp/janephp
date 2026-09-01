<?php

namespace PicturePark\API\Model;

class GeoDistance
{
    /**
     * Language specific geo distance names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * The distance in meters.
     *
     * @var float
     */
    public float $distance;
}