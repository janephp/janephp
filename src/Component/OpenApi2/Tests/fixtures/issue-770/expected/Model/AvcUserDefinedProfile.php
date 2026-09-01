<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcUserDefinedProfile
{
    /**
     * Identifier of the User Defined Application
     *
     * @var string
     */
    public string $id;
    /**
     * AppId for Application Policy's User defined rule type
     *
     * @var int
     */
    public int $appId;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the User Defined Application belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * Type of the User Defined Application
     *
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $destIp;
    /**
     * @var string
     */
    public string $netmask;
    /**
     * Destination Port of User Defined Application
     *
     * @var int
     */
    public int $destPort;
    /**
     * Protocol of User Defined Application
     *
     * @var string
     */
    public string $protocol;
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