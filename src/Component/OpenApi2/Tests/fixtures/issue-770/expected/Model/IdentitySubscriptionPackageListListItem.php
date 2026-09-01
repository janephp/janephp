<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class IdentitySubscriptionPackageListListItem
{
    /**
     * the identifier of the subscription package
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
}