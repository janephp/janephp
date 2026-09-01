<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlangroupWlanMember
{
    /**
     * Identifier of the WLAN
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the WLAN
     *
     * @var string
     */
    public string $name;
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