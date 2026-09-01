<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentitySubscriptionPackage
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
     * Expiration interval
     *
     * @var string
     */
    public string $expirationInterval;
    /**
     * Expiration value
     *
     * @var int
     */
    public int $expirationValue;
    /**
     * identifier of the domain
     *
     * @var string
     */
    public string $domainId;
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