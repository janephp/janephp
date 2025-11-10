<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpProfileSettingBO
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
     * dpVersion
     *
     * @var string
     */
    protected $dpVersion;
    /**
     * dhcpProfileId
     *
     * @var string
     */
    protected $dhcpProfileId;
    /**
     * dhcpProfileName
     *
     * @var string
     */
    protected $dhcpProfileName;
    /**
     * dpName
     *
     * @var string
     */
    protected $dpName;
    /**
     * dpKey
     *
     * @var string
     */
    protected $dpKey;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * natProfileId
     *
     * @var string
     */
    protected $natProfileId;
    /**
     * natProfileName
     *
     * @var string
     */
    protected $natProfileName;
    /**
     * dpVersion
     *
     * @return string
     */
    public function getDpVersion(): string
    {
        return $this->dpVersion;
    }
    /**
     * dpVersion
     *
     * @param string $dpVersion
     *
     * @return self
     */
    public function setDpVersion(string $dpVersion): self
    {
        $this->initialized['dpVersion'] = true;
        $this->dpVersion = $dpVersion;
        return $this;
    }
    /**
     * dhcpProfileId
     *
     * @return string
     */
    public function getDhcpProfileId(): string
    {
        return $this->dhcpProfileId;
    }
    /**
     * dhcpProfileId
     *
     * @param string $dhcpProfileId
     *
     * @return self
     */
    public function setDhcpProfileId(string $dhcpProfileId): self
    {
        $this->initialized['dhcpProfileId'] = true;
        $this->dhcpProfileId = $dhcpProfileId;
        return $this;
    }
    /**
     * dhcpProfileName
     *
     * @return string
     */
    public function getDhcpProfileName(): string
    {
        return $this->dhcpProfileName;
    }
    /**
     * dhcpProfileName
     *
     * @param string $dhcpProfileName
     *
     * @return self
     */
    public function setDhcpProfileName(string $dhcpProfileName): self
    {
        $this->initialized['dhcpProfileName'] = true;
        $this->dhcpProfileName = $dhcpProfileName;
        return $this;
    }
    /**
     * dpName
     *
     * @return string
     */
    public function getDpName(): string
    {
        return $this->dpName;
    }
    /**
     * dpName
     *
     * @param string $dpName
     *
     * @return self
     */
    public function setDpName(string $dpName): self
    {
        $this->initialized['dpName'] = true;
        $this->dpName = $dpName;
        return $this;
    }
    /**
     * dpKey
     *
     * @return string
     */
    public function getDpKey(): string
    {
        return $this->dpKey;
    }
    /**
     * dpKey
     *
     * @param string $dpKey
     *
     * @return self
     */
    public function setDpKey(string $dpKey): self
    {
        $this->initialized['dpKey'] = true;
        $this->dpKey = $dpKey;
        return $this;
    }
    /**
     * description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * description
     *
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
     * natProfileId
     *
     * @return string
     */
    public function getNatProfileId(): string
    {
        return $this->natProfileId;
    }
    /**
     * natProfileId
     *
     * @param string $natProfileId
     *
     * @return self
     */
    public function setNatProfileId(string $natProfileId): self
    {
        $this->initialized['natProfileId'] = true;
        $this->natProfileId = $natProfileId;
        return $this;
    }
    /**
     * natProfileName
     *
     * @return string
     */
    public function getNatProfileName(): string
    {
        return $this->natProfileName;
    }
    /**
     * natProfileName
     *
     * @param string $natProfileName
     *
     * @return self
     */
    public function setNatProfileName(string $natProfileName): self
    {
        $this->initialized['natProfileName'] = true;
        $this->natProfileName = $natProfileName;
        return $this;
    }
}