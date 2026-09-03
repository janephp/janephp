<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileModifyRestrictedApAccessProfile
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
     * Blocked Port List
     *
     * @var list<ProfileBlockedPort>
     */
    public array $blockedPortList;
    /**
     * IP Address Whitelist
     *
     * @var list<string>
     */
    public array $ipAddressWhitelist;
    /**
     * Block well known ports
     *
     * @var bool
     */
    public bool $blockWellKnownPort = false;
}