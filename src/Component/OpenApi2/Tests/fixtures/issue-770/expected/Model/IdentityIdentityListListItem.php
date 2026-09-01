<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityIdentityListListItem
{
    /**
     * Identifier of the service
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $userTrafficProfile;
    /**
     * @var string
     */
    public string $firewallProfileId;
    /**
     * @var IdentityMaxDevices
     */
    public IdentityMaxDevices $maxDevices;
    /**
     * vlan id
     *
     * @var int
     */
    public int $vlanId;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $vlanPooling;
    /**
     * Time schedule policy
     *
     * @var string
     */
    public string $timeSchedulePolicy = 'ALLOW_ALL';
    /**
     * @var IdentityTimeScheduleList
     */
    public IdentityTimeScheduleList $timeScheduleList;
    /**
     * identifier of the domain
     *
     * @var string
     */
    public string $domainId;
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