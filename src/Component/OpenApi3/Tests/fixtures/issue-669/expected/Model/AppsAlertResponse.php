<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsAlertResponse extends \ArrayObject
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
}