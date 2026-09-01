<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationLdapServer
{
    /**
     * @var string
     */
    public string $realm;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled = false;
    /**
     * @var string
     */
    public string $cnIdentity;
    /**
     * @var string
     */
    public string $ip;
    /**
     * Port number of LDAP Server object
     *
     * @var int
     */
    public int $port;
    /**
     * Base Domain Name of LDAP Server object
     *
     * @var string
     */
    public string $baseDomainName;
    /**
     * Admin Domain Name of LDAP Server object
     *
     * @var string
     */
    public string $adminDomainName;
    /**
     * Admin password of LDAP Server object
     *
     * @var string
     */
    public string $adminPassword;
    /**
     * Key attribute of LDAP Server object
     *
     * @var string
     */
    public string $keyAttribute;
    /**
     * Search filter of LDAP Server object
     *
     * @var string
     */
    public string $searchFilter;
}