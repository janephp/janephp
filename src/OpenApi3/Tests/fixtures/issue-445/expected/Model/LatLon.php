<?php

namespace PicturePark\API\Model;

class LatLon
{
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
        $this->lon = $lon;
        return $this;
    }
}