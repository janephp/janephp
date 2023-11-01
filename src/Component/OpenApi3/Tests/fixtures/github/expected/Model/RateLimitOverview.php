<?php

namespace Github\Model;

class RateLimitOverview extends \ArrayObject
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
     * @var RateLimitOverviewResources
     */
    protected $resources;
    /**
     * 
     *
     * @var RateLimit
     */
    protected $rate;
    /**
     * 
     *
     * @return RateLimitOverviewResources
     */
    public function getResources() : RateLimitOverviewResources
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param RateLimitOverviewResources $resources
     *
     * @return self
     */
    public function setResources(RateLimitOverviewResources $resources) : self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return RateLimit
     */
    public function getRate() : RateLimit
    {
        return $this->rate;
    }
    /**
     * 
     *
     * @param RateLimit $rate
     *
     * @return self
     */
    public function setRate(RateLimit $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
}