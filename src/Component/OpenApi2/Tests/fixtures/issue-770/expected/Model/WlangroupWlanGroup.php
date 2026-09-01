<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlangroupWlanGroup
{
    /**
     * Identifier of the WLAN group
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone to which the WLAN group belongs
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Members of the WLAN group
     *
     * @var list<WlangroupWlanMember>
     */
    public array $members;
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