<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Point
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @var float[]
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
        $this->type = $type;
        return $this;
    }
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @return float[]
     */
    public function getCoordinates() : array
    {
        return $this->coordinates;
    }
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @param float[] $coordinates
     *
     * @return self
     */
    public function setCoordinates(array $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}