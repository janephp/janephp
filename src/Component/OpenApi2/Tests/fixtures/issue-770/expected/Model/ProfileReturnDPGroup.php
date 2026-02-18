<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileReturnDPGroup
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
     * DP Group name
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the DP Group
     *
     * @var mixed
     */
    protected $description;
    /**
     * profile type
     *
     * @var mixed
     */
    protected $profileType;
    /**
     * @var list<string>
     */
    protected $dpGroupList;
    /**
     * @var list<ProfileReturnDPGroupDpGroupListWithPriorityItem>
     */
    protected $dpGroupListWithPriority;
    /**
     * DP Group key
     *
     * @var string
     */
    protected $id;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * True if all DPs are the same version
     *
     * @var bool
     */
    protected $isDpVersionConsistent;
    /**
     * The lowest DP version in an DP Group
     *
     * @var string
     */
    protected $baseDpVersion;
    /**
     * DP Group name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * DP Group name
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
     * The description of the DP Group
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * The description of the DP Group
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * profile type
     *
     * @return mixed
     */
    public function getProfileType()
    {
        return $this->profileType;
    }
    /**
     * profile type
     *
     * @param mixed $profileType
     *
     * @return self
     */
    public function setProfileType($profileType): self
    {
        $this->initialized['profileType'] = true;
        $this->profileType = $profileType;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDpGroupList(): array
    {
        return $this->dpGroupList;
    }
    /**
     * @param list<string> $dpGroupList
     *
     * @return self
     */
    public function setDpGroupList(array $dpGroupList): self
    {
        $this->initialized['dpGroupList'] = true;
        $this->dpGroupList = $dpGroupList;
        return $this;
    }
    /**
     * @return list<ProfileReturnDPGroupDpGroupListWithPriorityItem>
     */
    public function getDpGroupListWithPriority(): array
    {
        return $this->dpGroupListWithPriority;
    }
    /**
     * @param list<ProfileReturnDPGroupDpGroupListWithPriorityItem> $dpGroupListWithPriority
     *
     * @return self
     */
    public function setDpGroupListWithPriority(array $dpGroupListWithPriority): self
    {
        $this->initialized['dpGroupListWithPriority'] = true;
        $this->dpGroupListWithPriority = $dpGroupListWithPriority;
        return $this;
    }
    /**
     * DP Group key
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * DP Group key
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
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
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
     * True if all DPs are the same version
     *
     * @return bool
     */
    public function getIsDpVersionConsistent(): bool
    {
        return $this->isDpVersionConsistent;
    }
    /**
     * True if all DPs are the same version
     *
     * @param bool $isDpVersionConsistent
     *
     * @return self
     */
    public function setIsDpVersionConsistent(bool $isDpVersionConsistent): self
    {
        $this->initialized['isDpVersionConsistent'] = true;
        $this->isDpVersionConsistent = $isDpVersionConsistent;
        return $this;
    }
    /**
     * The lowest DP version in an DP Group
     *
     * @return string
     */
    public function getBaseDpVersion(): string
    {
        return $this->baseDpVersion;
    }
    /**
     * The lowest DP version in an DP Group
     *
     * @param string $baseDpVersion
     *
     * @return self
     */
    public function setBaseDpVersion(string $baseDpVersion): self
    {
        $this->initialized['baseDpVersion'] = true;
        $this->baseDpVersion = $baseDpVersion;
        return $this;
    }
}