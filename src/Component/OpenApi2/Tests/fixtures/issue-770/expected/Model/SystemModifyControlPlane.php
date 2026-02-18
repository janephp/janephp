<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyControlPlane
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
     * @var SystemIpv4ControlInterface
     */
    protected $ipv4ControlInterface;
    /**
     * @var SystemIpv4ClusterInterface
     */
    protected $ipv4ClusterInterface;
    /**
     * @var SystemIpv4ManagementInterface
     */
    protected $ipv4ManagementInterface;
    /**
     * @var SystemIpv6ControlInterface
     */
    protected $ipv6ControlInterface;
    /**
     * @var SystemIpv6ManagementInterface
     */
    protected $ipv6ManagementInterface;
    /**
     * Enable Access & Core Separation
     *
     * @var bool
     */
    protected $enableAccessAndCoreSeparation;
    /**
     * @var SystemIpv4AccessAndCoreSeparation
     */
    protected $ipv4AccessAndCoreSeparation;
    /**
     * @var SystemIpv6AccessAndCoreSeparation
     */
    protected $ipv6AccessAndCoreSeparation;
    /**
     * @return SystemIpv4ControlInterface
     */
    public function getIpv4ControlInterface(): SystemIpv4ControlInterface
    {
        return $this->ipv4ControlInterface;
    }
    /**
     * @param SystemIpv4ControlInterface $ipv4ControlInterface
     *
     * @return self
     */
    public function setIpv4ControlInterface(SystemIpv4ControlInterface $ipv4ControlInterface): self
    {
        $this->initialized['ipv4ControlInterface'] = true;
        $this->ipv4ControlInterface = $ipv4ControlInterface;
        return $this;
    }
    /**
     * @return SystemIpv4ClusterInterface
     */
    public function getIpv4ClusterInterface(): SystemIpv4ClusterInterface
    {
        return $this->ipv4ClusterInterface;
    }
    /**
     * @param SystemIpv4ClusterInterface $ipv4ClusterInterface
     *
     * @return self
     */
    public function setIpv4ClusterInterface(SystemIpv4ClusterInterface $ipv4ClusterInterface): self
    {
        $this->initialized['ipv4ClusterInterface'] = true;
        $this->ipv4ClusterInterface = $ipv4ClusterInterface;
        return $this;
    }
    /**
     * @return SystemIpv4ManagementInterface
     */
    public function getIpv4ManagementInterface(): SystemIpv4ManagementInterface
    {
        return $this->ipv4ManagementInterface;
    }
    /**
     * @param SystemIpv4ManagementInterface $ipv4ManagementInterface
     *
     * @return self
     */
    public function setIpv4ManagementInterface(SystemIpv4ManagementInterface $ipv4ManagementInterface): self
    {
        $this->initialized['ipv4ManagementInterface'] = true;
        $this->ipv4ManagementInterface = $ipv4ManagementInterface;
        return $this;
    }
    /**
     * @return SystemIpv6ControlInterface
     */
    public function getIpv6ControlInterface(): SystemIpv6ControlInterface
    {
        return $this->ipv6ControlInterface;
    }
    /**
     * @param SystemIpv6ControlInterface $ipv6ControlInterface
     *
     * @return self
     */
    public function setIpv6ControlInterface(SystemIpv6ControlInterface $ipv6ControlInterface): self
    {
        $this->initialized['ipv6ControlInterface'] = true;
        $this->ipv6ControlInterface = $ipv6ControlInterface;
        return $this;
    }
    /**
     * @return SystemIpv6ManagementInterface
     */
    public function getIpv6ManagementInterface(): SystemIpv6ManagementInterface
    {
        return $this->ipv6ManagementInterface;
    }
    /**
     * @param SystemIpv6ManagementInterface $ipv6ManagementInterface
     *
     * @return self
     */
    public function setIpv6ManagementInterface(SystemIpv6ManagementInterface $ipv6ManagementInterface): self
    {
        $this->initialized['ipv6ManagementInterface'] = true;
        $this->ipv6ManagementInterface = $ipv6ManagementInterface;
        return $this;
    }
    /**
     * Enable Access & Core Separation
     *
     * @return bool
     */
    public function getEnableAccessAndCoreSeparation(): bool
    {
        return $this->enableAccessAndCoreSeparation;
    }
    /**
     * Enable Access & Core Separation
     *
     * @param bool $enableAccessAndCoreSeparation
     *
     * @return self
     */
    public function setEnableAccessAndCoreSeparation(bool $enableAccessAndCoreSeparation): self
    {
        $this->initialized['enableAccessAndCoreSeparation'] = true;
        $this->enableAccessAndCoreSeparation = $enableAccessAndCoreSeparation;
        return $this;
    }
    /**
     * @return SystemIpv4AccessAndCoreSeparation
     */
    public function getIpv4AccessAndCoreSeparation(): SystemIpv4AccessAndCoreSeparation
    {
        return $this->ipv4AccessAndCoreSeparation;
    }
    /**
     * @param SystemIpv4AccessAndCoreSeparation $ipv4AccessAndCoreSeparation
     *
     * @return self
     */
    public function setIpv4AccessAndCoreSeparation(SystemIpv4AccessAndCoreSeparation $ipv4AccessAndCoreSeparation): self
    {
        $this->initialized['ipv4AccessAndCoreSeparation'] = true;
        $this->ipv4AccessAndCoreSeparation = $ipv4AccessAndCoreSeparation;
        return $this;
    }
    /**
     * @return SystemIpv6AccessAndCoreSeparation
     */
    public function getIpv6AccessAndCoreSeparation(): SystemIpv6AccessAndCoreSeparation
    {
        return $this->ipv6AccessAndCoreSeparation;
    }
    /**
     * @param SystemIpv6AccessAndCoreSeparation $ipv6AccessAndCoreSeparation
     *
     * @return self
     */
    public function setIpv6AccessAndCoreSeparation(SystemIpv6AccessAndCoreSeparation $ipv6AccessAndCoreSeparation): self
    {
        $this->initialized['ipv6AccessAndCoreSeparation'] = true;
        $this->ipv6AccessAndCoreSeparation = $ipv6AccessAndCoreSeparation;
        return $this;
    }
}