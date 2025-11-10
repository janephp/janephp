<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationCreateAdminAAAServer
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * Specify the type(RADIUS/TACACS/AD/LDAP) of this Admin AAA Server, please be infomed that the type name [TACACS] is for TACACS+ (Terminal Access Controller Access-Control System Plus)
     *
     * @var string
     */
    protected $type;
    /**
     * @var AdministrationDefaultRoleMapping
     */
    protected $defaultRoleMapping;
    /**
     * @var AdministrationRadiusServer
     */
    protected $radiusServer;
    /**
     * @var AdministrationTacacsServer
     */
    protected $tacacsServer;
    /**
     * @var AdministrationActiveDirectoryServer
     */
    protected $activeDirectoryServer;
    /**
     * @var AdministrationLdapServer
     */
    protected $ldapServer;
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specify the type(RADIUS/TACACS/AD/LDAP) of this Admin AAA Server, please be infomed that the type name [TACACS] is for TACACS+ (Terminal Access Controller Access-Control System Plus)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Specify the type(RADIUS/TACACS/AD/LDAP) of this Admin AAA Server, please be infomed that the type name [TACACS] is for TACACS+ (Terminal Access Controller Access-Control System Plus)
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return AdministrationDefaultRoleMapping
     */
    public function getDefaultRoleMapping(): AdministrationDefaultRoleMapping
    {
        return $this->defaultRoleMapping;
    }
    /**
     * @param AdministrationDefaultRoleMapping $defaultRoleMapping
     *
     * @return self
     */
    public function setDefaultRoleMapping(AdministrationDefaultRoleMapping $defaultRoleMapping): self
    {
        $this->initialized['defaultRoleMapping'] = true;
        $this->defaultRoleMapping = $defaultRoleMapping;
        return $this;
    }
    /**
     * @return AdministrationRadiusServer
     */
    public function getRadiusServer(): AdministrationRadiusServer
    {
        return $this->radiusServer;
    }
    /**
     * @param AdministrationRadiusServer $radiusServer
     *
     * @return self
     */
    public function setRadiusServer(AdministrationRadiusServer $radiusServer): self
    {
        $this->initialized['radiusServer'] = true;
        $this->radiusServer = $radiusServer;
        return $this;
    }
    /**
     * @return AdministrationTacacsServer
     */
    public function getTacacsServer(): AdministrationTacacsServer
    {
        return $this->tacacsServer;
    }
    /**
     * @param AdministrationTacacsServer $tacacsServer
     *
     * @return self
     */
    public function setTacacsServer(AdministrationTacacsServer $tacacsServer): self
    {
        $this->initialized['tacacsServer'] = true;
        $this->tacacsServer = $tacacsServer;
        return $this;
    }
    /**
     * @return AdministrationActiveDirectoryServer
     */
    public function getActiveDirectoryServer(): AdministrationActiveDirectoryServer
    {
        return $this->activeDirectoryServer;
    }
    /**
     * @param AdministrationActiveDirectoryServer $activeDirectoryServer
     *
     * @return self
     */
    public function setActiveDirectoryServer(AdministrationActiveDirectoryServer $activeDirectoryServer): self
    {
        $this->initialized['activeDirectoryServer'] = true;
        $this->activeDirectoryServer = $activeDirectoryServer;
        return $this;
    }
    /**
     * @return AdministrationLdapServer
     */
    public function getLdapServer(): AdministrationLdapServer
    {
        return $this->ldapServer;
    }
    /**
     * @param AdministrationLdapServer $ldapServer
     *
     * @return self
     */
    public function setLdapServer(AdministrationLdapServer $ldapServer): self
    {
        $this->initialized['ldapServer'] = true;
        $this->ldapServer = $ldapServer;
        return $this;
    }
}