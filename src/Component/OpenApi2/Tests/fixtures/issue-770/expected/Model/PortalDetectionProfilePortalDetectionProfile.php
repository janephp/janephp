<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalDetectionProfilePortalDetectionProfile
{
    /**
     * Zone ID
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Identifier of the portal detection and suppression profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * The pattern profiles for portal detection and suppression
     *
     * @var list<PortalDetectionProfilePortalDetectionPattern>
     */
    public array $portalDetectionPatterns;
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
     * Creator name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier name
     *
     * @var string
     */
    public string $modifierUsername;
}