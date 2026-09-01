<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationCreateAdminAAAServer
{
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * Specify the type(RADIUS/TACACS/AD/LDAP) of this Admin AAA Server, please be infomed that the type name [TACACS] is for TACACS+ (Terminal Access Controller Access-Control System Plus)
     *
     * @var string
     */
    public string $type;
    /**
     * @var AdministrationDefaultRoleMapping
     */
    public AdministrationDefaultRoleMapping $defaultRoleMapping;
    /**
     * @var AdministrationRadiusServer
     */
    public AdministrationRadiusServer $radiusServer;
    /**
     * @var AdministrationTacacsServer
     */
    public AdministrationTacacsServer $tacacsServer;
    /**
     * @var AdministrationActiveDirectoryServer
     */
    public AdministrationActiveDirectoryServer $activeDirectoryServer;
    /**
     * @var AdministrationLdapServer
     */
    public AdministrationLdapServer $ldapServer;
}