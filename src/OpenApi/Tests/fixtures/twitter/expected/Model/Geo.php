<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Geo
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var float[]
     */
    protected $bbox;
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @var Point
     */
    protected $geometry;
    /**
     * 
     *
     * @var mixed
     */
    protected $properties;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return float[]
     */
    public function getBbox() : array
    {
        return $this->bbox;
    }
    /**
     * 
     *
     * @param float[] $bbox
     *
     * @return self
     */
    public function setBbox(array $bbox) : self
    {
        $this->bbox = $bbox;
        return $this;
    }
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @return Point
     */
    public function getGeometry() : Point
    {
        return $this->geometry;
    }
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @param Point $geometry
     *
     * @return self
     */
    public function setGeometry(Point $geometry) : self
    {
        $this->geometry = $geometry;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param mixed $properties
     *
     * @return self
     */
    public function setProperties($properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
}