<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateRestrictedApAccessProfile
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Blocked Port List
     *
     * @var list<ProfileBlockedPort>
     */
    protected $blockedPortList;
    /**
     * IP Address Whitelist
     *
     * @var list<string>
     */
    protected $ipAddressWhitelist;
    /**
     * Block well known ports
     *
     * @var bool
     */
    protected $blockWellKnownPort = false;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * Blocked Port List
     *
     * @return list<ProfileBlockedPort>
     */
    public function getBlockedPortList(): array
    {
        return $this->blockedPortList;
    }
    /**
     * Blocked Port List
     *
     * @param list<ProfileBlockedPort> $blockedPortList
     *
     * @return self
     */
    public function setBlockedPortList(array $blockedPortList): self
    {
        $this->initialized['blockedPortList'] = true;
        $this->blockedPortList = $blockedPortList;
        return $this;
    }
    /**
     * IP Address Whitelist
     *
     * @return list<string>
     */
    public function getIpAddressWhitelist(): array
    {
        return $this->ipAddressWhitelist;
    }
    /**
     * IP Address Whitelist
     *
     * @param list<string> $ipAddressWhitelist
     *
     * @return self
     */
    public function setIpAddressWhitelist(array $ipAddressWhitelist): self
    {
        $this->initialized['ipAddressWhitelist'] = true;
        $this->ipAddressWhitelist = $ipAddressWhitelist;
        return $this;
    }
    /**
     * Block well known ports
     *
     * @return bool
     */
    public function getBlockWellKnownPort(): bool
    {
        return $this->blockWellKnownPort;
    }
    /**
     * Block well known ports
     *
     * @param bool $blockWellKnownPort
     *
     * @return self
     */
    public function setBlockWellKnownPort(bool $blockWellKnownPort): self
    {
        $this->initialized['blockWellKnownPort'] = true;
        $this->blockWellKnownPort = $blockWellKnownPort;
        return $this;
    }
}