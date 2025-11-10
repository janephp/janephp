<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroup
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
     * User group Id
     *
     * @var string
     */
    protected $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    protected $tenantId;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * User group name
     *
     * @var string
     */
    protected $name;
    /**
     * User group description
     *
     * @var string
     */
    protected $description;
    /**
     * User group role
     *
     * @var string
     */
    protected $role;
    /**
     * @var string
     */
    protected $accountSecurityProfileId;
    /**
     * @var string
     */
    protected $accountSecurityProfileName;
    /**
     * Permission list
     *
     * @var list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    protected $permissions;
    /**
     * Resource group id list
     *
     * @var list<ScguserScgUserGroupResourceGroup>
     */
    protected $resourceGroups;
    /**
     * @var bool
     */
    protected $isFactoryDefault;
    /**
     * Users in this user group
     *
     * @var list<ScguserGetScgUser>
     */
    protected $users;
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
     * User group Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User group Id
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
     * Tenant Id
     *
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * Tenant Id
     *
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
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
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
     * User group name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User group name
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
     * User group description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * User group description
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
     * User group role
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * User group role
     *
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
     * @return string
     */
    public function getAccountSecurityProfileName(): string
    {
        return $this->accountSecurityProfileName;
    }
    /**
     * @param string $accountSecurityProfileName
     *
     * @return self
     */
    public function setAccountSecurityProfileName(string $accountSecurityProfileName): self
    {
        $this->initialized['accountSecurityProfileName'] = true;
        $this->accountSecurityProfileName = $accountSecurityProfileName;
        return $this;
    }
    /**
     * Permission list
     *
     * @return list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * Permission list
     *
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
     * Resource group id list
     *
     * @return list<ScguserScgUserGroupResourceGroup>
     */
    public function getResourceGroups(): array
    {
        return $this->resourceGroups;
    }
    /**
     * Resource group id list
     *
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
     * @return bool
     */
    public function getIsFactoryDefault(): bool
    {
        return $this->isFactoryDefault;
    }
    /**
     * @param bool $isFactoryDefault
     *
     * @return self
     */
    public function setIsFactoryDefault(bool $isFactoryDefault): self
    {
        $this->initialized['isFactoryDefault'] = true;
        $this->isFactoryDefault = $isFactoryDefault;
        return $this;
    }
    /**
     * Users in this user group
     *
     * @return list<ScguserGetScgUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * Users in this user group
     *
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
}