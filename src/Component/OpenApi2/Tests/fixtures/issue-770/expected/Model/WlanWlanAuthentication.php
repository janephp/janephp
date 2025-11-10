<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAuthentication
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
     * Indicates whether authentication messages were sent through the controller or not
     *
     * @var bool
     */
    protected $throughController;
    /**
     * @var bool
     */
    protected $realmBasedAuth;
    /**
     * Identifier of the authentication service or profile. At least one ID or name or authenticationOption is required in the request.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the authentication service or profile. At least one ID or name or authenticationOption is required in the request. Or could input the 'Always Accept' or 'Local DB'.
     *
     * @var string
     */
    protected $name;
    /**
     * Option of the authentication service or profile, At least one ID or name or authenticationOption is required in the request. This only applies to hotspot and guest WLANs.
     *
     * @var string
     */
    protected $authenticationOption;
    /**
     * RFC5580 location delivery support
     *
     * @var bool
     */
    protected $locationDeliveryEnabled;
    /**
     * Identifier of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service.
     *
     * @var string
     */
    protected $backupAuthenticationId;
    /**
     * Name of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. Or could input the 'Always Accept'.
     *
     * @var string
     */
    protected $backupAuthenticationName;
    /**
     * Option of the backup authentication service or profile, At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. This only applies to hotspot WLANs.
     *
     * @var string
     */
    protected $backupAuthenticationOption;
    /**
     * Indicates whether authentication messages were sent through the controller or not
     *
     * @return bool
     */
    public function getThroughController(): bool
    {
        return $this->throughController;
    }
    /**
     * Indicates whether authentication messages were sent through the controller or not
     *
     * @param bool $throughController
     *
     * @return self
     */
    public function setThroughController(bool $throughController): self
    {
        $this->initialized['throughController'] = true;
        $this->throughController = $throughController;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRealmBasedAuth(): bool
    {
        return $this->realmBasedAuth;
    }
    /**
     * @param bool $realmBasedAuth
     *
     * @return self
     */
    public function setRealmBasedAuth(bool $realmBasedAuth): self
    {
        $this->initialized['realmBasedAuth'] = true;
        $this->realmBasedAuth = $realmBasedAuth;
        return $this;
    }
    /**
     * Identifier of the authentication service or profile. At least one ID or name or authenticationOption is required in the request.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the authentication service or profile. At least one ID or name or authenticationOption is required in the request.
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
     * Name of the authentication service or profile. At least one ID or name or authenticationOption is required in the request. Or could input the 'Always Accept' or 'Local DB'.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the authentication service or profile. At least one ID or name or authenticationOption is required in the request. Or could input the 'Always Accept' or 'Local DB'.
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
     * Option of the authentication service or profile, At least one ID or name or authenticationOption is required in the request. This only applies to hotspot and guest WLANs.
     *
     * @return string
     */
    public function getAuthenticationOption(): string
    {
        return $this->authenticationOption;
    }
    /**
     * Option of the authentication service or profile, At least one ID or name or authenticationOption is required in the request. This only applies to hotspot and guest WLANs.
     *
     * @param string $authenticationOption
     *
     * @return self
     */
    public function setAuthenticationOption(string $authenticationOption): self
    {
        $this->initialized['authenticationOption'] = true;
        $this->authenticationOption = $authenticationOption;
        return $this;
    }
    /**
     * RFC5580 location delivery support
     *
     * @return bool
     */
    public function getLocationDeliveryEnabled(): bool
    {
        return $this->locationDeliveryEnabled;
    }
    /**
     * RFC5580 location delivery support
     *
     * @param bool $locationDeliveryEnabled
     *
     * @return self
     */
    public function setLocationDeliveryEnabled(bool $locationDeliveryEnabled): self
    {
        $this->initialized['locationDeliveryEnabled'] = true;
        $this->locationDeliveryEnabled = $locationDeliveryEnabled;
        return $this;
    }
    /**
     * Identifier of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service.
     *
     * @return string
     */
    public function getBackupAuthenticationId(): string
    {
        return $this->backupAuthenticationId;
    }
    /**
     * Identifier of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service.
     *
     * @param string $backupAuthenticationId
     *
     * @return self
     */
    public function setBackupAuthenticationId(string $backupAuthenticationId): self
    {
        $this->initialized['backupAuthenticationId'] = true;
        $this->backupAuthenticationId = $backupAuthenticationId;
        return $this;
    }
    /**
     * Name of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. Or could input the 'Always Accept'.
     *
     * @return string
     */
    public function getBackupAuthenticationName(): string
    {
        return $this->backupAuthenticationName;
    }
    /**
     * Name of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. Or could input the 'Always Accept'.
     *
     * @param string $backupAuthenticationName
     *
     * @return self
     */
    public function setBackupAuthenticationName(string $backupAuthenticationName): self
    {
        $this->initialized['backupAuthenticationName'] = true;
        $this->backupAuthenticationName = $backupAuthenticationName;
        return $this;
    }
    /**
     * Option of the backup authentication service or profile, At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. This only applies to hotspot WLANs.
     *
     * @return string
     */
    public function getBackupAuthenticationOption(): string
    {
        return $this->backupAuthenticationOption;
    }
    /**
     * Option of the backup authentication service or profile, At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. This only applies to hotspot WLANs.
     *
     * @param string $backupAuthenticationOption
     *
     * @return self
     */
    public function setBackupAuthenticationOption(string $backupAuthenticationOption): self
    {
        $this->initialized['backupAuthenticationOption'] = true;
        $this->backupAuthenticationOption = $backupAuthenticationOption;
        return $this;
    }
}