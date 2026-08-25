<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsListAlertsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['alerts' => ['alerts', 'getAlerts', 'setAlerts']];
    }
}