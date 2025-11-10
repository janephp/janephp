<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDpskInfoItem
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
     * Identifier of DPSK
     *
     * @var string
     */
    protected $id;
    /**
     * WLAN ID of DPSK
     *
     * @var string
     */
    protected $wlanId;
    /**
     * User Name of DPSK
     *
     * @var string
     */
    protected $userName;
    /**
     * Mac address of DPSK
     *
     * @var string
     */
    protected $macAddress;
    /**
     * Passphrase of DPSK
     *
     * @var string
     */
    protected $passphrase;
    /**
     * Identity User Role ID of DPSK
     *
     * @var string
     */
    protected $userRoleId;
    /**
     * VLAN ID of DPSK
     *
     * @var int
     */
    protected $vlanId;
    /**
     * Is a Group DPSK or not
     *
     * @var bool
     */
    protected $groupDpsk;
    /**
     * Creationd date/time of DPSK
     *
     * @var float
     */
    protected $creationDateTime;
    /**
     * Expiration date/time of DPSK
     *
     * @var string
     */
    protected $expirationDateTime;
    /**
     * Identifier of DPSK
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of DPSK
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
     * WLAN ID of DPSK
     *
     * @return string
     */
    public function getWlanId(): string
    {
        return $this->wlanId;
    }
    /**
     * WLAN ID of DPSK
     *
     * @param string $wlanId
     *
     * @return self
     */
    public function setWlanId(string $wlanId): self
    {
        $this->initialized['wlanId'] = true;
        $this->wlanId = $wlanId;
        return $this;
    }
    /**
     * User Name of DPSK
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name of DPSK
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * Mac address of DPSK
     *
     * @return string
     */
    public function getMacAddress(): string
    {
        return $this->macAddress;
    }
    /**
     * Mac address of DPSK
     *
     * @param string $macAddress
     *
     * @return self
     */
    public function setMacAddress(string $macAddress): self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * Passphrase of DPSK
     *
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * Passphrase of DPSK
     *
     * @param string $passphrase
     *
     * @return self
     */
    public function setPassphrase(string $passphrase): self
    {
        $this->initialized['passphrase'] = true;
        $this->passphrase = $passphrase;
        return $this;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @return string
     */
    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @param string $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;
        return $this;
    }
    /**
     * VLAN ID of DPSK
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * VLAN ID of DPSK
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * Is a Group DPSK or not
     *
     * @return bool
     */
    public function getGroupDpsk(): bool
    {
        return $this->groupDpsk;
    }
    /**
     * Is a Group DPSK or not
     *
     * @param bool $groupDpsk
     *
     * @return self
     */
    public function setGroupDpsk(bool $groupDpsk): self
    {
        $this->initialized['groupDpsk'] = true;
        $this->groupDpsk = $groupDpsk;
        return $this;
    }
    /**
     * Creationd date/time of DPSK
     *
     * @return float
     */
    public function getCreationDateTime(): float
    {
        return $this->creationDateTime;
    }
    /**
     * Creationd date/time of DPSK
     *
     * @param float $creationDateTime
     *
     * @return self
     */
    public function setCreationDateTime(float $creationDateTime): self
    {
        $this->initialized['creationDateTime'] = true;
        $this->creationDateTime = $creationDateTime;
        return $this;
    }
    /**
     * Expiration date/time of DPSK
     *
     * @return string
     */
    public function getExpirationDateTime(): string
    {
        return $this->expirationDateTime;
    }
    /**
     * Expiration date/time of DPSK
     *
     * @param string $expirationDateTime
     *
     * @return self
     */
    public function setExpirationDateTime(string $expirationDateTime): self
    {
        $this->initialized['expirationDateTime'] = true;
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }
}