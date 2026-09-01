<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaTestAuthenticationServer
{
    /**
     * Radius server type.
     *
     * @var string
     */
    public string $serverType;
    /**
     * Authentication/Accounting service protocol. RADIUS for Radius, AD and LDAP. RADIUSAcct for RADIUS Accounting
     *
     * @var string
     */
    public string $aaaType;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $aaaServer;
    /**
     * User name
     *
     * @var string
     */
    public string $userName;
    /**
     * Password
     *
     * @var string
     */
    public string $password;
    /**
     * Authentication protocol
     *
     * @var string
     */
    public string $authProtocol = 'PAP';
}