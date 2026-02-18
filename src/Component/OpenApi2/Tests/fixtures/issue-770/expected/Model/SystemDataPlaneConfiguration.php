<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemDataPlaneConfiguration
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
     * Interface mode
     *
     * @var string
     */
    protected $interfaceMode;
    /**
     * @var SystemPrimaryInterface
     */
    protected $primaryInterface;
    /**
     * @var SystemIpv6PrimaryInterface
     */
    protected $ipv6PrimaryInterface;
    /**
     * @var SystemIpv6SecondaryInterface
     */
    protected $ipv6SecondaryInterface;
    /**
     * @var SystemSecondaryInterface
     */
    protected $secondaryInterface;
    /**
     * Primary(Access) interface
     *
     * @var list<SystemStaticRoute>
     */
    protected $staticRoute;
    /**
     * @var bool
     */
    protected $keepConfig;
    /**
     * @var bool
     */
    protected $isDataCenter;
    /**
     * Interface mode
     *
     * @return string
     */
    public function getInterfaceMode(): string
    {
        return $this->interfaceMode;
    }
    /**
     * Interface mode
     *
     * @param string $interfaceMode
     *
     * @return self
     */
    public function setInterfaceMode(string $interfaceMode): self
    {
        $this->initialized['interfaceMode'] = true;
        $this->interfaceMode = $interfaceMode;
        return $this;
    }
    /**
     * @return SystemPrimaryInterface
     */
    public function getPrimaryInterface(): SystemPrimaryInterface
    {
        return $this->primaryInterface;
    }
    /**
     * @param SystemPrimaryInterface $primaryInterface
     *
     * @return self
     */
    public function setPrimaryInterface(SystemPrimaryInterface $primaryInterface): self
    {
        $this->initialized['primaryInterface'] = true;
        $this->primaryInterface = $primaryInterface;
        return $this;
    }
    /**
     * @return SystemIpv6PrimaryInterface
     */
    public function getIpv6PrimaryInterface(): SystemIpv6PrimaryInterface
    {
        return $this->ipv6PrimaryInterface;
    }
    /**
     * @param SystemIpv6PrimaryInterface $ipv6PrimaryInterface
     *
     * @return self
     */
    public function setIpv6PrimaryInterface(SystemIpv6PrimaryInterface $ipv6PrimaryInterface): self
    {
        $this->initialized['ipv6PrimaryInterface'] = true;
        $this->ipv6PrimaryInterface = $ipv6PrimaryInterface;
        return $this;
    }
    /**
     * @return SystemIpv6SecondaryInterface
     */
    public function getIpv6SecondaryInterface(): SystemIpv6SecondaryInterface
    {
        return $this->ipv6SecondaryInterface;
    }
    /**
     * @param SystemIpv6SecondaryInterface $ipv6SecondaryInterface
     *
     * @return self
     */
    public function setIpv6SecondaryInterface(SystemIpv6SecondaryInterface $ipv6SecondaryInterface): self
    {
        $this->initialized['ipv6SecondaryInterface'] = true;
        $this->ipv6SecondaryInterface = $ipv6SecondaryInterface;
        return $this;
    }
    /**
     * @return SystemSecondaryInterface
     */
    public function getSecondaryInterface(): SystemSecondaryInterface
    {
        return $this->secondaryInterface;
    }
    /**
     * @param SystemSecondaryInterface $secondaryInterface
     *
     * @return self
     */
    public function setSecondaryInterface(SystemSecondaryInterface $secondaryInterface): self
    {
        $this->initialized['secondaryInterface'] = true;
        $this->secondaryInterface = $secondaryInterface;
        return $this;
    }
    /**
     * Primary(Access) interface
     *
     * @return list<SystemStaticRoute>
     */
    public function getStaticRoute(): array
    {
        return $this->staticRoute;
    }
    /**
     * Primary(Access) interface
     *
     * @param list<SystemStaticRoute> $staticRoute
     *
     * @return self
     */
    public function setStaticRoute(array $staticRoute): self
    {
        $this->initialized['staticRoute'] = true;
        $this->staticRoute = $staticRoute;
        return $this;
    }
    /**
     * @return bool
     */
    public function getKeepConfig(): bool
    {
        return $this->keepConfig;
    }
    /**
     * @param bool $keepConfig
     *
     * @return self
     */
    public function setKeepConfig(bool $keepConfig): self
    {
        $this->initialized['keepConfig'] = true;
        $this->keepConfig = $keepConfig;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDataCenter(): bool
    {
        return $this->isDataCenter;
    }
    /**
     * @param bool $isDataCenter
     *
     * @return self
     */
    public function setIsDataCenter(bool $isDataCenter): self
    {
        $this->initialized['isDataCenter'] = true;
        $this->isDataCenter = $isDataCenter;
        return $this;
    }
}