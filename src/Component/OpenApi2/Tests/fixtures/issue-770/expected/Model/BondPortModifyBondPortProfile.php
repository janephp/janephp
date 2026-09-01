<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class BondPortModifyBondPortProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * VLAN Untag ID of the bond port profile
     *
     * @var int
     */
    public int $untagId;
    /**
     * VLAN Members of the bond port profile
     *
     * @var string
     */
    public string $vlanMembers;
}