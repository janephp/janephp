<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonDhcpSiteConfigListRefSiteApsItem
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
    protected $apMac;
    /**
     * @var string
     */
    protected $apName;
    /**
     * @var string
     */
    protected $apStatus;
    /**
     * @var bool
     */
    protected $apServerEnabled;
    /**
     * @var bool
     */
    protected $apServerPrimary;
    /**
     * @var string
     */
    protected $apServerIp;
    /**
     * @var string
     */
    protected $apGatewayIp;
    /**
     * @var string
     */
    protected $apServerType;
    /**
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
     * @param string $apName
     *
     * @return self
     */
    public function setApName(string $apName): self
    {
        $this->initialized['apName'] = true;
        $this->apName = $apName;
        return $this;
    }
    /**
     * @return string
     */
    public function getApStatus(): string
    {
        return $this->apStatus;
    }
    /**
     * @param string $apStatus
     *
     * @return self
     */
    public function setApStatus(string $apStatus): self
    {
        $this->initialized['apStatus'] = true;
        $this->apStatus = $apStatus;
        return $this;
    }
    /**
     * @return bool
     */
    public function getApServerEnabled(): bool
    {
        return $this->apServerEnabled;
    }
    /**
     * @param bool $apServerEnabled
     *
     * @return self
     */
    public function setApServerEnabled(bool $apServerEnabled): self
    {
        $this->initialized['apServerEnabled'] = true;
        $this->apServerEnabled = $apServerEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getApServerPrimary(): bool
    {
        return $this->apServerPrimary;
    }
    /**
     * @param bool $apServerPrimary
     *
     * @return self
     */
    public function setApServerPrimary(bool $apServerPrimary): self
    {
        $this->initialized['apServerPrimary'] = true;
        $this->apServerPrimary = $apServerPrimary;
        return $this;
    }
    /**
     * @return string
     */
    public function getApServerIp(): string
    {
        return $this->apServerIp;
    }
    /**
     * @param string $apServerIp
     *
     * @return self
     */
    public function setApServerIp(string $apServerIp): self
    {
        $this->initialized['apServerIp'] = true;
        $this->apServerIp = $apServerIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getApGatewayIp(): string
    {
        return $this->apGatewayIp;
    }
    /**
     * @param string $apGatewayIp
     *
     * @return self
     */
    public function setApGatewayIp(string $apGatewayIp): self
    {
        $this->initialized['apGatewayIp'] = true;
        $this->apGatewayIp = $apGatewayIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getApServerType(): string
    {
        return $this->apServerType;
    }
    /**
     * @param string $apServerType
     *
     * @return self
     */
    public function setApServerType(string $apServerType): self
    {
        $this->initialized['apServerType'] = true;
        $this->apServerType = $apServerType;
        return $this;
    }
}