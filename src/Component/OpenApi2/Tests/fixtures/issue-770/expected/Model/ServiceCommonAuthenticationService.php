<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceCommonAuthenticationService
{
    /**
     * Identifier of the authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Domain Id
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
    public string $friendlyName;
    /**
     * @var string
     */
    public string $description;
    /**
     * Authentication protocol.
     *
     * @var string
     */
    public string $protocol;
    /**
     * Authentication protocol same as protocol.
     *
     * @var string
     */
    public string $type;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<ServiceGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * @var bool
     */
    public bool $tlsEnabled;
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