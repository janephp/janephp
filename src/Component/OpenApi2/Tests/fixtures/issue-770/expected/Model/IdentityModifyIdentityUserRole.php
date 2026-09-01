<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityModifyIdentityUserRole
{
    /**
     * ID
     *
     * @var string
     */
    public string $id;
    /**
     * Domain Id
     *
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
}