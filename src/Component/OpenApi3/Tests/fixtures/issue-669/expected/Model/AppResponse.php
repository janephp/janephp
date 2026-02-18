<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppResponse extends \ArrayObject
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
}