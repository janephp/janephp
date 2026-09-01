<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderAuthentication
{
    /**
     * Authentication id
     *
     * @var string
     */
    public string $id;
    /**
     * Authentication name
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $realm;
    /**
     * Authentication service type
     *
     * @var string
     */
    public string $serviceType;
    /**
     * Dynamic vlan ID
     *
     * @var int
     */
    public int $vlanId;
}