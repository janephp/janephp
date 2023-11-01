<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DetailedPlaceFields extends \ArrayObject
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
     * @var Geo
     */
    protected $geo;
    /**
     * 
     *
     * @return Geo
     */
    public function getGeo() : Geo
    {
        return $this->geo;
    }
    /**
     * 
     *
     * @param Geo $geo
     *
     * @return self
     */
    public function setGeo(Geo $geo) : self
    {
        $this->initialized['geo'] = true;
        $this->geo = $geo;
        return $this;
    }
}