<?php

namespace Github\Model;

class RateLimitOverview extends \ArrayObject
{
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
        $this->rate = $rate;
        return $this;
    }
}