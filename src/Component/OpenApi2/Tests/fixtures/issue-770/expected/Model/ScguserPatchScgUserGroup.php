<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserPatchScgUserGroup
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
    protected $id;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $role;
    /**
     * @var string
     */
    protected $accountSecurityProfileId;
    /**
     * @var list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    protected $permissions;
    /**
     * @var list<ScguserScgUserGroupResourceGroup>
     */
    protected $resourceGroups;
    /**
     * @var list<ScguserGetScgUser>
     */
    protected $users;
    /**
     * @var int
     */
    protected $createDateTime;
    /**
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * @var string
     */
    protected $creatorId;
    /**
     * @var string
     */
    protected $modifierId;
    /**
     * @var string
     */
    protected $creatorUsername;
    /**
     * @var string
     */
    protected $modifierUsername;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
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
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccountSecurityProfileId(): string
    {
        return $this->accountSecurityProfileId;
    }
    /**
     * @param string $accountSecurityProfileId
     *
     * @return self
     */
    public function setAccountSecurityProfileId(string $accountSecurityProfileId): self
    {
        $this->initialized['accountSecurityProfileId'] = true;
        $this->accountSecurityProfileId = $accountSecurityProfileId;
        return $this;
    }
    /**
     * @return list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * @param list<ScguserScgUserGroupPermissionWithoutDetailItems> $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * @return list<ScguserScgUserGroupResourceGroup>
     */
    public function getResourceGroups(): array
    {
        return $this->resourceGroups;
    }
    /**
     * @param list<ScguserScgUserGroupResourceGroup> $resourceGroups
     *
     * @return self
     */
    public function setResourceGroups(array $resourceGroups): self
    {
        $this->initialized['resourceGroups'] = true;
        $this->resourceGroups = $resourceGroups;
        return $this;
    }
    /**
     * @return list<ScguserGetScgUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * @param list<ScguserGetScgUser> $users
     *
     * @return self
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
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
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
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
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
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
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
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
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
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
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
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
}