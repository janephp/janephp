<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesGpsCoordinates
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
     * @var float
     */
    protected $latitude;
    /**
     * @var float
     */
    protected $longitude;
    /**
     * distance
     *
     * @var float
     */
    protected $distance;
    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
    /**
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
    /**
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * distance
     *
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }
    /**
     * distance
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