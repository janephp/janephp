<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaModifyAuthenticationServer
{
    /**
     * @var string
     */
    public string $name;
    /**
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
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
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