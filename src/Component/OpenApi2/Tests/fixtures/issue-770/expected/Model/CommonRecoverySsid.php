<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRecoverySsid
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
     * recovery ssid enable/disable
     *
     * @var bool
     */
    protected $recoverySsidEnabled;
    /**
     * recovery ssid enable/disable
     *
     * @return bool
     */
    public function getRecoverySsidEnabled(): bool
    {
        return $this->recoverySsidEnabled;
    }
    /**
     * recovery ssid enable/disable
     *
     * @param bool $recoverySsidEnabled
     *
     * @return self
     */
    public function setRecoverySsidEnabled(bool $recoverySsidEnabled): self
    {
        $this->initialized['recoverySsidEnabled'] = true;
        $this->recoverySsidEnabled = $recoverySsidEnabled;
        return $this;
    }
}