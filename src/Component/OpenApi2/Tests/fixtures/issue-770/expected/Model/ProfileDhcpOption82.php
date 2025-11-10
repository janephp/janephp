<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileDhcpOption82
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
     * Enable DHCP Option 82
     *
     * @var bool
     */
    protected $dhcpOption82Enabled;
    /**
     * Enable subopt-1
     *
     * @var bool
     */
    protected $subopt1Enabled;
    /**
     * Subopt-1 format
     *
     * @var string
     */
    protected $subopt1Format;
    /**
     * Enable subopt-2
     *
     * @var bool
     */
    protected $subopt2Enabled;
    /**
     * Subopt-2 format
     *
     * @var string
     */
    protected $subopt2Format;
    /**
     * Subopt-150 with VLAN
     *
     * @var bool
     */
    protected $subopt150Enabled;
    /**
     * Enable subopt-151
     *
     * @var bool
     */
    protected $subopt151Enabled;
    /**
     * Subopt-151 format
     *
     * @var string
     */
    protected $subopt151Format;
    /**
     * Subopt-151 Area Name value
     *
     * @var string
     */
    protected $subopt151AreaName;
    /**
     * Enable DHCP Option 82
     *
     * @return bool
     */
    public function getDhcpOption82Enabled(): bool
    {
        return $this->dhcpOption82Enabled;
    }
    /**
     * Enable DHCP Option 82
     *
     * @param bool $dhcpOption82Enabled
     *
     * @return self
     */
    public function setDhcpOption82Enabled(bool $dhcpOption82Enabled): self
    {
        $this->initialized['dhcpOption82Enabled'] = true;
        $this->dhcpOption82Enabled = $dhcpOption82Enabled;
        return $this;
    }
    /**
     * Enable subopt-1
     *
     * @return bool
     */
    public function getSubopt1Enabled(): bool
    {
        return $this->subopt1Enabled;
    }
    /**
     * Enable subopt-1
     *
     * @param bool $subopt1Enabled
     *
     * @return self
     */
    public function setSubopt1Enabled(bool $subopt1Enabled): self
    {
        $this->initialized['subopt1Enabled'] = true;
        $this->subopt1Enabled = $subopt1Enabled;
        return $this;
    }
    /**
     * Subopt-1 format
     *
     * @return string
     */
    public function getSubopt1Format(): string
    {
        return $this->subopt1Format;
    }
    /**
     * Subopt-1 format
     *
     * @param string $subopt1Format
     *
     * @return self
     */
    public function setSubopt1Format(string $subopt1Format): self
    {
        $this->initialized['subopt1Format'] = true;
        $this->subopt1Format = $subopt1Format;
        return $this;
    }
    /**
     * Enable subopt-2
     *
     * @return bool
     */
    public function getSubopt2Enabled(): bool
    {
        return $this->subopt2Enabled;
    }
    /**
     * Enable subopt-2
     *
     * @param bool $subopt2Enabled
     *
     * @return self
     */
    public function setSubopt2Enabled(bool $subopt2Enabled): self
    {
        $this->initialized['subopt2Enabled'] = true;
        $this->subopt2Enabled = $subopt2Enabled;
        return $this;
    }
    /**
     * Subopt-2 format
     *
     * @return string
     */
    public function getSubopt2Format(): string
    {
        return $this->subopt2Format;
    }
    /**
     * Subopt-2 format
     *
     * @param string $subopt2Format
     *
     * @return self
     */
    public function setSubopt2Format(string $subopt2Format): self
    {
        $this->initialized['subopt2Format'] = true;
        $this->subopt2Format = $subopt2Format;
        return $this;
    }
    /**
     * Subopt-150 with VLAN
     *
     * @return bool
     */
    public function getSubopt150Enabled(): bool
    {
        return $this->subopt150Enabled;
    }
    /**
     * Subopt-150 with VLAN
     *
     * @param bool $subopt150Enabled
     *
     * @return self
     */
    public function setSubopt150Enabled(bool $subopt150Enabled): self
    {
        $this->initialized['subopt150Enabled'] = true;
        $this->subopt150Enabled = $subopt150Enabled;
        return $this;
    }
    /**
     * Enable subopt-151
     *
     * @return bool
     */
    public function getSubopt151Enabled(): bool
    {
        return $this->subopt151Enabled;
    }
    /**
     * Enable subopt-151
     *
     * @param bool $subopt151Enabled
     *
     * @return self
     */
    public function setSubopt151Enabled(bool $subopt151Enabled): self
    {
        $this->initialized['subopt151Enabled'] = true;
        $this->subopt151Enabled = $subopt151Enabled;
        return $this;
    }
    /**
     * Subopt-151 format
     *
     * @return string
     */
    public function getSubopt151Format(): string
    {
        return $this->subopt151Format;
    }
    /**
     * Subopt-151 format
     *
     * @param string $subopt151Format
     *
     * @return self
     */
    public function setSubopt151Format(string $subopt151Format): self
    {
        $this->initialized['subopt151Format'] = true;
        $this->subopt151Format = $subopt151Format;
        return $this;
    }
    /**
     * Subopt-151 Area Name value
     *
     * @return string
     */
    public function getSubopt151AreaName(): string
    {
        return $this->subopt151AreaName;
    }
    /**
     * Subopt-151 Area Name value
     *
     * @param string $subopt151AreaName
     *
     * @return self
     */
    public function setSubopt151AreaName(string $subopt151AreaName): self
    {
        $this->initialized['subopt151AreaName'] = true;
        $this->subopt151AreaName = $subopt151AreaName;
        return $this;
    }
}