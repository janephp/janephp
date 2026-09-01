<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateRestrictedApAccessProfile
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