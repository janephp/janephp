<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DhcppoolsDhcpClientInfo
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
    protected $clientMac;
    /**
     * @var string
     */
    protected $clientIp;
    /**
     * @var int
     */
    protected $leaseTime;
    /**
     * @var int
     */
    protected $leaseTimeHours;
    /**
     * @var int
     */
    protected $leaseTimeMinutes;
    /**
     * @var int
     */
    protected $leaseExpiryTime;
    /**
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
     * @param string $clientMac
     *
     * @return self
     */
    public function setClientMac(string $clientMac): self
    {
        $this->initialized['clientMac'] = true;
        $this->clientMac = $clientMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->clientIp;
    }
    /**
     * @param string $clientIp
     *
     * @return self
     */
    public function setClientIp(string $clientIp): self
    {
        $this->initialized['clientIp'] = true;
        $this->clientIp = $clientIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getLeaseTime(): int
    {
        return $this->leaseTime;
    }
    /**
     * @param int $leaseTime
     *
     * @return self
     */
    public function setLeaseTime(int $leaseTime): self
    {
        $this->initialized['leaseTime'] = true;
        $this->leaseTime = $leaseTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getLeaseTimeHours(): int
    {
        return $this->leaseTimeHours;
    }
    /**
     * @param int $leaseTimeHours
     *
     * @return self
     */
    public function setLeaseTimeHours(int $leaseTimeHours): self
    {
        $this->initialized['leaseTimeHours'] = true;
        $this->leaseTimeHours = $leaseTimeHours;
        return $this;
    }
    /**
     * @return int
     */
    public function getLeaseTimeMinutes(): int
    {
        return $this->leaseTimeMinutes;
    }
    /**
     * @param int $leaseTimeMinutes
     *
     * @return self
     */
    public function setLeaseTimeMinutes(int $leaseTimeMinutes): self
    {
        $this->initialized['leaseTimeMinutes'] = true;
        $this->leaseTimeMinutes = $leaseTimeMinutes;
        return $this;
    }
    /**
     * @return int
     */
    public function getLeaseExpiryTime(): int
    {
        return $this->leaseExpiryTime;
    }
    /**
     * @param int $leaseExpiryTime
     *
     * @return self
     */
    public function setLeaseExpiryTime(int $leaseExpiryTime): self
    {
        $this->initialized['leaseExpiryTime'] = true;
        $this->leaseExpiryTime = $leaseExpiryTime;
        return $this;
    }
}