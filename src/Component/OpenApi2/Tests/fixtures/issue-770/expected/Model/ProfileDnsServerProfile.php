<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileDnsServerProfile
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
     * Primary ip of DNS server service
     *
     * @var string
     */
    public string $primaryIp;
    /**
     * Secondary ip of DNS server service
     *
     * @var string
     */
    public string $secondaryIp;
    /**
     * Tertiary ip of DNS server service
     *
     * @var string
     */
    public string $tertiaryIp;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
    /**
     * Profile Id
     *
     * @var string
     */
    public string $id;
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