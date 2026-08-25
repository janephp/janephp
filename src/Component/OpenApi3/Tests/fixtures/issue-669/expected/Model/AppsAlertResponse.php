<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsAlertResponse implements AdditionalPropertiesInterface
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
     * @var AppAlert
     */
    protected $alert;
    /**
     * @return AppAlert
     */
    public function getAlert(): AppAlert
    {
        return $this->alert;
    }
    /**
     * @param AppAlert $alert
     *
     * @return self
     */
    public function setAlert(AppAlert $alert): self
    {
        $this->initialized['alert'] = true;
        $this->alert = $alert;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['alert' => ['alert', 'getAlert', 'setAlert']];
    }
}