<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanWlanVlan
{
    /**
     * Access VLAN ID
     *
     * @var int
     */
    public int $accessVlan = 1;
    /**
     * Indicates whether the AAA VLAN settings can be overriden or not
     *
     * @var bool
     */
    public bool $aaaVlanOverride;
    /**
     * Indicates whether Q-in-Q is allowed at the core network or not
     *
     * @var bool
     */
    public bool $coreQinQEnabled;
    /**
     * Core SVLAN ID. This only applies when core Q-in-Q is enabled
     *
     * @var int
     */
    public int $coreSVlan;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $vlanPooling;
}