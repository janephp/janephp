<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Point extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @var list<float>
     */
    protected $coordinates;
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
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @return list<float>
     */
    public function getCoordinates() : array
    {
        return $this->coordinates;
    }
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @param list<float> $coordinates
     *
     * @return self
     */
    public function setCoordinates(array $coordinates) : self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;
        return $this;
    }
}