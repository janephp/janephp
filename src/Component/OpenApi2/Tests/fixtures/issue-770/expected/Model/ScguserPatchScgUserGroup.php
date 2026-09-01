<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ScguserPatchScgUserGroup
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $tenantId;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $role;
    /**
     * @var string
     */
    public string $accountSecurityProfileId;
    /**
     * @var list<ScguserScgUserGroupPermissionWithoutDetailItems>
     */
    public array $permissions;
    /**
     * @var list<ScguserScgUserGroupResourceGroup>
     */
    public array $resourceGroups;
    /**
     * @var list<ScguserGetScgUser>
     */
    public array $users;
    /**
     * @var int
     */
    public int $createDateTime;
    /**
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * @var string
     */
    public string $creatorId;
    /**
     * @var string
     */
    public string $modifierId;
    /**
     * @var string
     */
    public string $creatorUsername;
    /**
     * @var string
     */
    public string $modifierUsername;
}