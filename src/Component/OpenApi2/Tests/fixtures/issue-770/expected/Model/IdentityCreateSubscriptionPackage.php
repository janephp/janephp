<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityCreateSubscriptionPackage
{
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
}