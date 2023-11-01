<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DefaultTweetFieldsGeo extends \ArrayObject
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
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @var Point
     */
    protected $coordinates;
    /**
     * The identifier for this place
     *
     * @var string
     */
    protected $placeId;
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @return Point
     */
    public function getCoordinates() : Point
    {
        return $this->coordinates;
    }
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @param Point $coordinates
     *
     * @return self
     */
    public function setCoordinates(Point $coordinates) : self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * The identifier for this place
     *
     * @return string
     */
    public function getPlaceId() : string
    {
        return $this->placeId;
    }
    /**
     * The identifier for this place
     *
     * @param string $placeId
     *
     * @return self
     */
    public function setPlaceId(string $placeId) : self
    {
        $this->initialized['placeId'] = true;
        $this->placeId = $placeId;
        return $this;
    }
}