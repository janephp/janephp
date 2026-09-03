<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceL2ACL
{
    /**
     * identifier of the L2 Access Control
     *
     * @var string
     */
    public string $id;
    /**
     * identifier of the zone which the L2 Access Control belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * restriction of the L2 Access Control, ALLOW: Only allow all stations listed below, BLOCK:Only block all stations listed below
     *
     * @var string
     */
    public string $restriction;
    /**
     * @var list<string>
     */
    public array $ruleMacs;
}