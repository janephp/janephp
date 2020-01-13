<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DetailedUserFields
{
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
        $this->stats = $stats;
        return $this;
    }
}