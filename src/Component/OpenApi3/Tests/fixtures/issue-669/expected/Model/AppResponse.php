<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppResponse implements AdditionalPropertiesInterface
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
     * An application's configuration and status.
     *
     * @var App
     */
    protected $app;
    /**
     * An application's configuration and status.
     *
     * @return App
     */
    public function getApp(): App
    {
        return $this->app;
    }
    /**
     * An application's configuration and status.
     *
     * @param App $app
     *
     * @return self
     */
    public function setApp(App $app): self
    {
        $this->initialized['app'] = true;
        $this->app = $app;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['app' => ['app', 'getApp', 'setApp']];
    }
}