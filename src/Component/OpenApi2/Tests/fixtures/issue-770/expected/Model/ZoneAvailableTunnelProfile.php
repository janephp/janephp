<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneAvailableTunnelProfile
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
     * Tunnel Profile ID
     *
     * @var string
     */
    protected $id;
    /**
     * Tunnel Profile Name
     *
     * @var string
     */
    protected $name;
    /**
     * Tunnel Profile Type ("RuckusGRE", "SoftGRE",or "Ipsec")
     *
     * @var string
     */
    protected $tunnelType;
    /**
     * @var string
     */
    protected $ipMode;
    /**
     * Enable AAA affinity (Soft GRE only)
     *
     * @var bool
     */
    protected $aaaAffinityEnabled;
    /**
     * Tunnel Profile ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Tunnel Profile ID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Tunnel Profile Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Tunnel Profile Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Tunnel Profile Type ("RuckusGRE", "SoftGRE",or "Ipsec")
     *
     * @return string
     */
    public function getTunnelType(): string
    {
        return $this->tunnelType;
    }
    /**
     * Tunnel Profile Type ("RuckusGRE", "SoftGRE",or "Ipsec")
     *
     * @param string $tunnelType
     *
     * @return self
     */
    public function setTunnelType(string $tunnelType): self
    {
        $this->initialized['tunnelType'] = true;
        $this->tunnelType = $tunnelType;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpMode(): string
    {
        return $this->ipMode;
    }
    /**
     * @param string $ipMode
     *
     * @return self
     */
    public function setIpMode(string $ipMode): self
    {
        $this->initialized['ipMode'] = true;
        $this->ipMode = $ipMode;
        return $this;
    }
    /**
     * Enable AAA affinity (Soft GRE only)
     *
     * @return bool
     */
    public function getAaaAffinityEnabled(): bool
    {
        return $this->aaaAffinityEnabled;
    }
    /**
     * Enable AAA affinity (Soft GRE only)
     *
     * @param bool $aaaAffinityEnabled
     *
     * @return self
     */
    public function setAaaAffinityEnabled(bool $aaaAffinityEnabled): self
    {
        $this->initialized['aaaAffinityEnabled'] = true;
        $this->aaaAffinityEnabled = $aaaAffinityEnabled;
        return $this;
    }
}