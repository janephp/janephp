<?php

namespace Jane\Generated\DigitalOcean\Model;

class ControlPlaneFirewall extends \ArrayObject
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
     * Indicates whether the control plane firewall is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * An array of public addresses (IPv4 or CIDR) allowed to access the control plane.
     *
     * @var list<string>
     */
    protected $allowedAddresses;
    /**
     * Indicates whether the control plane firewall is enabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates whether the control plane firewall is enabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * An array of public addresses (IPv4 or CIDR) allowed to access the control plane.
     *
     * @return list<string>
     */
    public function getAllowedAddresses(): array
    {
        return $this->allowedAddresses;
    }
    /**
     * An array of public addresses (IPv4 or CIDR) allowed to access the control plane.
     *
     * @param list<string> $allowedAddresses
     *
     * @return self
     */
    public function setAllowedAddresses(array $allowedAddresses): self
    {
        $this->initialized['allowedAddresses'] = true;
        $this->allowedAddresses = $allowedAddresses;
        return $this;
    }
}