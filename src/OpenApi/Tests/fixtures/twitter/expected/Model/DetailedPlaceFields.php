<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedPlaceFields
{
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
        $this->geo = $geo;
        return $this;
    }
}