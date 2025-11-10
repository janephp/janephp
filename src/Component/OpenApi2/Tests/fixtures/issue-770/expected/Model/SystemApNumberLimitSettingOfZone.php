<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApNumberLimitSettingOfZone
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
     * Admin Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Admin Domain Name
     *
     * @var string
     */
    protected $domainName;
    /**
     * Zone Id
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Zone Name
     *
     * @var string
     */
    protected $zoneName;
    /**
     * Number of Limit
     *
     * @var int
     */
    protected $numberLimit;
    /**
     * Share mode
     *
     * @var bool
     */
    protected $shared;
    /**
     * Admin Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Admin Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Admin Domain Name
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * Admin Domain Name
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Zone Id
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone Id
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Zone Name
     *
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * Zone Name
     *
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName): self
    {
        $this->initialized['zoneName'] = true;
        $this->zoneName = $zoneName;
        return $this;
    }
    /**
     * Number of Limit
     *
     * @return int
     */
    public function getNumberLimit(): int
    {
        return $this->numberLimit;
    }
    /**
     * Number of Limit
     *
     * @param int $numberLimit
     *
     * @return self
     */
    public function setNumberLimit(int $numberLimit): self
    {
        $this->initialized['numberLimit'] = true;
        $this->numberLimit = $numberLimit;
        return $this;
    }
    /**
     * Share mode
     *
     * @return bool
     */
    public function getShared(): bool
    {
        return $this->shared;
    }
    /**
     * Share mode
     *
     * @param bool $shared
     *
     * @return self
     */
    public function setShared(bool $shared): self
    {
        $this->initialized['shared'] = true;
        $this->shared = $shared;
        return $this;
    }
}