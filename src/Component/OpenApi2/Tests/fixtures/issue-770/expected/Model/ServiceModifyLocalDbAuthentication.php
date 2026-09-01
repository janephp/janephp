<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceModifyLocalDbAuthentication
{
    /**
     * Identifier of the authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
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
    public string $friendlyName;
    /**
     * @var string
     */
    public string $description;
    /**
     * Authentication protocol.
     *
     * @var string
     */
    public string $protocol;
    /**
     * Authentication protocol.
     *
     * @var string
     */
    public string $type;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
}