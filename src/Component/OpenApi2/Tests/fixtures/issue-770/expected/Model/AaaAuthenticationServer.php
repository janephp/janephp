<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AaaAuthenticationServer
{
    /**
     * Identify the RADIUS server is belong to Accounting or Authentication
     *
     * @var string
     */
    public string $serviceType;
    /**
     * Identifier of the RADIUS server
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the RADIUS server belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Identifier of the partner domain which the RADIUS server belongs to
     *
     * @var string
     */
    public string $partnerDomainId;
    /**
     * Name of the RADIUS server
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the RADIUS server
     *
     * @var string
     */
    public string $description;
    /**
     * @var CommonRadiusServer
     */
    public CommonRadiusServer $primary;
    /**
     * @var CommonRadiusServer
     */
    public CommonRadiusServer $secondary;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * @var CommonRadiusServer
     */
    public CommonRadiusServer $standbyPrimary;
    /**
     * @var bool
     */
    public bool $standbyServerEnabled;
}