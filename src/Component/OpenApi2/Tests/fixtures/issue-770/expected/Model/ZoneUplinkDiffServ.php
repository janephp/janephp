<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneUplinkDiffServ
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
     * Uplink enable
     *
     * @var bool
     */
    protected $uplinkEnable;
    /**
     * Uplink
     *
     * @var string
     */
    protected $uplink;
    /**
     * Uplink enable
     *
     * @return bool
     */
    public function getUplinkEnable(): bool
    {
        return $this->uplinkEnable;
    }
    /**
     * Uplink enable
     *
     * @param bool $uplinkEnable
     *
     * @return self
     */
    public function setUplinkEnable(bool $uplinkEnable): self
    {
        $this->initialized['uplinkEnable'] = true;
        $this->uplinkEnable = $uplinkEnable;
        return $this;
    }
    /**
     * Uplink
     *
     * @return string
     */
    public function getUplink(): string
    {
        return $this->uplink;
    }
    /**
     * Uplink
     *
     * @param string $uplink
     *
     * @return self
     */
    public function setUplink(string $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
}