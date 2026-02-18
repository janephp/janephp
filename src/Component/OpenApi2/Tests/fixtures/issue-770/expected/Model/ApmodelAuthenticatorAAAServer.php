<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelAuthenticatorAAAServer
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
     * @var bool
     */
    protected $enableUseSCGasProxy;
    /**
     * @var CommonGenericRef
     */
    protected $server;
    /**
     * @return bool
     */
    public function getEnableUseSCGasProxy(): bool
    {
        return $this->enableUseSCGasProxy;
    }
    /**
     * @param bool $enableUseSCGasProxy
     *
     * @return self
     */
    public function setEnableUseSCGasProxy(bool $enableUseSCGasProxy): self
    {
        $this->initialized['enableUseSCGasProxy'] = true;
        $this->enableUseSCGasProxy = $enableUseSCGasProxy;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getServer(): CommonGenericRef
    {
        return $this->server;
    }
    /**
     * @param CommonGenericRef $server
     *
     * @return self
     */
    public function setServer(CommonGenericRef $server): self
    {
        $this->initialized['server'] = true;
        $this->server = $server;
        return $this;
    }
}