<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneRecoverySsidSet
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
     * Custom recovery ssid passphrase. If passphrase has been customized, this property cannot be empty in the future.
     *
     * @var string
     */
    protected $recoverySsidPskKey;
    /**
     * recovery ssid enable/disable
     *
     * @var bool
     */
    protected $recoverySsidEnabled;
    /**
     * Custom recovery ssid passphrase. If passphrase has been customized, this property cannot be empty in the future.
     *
     * @return string
     */
    public function getRecoverySsidPskKey(): string
    {
        return $this->recoverySsidPskKey;
    }
    /**
     * Custom recovery ssid passphrase. If passphrase has been customized, this property cannot be empty in the future. 
     *
     * @param string $recoverySsidPskKey
     *
     * @return self
     */
    public function setRecoverySsidPskKey(string $recoverySsidPskKey): self
    {
        $this->initialized['recoverySsidPskKey'] = true;
        $this->recoverySsidPskKey = $recoverySsidPskKey;
        return $this;
    }
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