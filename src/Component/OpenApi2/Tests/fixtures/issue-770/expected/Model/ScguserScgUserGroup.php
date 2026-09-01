<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroup
{
    /**
     * User group Id
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * User group name
     *
     * @var string
     */
    public string $name;
    /**
     * User group description
     *
     * @var string
     */
    public string $description;
    /**
     * User group role
     *
     * @var string
     */
    public string $role;
    /**
     * @var string
     */
    public string $accountSecurityProfileId;
    /**
     * @var string
     */
    public string $accountSecurityProfileName;
    /**
     * Permission list
     *
     * @var list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    public array $permissions;
    /**
     * Resource group id list
     *
     * @var list<ScguserScgUserGroupResourceGroup>
     */
    public array $resourceGroups;
    /**
     * @var bool
     */
    public bool $isFactoryDefault;
    /**
     * Users in this user group
     *
     * @var list<ScguserGetScgUser>
     */
    public array $users;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}