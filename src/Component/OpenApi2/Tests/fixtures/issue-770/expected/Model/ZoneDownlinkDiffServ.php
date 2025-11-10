<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneDownlinkDiffServ
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
     * Downlink enable
     *
     * @var bool
     */
    protected $downlinkEnable;
    /**
     * Downlink
     *
     * @var string
     */
    protected $downlink;
    /**
     * Downlink enable
     *
     * @return bool
     */
    public function getDownlinkEnable(): bool
    {
        return $this->downlinkEnable;
    }
    /**
     * Downlink enable
     *
     * @param bool $downlinkEnable
     *
     * @return self
     */
    public function setDownlinkEnable(bool $downlinkEnable): self
    {
        $this->initialized['downlinkEnable'] = true;
        $this->downlinkEnable = $downlinkEnable;
        return $this;
    }
    /**
     * Downlink
     *
     * @return string
     */
    public function getDownlink(): string
    {
        return $this->downlink;
    }
    /**
     * Downlink
     *
     * @param string $downlink
     *
     * @return self
     */
    public function setDownlink(string $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
}