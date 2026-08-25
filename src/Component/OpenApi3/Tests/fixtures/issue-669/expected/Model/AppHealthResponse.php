<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppHealthResponse implements AdditionalPropertiesInterface
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
     * @var AppHealth
     */
    protected $appHealth;
    /**
     * @return AppHealth
     */
    public function getAppHealth(): AppHealth
    {
        return $this->appHealth;
    }
    /**
     * @param AppHealth $appHealth
     *
     * @return self
     */
    public function setAppHealth(AppHealth $appHealth): self
    {
        $this->initialized['appHealth'] = true;
        $this->appHealth = $appHealth;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['appHealth' => ['app_health', 'getAppHealth', 'setAppHealth']];
    }
}