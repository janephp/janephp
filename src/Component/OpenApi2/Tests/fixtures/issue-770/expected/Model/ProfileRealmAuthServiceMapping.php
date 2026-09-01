<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileRealmAuthServiceMapping
{
    /**
     * @var string
     */
    public string $realm;
    /**
     * Authentication service type, NA is NA-Request Rejected
     *
     * @var string
     */
    public string $serviceType;
    /**
     * Authentication service UUID
     *
     * @var string
     */
    public string $id;
    /**
     * Authentication service name
     *
     * @var string
     */
    public string $name;
    /**
     * Authorization method
     *
     * @var string
     */
    public string $authorizationMethod;
    /**
     * Dynamic VLAN ID
     *
     * @var int
     */
    public int $dynamicVlanId;
    /**
     * @var bool
     */
    public bool $hostedAaaEnabled;
}