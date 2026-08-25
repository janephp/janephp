<?php

namespace PicturePark\API\Model;

class GeoDistance
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
     * Language specific geo distance names.
     *
     * @var array<string, string>|null
     */
    protected $names;
    /**
     * The distance in meters.
     *
     * @var float
     */
    protected $distance;
    /**
     * Language specific geo distance names.
     *
     * @return array<string, string>|null
     */
    public function getNames(): ?iterable
    {
        return $this->names;
    }
    /**
     * Language specific geo distance names.
     *
     * @param array<string, string>|null $names
     *
     * @return self
     */
    public function setNames(?iterable $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * The distance in meters.
     *
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }
    /**
     * The distance in meters.
     *
     * @param float $distance
     *
     * @return self
     */
    public function setDistance(float $distance): self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
}