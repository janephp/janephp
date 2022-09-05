<?php

namespace PicturePark\API\Model;

class GeoDistanceFilter extends FilterBase
{
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var mixed
     */
    protected $location;
    /**
     * The distance in meters from the point of origin.
     *
     * @var float
     */
    protected $distance;
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @return string
    */
    public function getField() : string
    {
        return $this->field;
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @param string $field
    *
    * @return self
    */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @param mixed $location
     *
     * @return self
     */
    public function setLocation($location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * The distance in meters from the point of origin.
     *
     * @return float
     */
    public function getDistance() : float
    {
        return $this->distance;
    }
    /**
     * The distance in meters from the point of origin.
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