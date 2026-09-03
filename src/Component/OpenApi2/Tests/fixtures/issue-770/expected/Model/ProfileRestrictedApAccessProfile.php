<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileRestrictedApAccessProfile
{
    /**
     * Restricted AP Access Profile id
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * Zone Id of The Restricted AP Access Profile for clone in System Domain
     *
     * @var string
     */
    public string $zoneId;
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
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Block well known ports
     *
     * @var bool
     */
    public bool $blockWellKnownPort;
}