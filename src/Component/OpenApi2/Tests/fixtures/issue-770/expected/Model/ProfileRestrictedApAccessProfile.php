<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileRestrictedApAccessProfile
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
     * Restricted AP Access Profile id
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * Zone Id of The Restricted AP Access Profile for clone in System Domain
     *
     * @var string
     */
    protected $zoneId;
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
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Block well known ports
     *
     * @var bool
     */
    protected $blockWellKnownPort;
    /**
     * Restricted AP Access Profile id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Restricted AP Access Profile id
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
     * Zone Id of The Restricted AP Access Profile for clone in System Domain
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone Id of The Restricted AP Access Profile for clone in System Domain
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
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
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
    /**
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
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