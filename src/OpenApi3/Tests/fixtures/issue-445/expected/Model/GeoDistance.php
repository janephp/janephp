<?php

namespace PicturePark\API\Model;

class GeoDistance
{
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
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * The distance in meters.
     *
     * @return float
     */
    public function getDistance() : float
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
    public function setDistance(float $distance) : self
    {
        $this->distance = $distance;
        return $this;
    }
}