<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpNatProfilePoolBO
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
     * publicPrefix
     *
     * @var int
     */
    protected $publicPrefix;
    /**
     * profileId
     *
     * @var string
     */
    protected $profileId;
    /**
     * poolId
     *
     * @var string
     */
    protected $poolId;
    /**
     * natPortRange
     *
     * @var string
     */
    protected $natPortRange;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $vlanType;
    /**
     * publicVlan
     *
     * @var int
     */
    protected $publicVlan;
    /**
     * privateVlanRange
     *
     * @var list<string>
     */
    protected $privateVlanRange;
    /**
     * privateQinqVlanRange
     *
     * @var list<DpProfileDpNatProfilePrivateQinqVlanRangeBO>
     */
    protected $privateQinqVlanRange;
    /**
     * publicAddressRange
     *
     * @var list<string>
     */
    protected $publicAddressRange;
    /**
     * poolName
     *
     * @var string
     */
    protected $poolName;
    /**
     * publicPrefix
     *
     * @return int
     */
    public function getPublicPrefix(): int
    {
        return $this->publicPrefix;
    }
    /**
     * publicPrefix
     *
     * @param int $publicPrefix
     *
     * @return self
     */
    public function setPublicPrefix(int $publicPrefix): self
    {
        $this->initialized['publicPrefix'] = true;
        $this->publicPrefix = $publicPrefix;
        return $this;
    }
    /**
     * profileId
     *
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->profileId;
    }
    /**
     * profileId
     *
     * @param string $profileId
     *
     * @return self
     */
    public function setProfileId(string $profileId): self
    {
        $this->initialized['profileId'] = true;
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * poolId
     *
     * @return string
     */
    public function getPoolId(): string
    {
        return $this->poolId;
    }
    /**
     * poolId
     *
     * @param string $poolId
     *
     * @return self
     */
    public function setPoolId(string $poolId): self
    {
        $this->initialized['poolId'] = true;
        $this->poolId = $poolId;
        return $this;
    }
    /**
     * natPortRange
     *
     * @return string
     */
    public function getNatPortRange(): string
    {
        return $this->natPortRange;
    }
    /**
     * natPortRange
     *
     * @param string $natPortRange
     *
     * @return self
     */
    public function setNatPortRange(string $natPortRange): self
    {
        $this->initialized['natPortRange'] = true;
        $this->natPortRange = $natPortRange;
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
     * @return string
     */
    public function getVlanType(): string
    {
        return $this->vlanType;
    }
    /**
     * @param string $vlanType
     *
     * @return self
     */
    public function setVlanType(string $vlanType): self
    {
        $this->initialized['vlanType'] = true;
        $this->vlanType = $vlanType;
        return $this;
    }
    /**
     * publicVlan
     *
     * @return int
     */
    public function getPublicVlan(): int
    {
        return $this->publicVlan;
    }
    /**
     * publicVlan
     *
     * @param int $publicVlan
     *
     * @return self
     */
    public function setPublicVlan(int $publicVlan): self
    {
        $this->initialized['publicVlan'] = true;
        $this->publicVlan = $publicVlan;
        return $this;
    }
    /**
     * privateVlanRange
     *
     * @return list<string>
     */
    public function getPrivateVlanRange(): array
    {
        return $this->privateVlanRange;
    }
    /**
     * privateVlanRange
     *
     * @param list<string> $privateVlanRange
     *
     * @return self
     */
    public function setPrivateVlanRange(array $privateVlanRange): self
    {
        $this->initialized['privateVlanRange'] = true;
        $this->privateVlanRange = $privateVlanRange;
        return $this;
    }
    /**
     * privateQinqVlanRange
     *
     * @return list<DpProfileDpNatProfilePrivateQinqVlanRangeBO>
     */
    public function getPrivateQinqVlanRange(): array
    {
        return $this->privateQinqVlanRange;
    }
    /**
     * privateQinqVlanRange
     *
     * @param list<DpProfileDpNatProfilePrivateQinqVlanRangeBO> $privateQinqVlanRange
     *
     * @return self
     */
    public function setPrivateQinqVlanRange(array $privateQinqVlanRange): self
    {
        $this->initialized['privateQinqVlanRange'] = true;
        $this->privateQinqVlanRange = $privateQinqVlanRange;
        return $this;
    }
    /**
     * publicAddressRange
     *
     * @return list<string>
     */
    public function getPublicAddressRange(): array
    {
        return $this->publicAddressRange;
    }
    /**
     * publicAddressRange
     *
     * @param list<string> $publicAddressRange
     *
     * @return self
     */
    public function setPublicAddressRange(array $publicAddressRange): self
    {
        $this->initialized['publicAddressRange'] = true;
        $this->publicAddressRange = $publicAddressRange;
        return $this;
    }
    /**
     * poolName
     *
     * @return string
     */
    public function getPoolName(): string
    {
        return $this->poolName;
    }
    /**
     * poolName
     *
     * @param string $poolName
     *
     * @return self
     */
    public function setPoolName(string $poolName): self
    {
        $this->initialized['poolName'] = true;
        $this->poolName = $poolName;
        return $this;
    }
}