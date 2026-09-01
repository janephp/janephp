<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlangroupModifyWlanGroupMember
{
    /**
     * Access VLAN
     *
     * @var int
     */
    public int $accessVlan;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $vlanPooling;
    /**
     * NAS-ID
     *
     * @var string
     */
    public string $nasId;
}