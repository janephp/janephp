<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsListAlertsResponse extends \ArrayObject
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
     * @var list<AppAlert>
     */
    protected $alerts;
    /**
     * @return list<AppAlert>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * @param list<AppAlert> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}