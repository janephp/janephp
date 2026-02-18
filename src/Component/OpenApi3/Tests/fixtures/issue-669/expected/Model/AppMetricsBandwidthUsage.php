<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppMetricsBandwidthUsage extends \ArrayObject
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
     * A list of bandwidth usage details by app.
     *
     * @var list<AppMetricsBandwidthUsageDetails>
     */
    protected $appBandwidthUsage;
    /**
     * The date for the metrics data.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * A list of bandwidth usage details by app.
     *
     * @return list<AppMetricsBandwidthUsageDetails>
     */
    public function getAppBandwidthUsage(): array
    {
        return $this->appBandwidthUsage;
    }
    /**
     * A list of bandwidth usage details by app.
     *
     * @param list<AppMetricsBandwidthUsageDetails> $appBandwidthUsage
     *
     * @return self
     */
    public function setAppBandwidthUsage(array $appBandwidthUsage): self
    {
        $this->initialized['appBandwidthUsage'] = true;
        $this->appBandwidthUsage = $appBandwidthUsage;
        return $this;
    }
    /**
     * The date for the metrics data.
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * The date for the metrics data.
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