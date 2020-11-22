<?php

namespace PicturePark\API\Model;

class GeoLocation
{
    /**
     * The latitude
     *
     * @var float
     */
    protected $lat;
    /**
     * The longitude
     *
     * @var float
     */
    protected $lon;
    /**
     * The latitude
     *
     * @return float
     */
    public function getLat() : float
    {
        return $this->lat;
    }
    /**
     * The latitude
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
     * The longitude
     *
     * @return float
     */
    public function getLon() : float
    {
        return $this->lon;
    }
    /**
     * The longitude
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