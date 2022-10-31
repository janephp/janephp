<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DetailedUserFields extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of metrics for this user
     *
     * @var DetailedUserFieldsStats
     */
    protected $stats;
    /**
     * A list of metrics for this user
     *
     * @return DetailedUserFieldsStats
     */
    public function getStats() : DetailedUserFieldsStats
    {
        return $this->stats;
    }
    /**
     * A list of metrics for this user
     *
     * @param DetailedUserFieldsStats $stats
     *
     * @return self
     */
    public function setStats(DetailedUserFieldsStats $stats) : self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;
        return $this;
    }
}