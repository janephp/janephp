<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class BondPortCreateBondPortProfile
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
     * Type of the bond port profile
     *
     * @var string
     */
    public string $type = 'TrunkPort';
    /**
     * VLAN Untag ID of the bond port profile
     *
     * @var int
     */
    public int $untagId = 1;
    /**
     * VLAN Members of the bond port profile
     *
     * @var string
     */
    public string $vlanMembers;
}