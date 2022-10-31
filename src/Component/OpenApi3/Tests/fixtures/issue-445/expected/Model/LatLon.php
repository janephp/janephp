<?php

namespace PicturePark\API\Model;

class LatLon
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Latitude
     *
     * @var float
     */
    protected $lat;
    /**
     * Longitude
     *
     * @var float
     */
    protected $lon;
    /**
     * Latitude
     *
     * @return float
     */
    public function getLat() : float
    {
        return $this->lat;
    }
    /**
     * Latitude
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat(float $lat) : self
    {
        $this->initialized['lat'] = true;
        $this->lat = $lat;
        return $this;
    }
    /**
     * Longitude
     *
     * @return float
     */
    public function getLon() : float
    {
        return $this->lon;
    }
    /**
     * Longitude
     *
     * @param float $lon
     *
     * @return self
     */
    public function setLon(float $lon) : self
    {
        $this->initialized['lon'] = true;
        $this->lon = $lon;
        return $this;
    }
}