<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcApplicationPolicyProfile
{
    /**
     * Identifier of the Application Policy Profile
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Application Policy Profile belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var list<AvcApplicationRule>
     */
    public array $applicationRules;
    /**
     * Send ARC logs from AP to external syslog server
     *
     * @var bool
     */
    public bool $avcLogEnable;
    /**
     * Send ARC logs from AP to SmartZone
     *
     * @var bool
     */
    public bool $avcEventEnable;
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