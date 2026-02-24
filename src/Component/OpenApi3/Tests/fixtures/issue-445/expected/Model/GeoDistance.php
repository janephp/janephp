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
     * @var mixed|null
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
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific geo distance names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
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