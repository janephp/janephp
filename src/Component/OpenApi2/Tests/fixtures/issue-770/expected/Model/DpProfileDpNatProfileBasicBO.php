<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpNatProfileBasicBO
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
     * profileName
     *
     * @var string
     */
    protected $profileName;
    /**
     * natPublicVlanId
     *
     * @var int
     */
    protected $natPublicVlanId;
    /**
     * profileId
     *
     * @var string
     */
    protected $profileId;
    /**
     * The applied DP keys
     *
     * @var string
     */
    protected $appliedDpKey;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * secondaryNatDefaultRouteGateway
     *
     * @var string
     */
    protected $secondaryNatDefaultRouteGateway;
    /**
     * primaryNatDefaultRouteGateway
     *
     * @var string
     */
    protected $primaryNatDefaultRouteGateway;
    /**
     * @var DpProfileDpNatProfilePublicSubnetIdBO
     */
    protected $natPublicSubnetId;
    /**
     * profileName
     *
     * @return string
     */
    public function getProfileName(): string
    {
        return $this->profileName;
    }
    /**
     * profileName
     *
     * @param string $profileName
     *
     * @return self
     */
    public function setProfileName(string $profileName): self
    {
        $this->initialized['profileName'] = true;
        $this->profileName = $profileName;
        return $this;
    }
    /**
     * natPublicVlanId
     *
     * @return int
     */
    public function getNatPublicVlanId(): int
    {
        return $this->natPublicVlanId;
    }
    /**
     * natPublicVlanId
     *
     * @param int $natPublicVlanId
     *
     * @return self
     */
    public function setNatPublicVlanId(int $natPublicVlanId): self
    {
        $this->initialized['natPublicVlanId'] = true;
        $this->natPublicVlanId = $natPublicVlanId;
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
     * The applied DP keys
     *
     * @return string
     */
    public function getAppliedDpKey(): string
    {
        return $this->appliedDpKey;
    }
    /**
     * The applied DP keys
     *
     * @param string $appliedDpKey
     *
     * @return self
     */
    public function setAppliedDpKey(string $appliedDpKey): self
    {
        $this->initialized['appliedDpKey'] = true;
        $this->appliedDpKey = $appliedDpKey;
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
     * secondaryNatDefaultRouteGateway
     *
     * @return string
     */
    public function getSecondaryNatDefaultRouteGateway(): string
    {
        return $this->secondaryNatDefaultRouteGateway;
    }
    /**
     * secondaryNatDefaultRouteGateway
     *
     * @param string $secondaryNatDefaultRouteGateway
     *
     * @return self
     */
    public function setSecondaryNatDefaultRouteGateway(string $secondaryNatDefaultRouteGateway): self
    {
        $this->initialized['secondaryNatDefaultRouteGateway'] = true;
        $this->secondaryNatDefaultRouteGateway = $secondaryNatDefaultRouteGateway;
        return $this;
    }
    /**
     * primaryNatDefaultRouteGateway
     *
     * @return string
     */
    public function getPrimaryNatDefaultRouteGateway(): string
    {
        return $this->primaryNatDefaultRouteGateway;
    }
    /**
     * primaryNatDefaultRouteGateway
     *
     * @param string $primaryNatDefaultRouteGateway
     *
     * @return self
     */
    public function setPrimaryNatDefaultRouteGateway(string $primaryNatDefaultRouteGateway): self
    {
        $this->initialized['primaryNatDefaultRouteGateway'] = true;
        $this->primaryNatDefaultRouteGateway = $primaryNatDefaultRouteGateway;
        return $this;
    }
    /**
     * @return DpProfileDpNatProfilePublicSubnetIdBO
     */
    public function getNatPublicSubnetId(): DpProfileDpNatProfilePublicSubnetIdBO
    {
        return $this->natPublicSubnetId;
    }
    /**
     * @param DpProfileDpNatProfilePublicSubnetIdBO $natPublicSubnetId
     *
     * @return self
     */
    public function setNatPublicSubnetId(DpProfileDpNatProfilePublicSubnetIdBO $natPublicSubnetId): self
    {
        $this->initialized['natPublicSubnetId'] = true;
        $this->natPublicSubnetId = $natPublicSubnetId;
        return $this;
    }
}