<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DevicePolicyDevicePolicyRule
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
     * @var string
     */
    protected $description;
    /**
     * deviceType of the device policy rule
     *
     * @var string
     */
    protected $deviceType;
    /**
     * uplink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @var float
     */
    protected $uplink;
    /**
     * downlink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @var float
     */
    protected $downlink;
    /**
     * VLAN Members of the ethernet port profile
     *
     * @var int
     */
    protected $vlan;
    /**
     * defaultAction of the device policy config
     *
     * @var string
     */
    protected $action;
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * deviceType of the device policy rule
     *
     * @return string
     */
    public function getDeviceType(): string
    {
        return $this->deviceType;
    }
    /**
     * deviceType of the device policy rule
     *
     * @param string $deviceType
     *
     * @return self
     */
    public function setDeviceType(string $deviceType): self
    {
        $this->initialized['deviceType'] = true;
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * uplink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @return float
     */
    public function getUplink(): float
    {
        return $this->uplink;
    }
    /**
     * uplink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @param float $uplink
     *
     * @return self
     */
    public function setUplink(float $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
    /**
     * downlink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @return float
     */
    public function getDownlink(): float
    {
        return $this->downlink;
    }
    /**
     * downlink rate Limiting of the device policy rule, rate unit is mbps, value must include be 0, 0.10, 0.25, 0.50, 0.75, 1.00, 1.25,1.50, 1.75, 2.00, 2.25, 2.50, 2.75, 3.00, 3.20, 3.50, 3.75, 4.00, 4.25, 4.50, 4.75, 5.00, 5.25, 5.50, 5.75, 6.00, 6.25, 6.50, 6.75,  7.00, 7.25, 7.50, 7.75, 8.00, 8.25, 8.50, 8.75,  9.00, 9.25, 9.50, 9.75,  10.00, 10.25, 10.50, 10.75, 11.00, 11.25, 11.50, 11.75, 12.00, 12.25, 12.50, 12.75, 13.00, 13.25, 13.50, 13.75, 14.00, 14.25, 14.50, 14.75, 15.00, 15.25, 15.50, 15.75, 16.00, 16.25, 16.50, 16.75, 17.00, 17.25, 17.50, 17.75, 18.00, 18.25, 18.50, 18.75, 19.00, 19.25, 19.50, 19.75, 20.00
     *
     * @param float $downlink
     *
     * @return self
     */
    public function setDownlink(float $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
    /**
     * VLAN Members of the ethernet port profile
     *
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }
    /**
     * VLAN Members of the ethernet port profile
     *
     * @param int $vlan
     *
     * @return self
     */
    public function setVlan(int $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
    /**
     * defaultAction of the device policy config
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * defaultAction of the device policy config
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}