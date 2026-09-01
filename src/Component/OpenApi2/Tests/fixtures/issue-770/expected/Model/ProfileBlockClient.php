<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBlockClient
{
    /**
     * @var string
     */
    public string $mac;
    /**
     * Zone Id of the Block Client for clone in System Domain
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $description;
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