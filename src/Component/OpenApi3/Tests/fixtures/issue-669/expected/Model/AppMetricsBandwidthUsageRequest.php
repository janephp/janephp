<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppMetricsBandwidthUsageRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of app IDs to query bandwidth metrics for.
     *
     * @var list<string>
     */
    protected $appIds;
    /**
     * Optional day to query. Only the date component of the timestamp will be considered. Default: yesterday.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * A list of app IDs to query bandwidth metrics for.
     *
     * @return list<string>
     */
    public function getAppIds(): array
    {
        return $this->appIds;
    }
    /**
     * A list of app IDs to query bandwidth metrics for.
     *
     * @param list<string> $appIds
     *
     * @return self
     */
    public function setAppIds(array $appIds): self
    {
        $this->initialized['appIds'] = true;
        $this->appIds = $appIds;
        return $this;
    }
    /**
     * Optional day to query. Only the date component of the timestamp will be considered. Default: yesterday.
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * Optional day to query. Only the date component of the timestamp will be considered. Default: yesterday.
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}