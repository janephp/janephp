<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileReturnDPGroup
{
    /**
     * DP Group name
     *
     * @var string
     */
    public string $name;
    /**
     * The description of the DP Group
     *
     * @var mixed
     */
    public $description;
    /**
     * profile type
     *
     * @var mixed
     */
    public $profileType;
    /**
     * @var list<string>
     */
    public array $dpGroupList;
    /**
     * @var list<ProfileReturnDPGroupDpGroupListWithPriorityItem>
     */
    public array $dpGroupListWithPriority;
    /**
     * DP Group key
     *
     * @var string
     */
    public string $id;
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
    /**
     * True if all DPs are the same version
     *
     * @var bool
     */
    public bool $isDpVersionConsistent;
    /**
     * The lowest DP version in an DP Group
     *
     * @var string
     */
    public string $baseDpVersion;
}