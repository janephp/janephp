<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DomainDomainConfiguration
{
    /**
     * Identifier of the domain
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * domain type
     *
     * @var string
     */
    public string $domainType;
    /**
     * @var string
     */
    public string $description;
    /**
     * Created by
     *
     * @var string
     */
    public string $createdBy;
    /**
     * Created by
     *
     * @var string
     */
    public string $createDatetime;
    /**
     * # of Zones
     *
     * @var int
     */
    public int $zoneCount;
    /**
     * # of Subdomains
     *
     * @var int
     */
    public int $subDomainCount;
    /**
     * # of Subdomains (Deprecated from v9 and will be removed on v12)
     *
     * @var int
     */
    public int $administratorCount;
    /**
     * # of Subdomains
     *
     * @var int
     */
    public int $apCount;
    /**
     * Parent Domain Id
     *
     * @var string
     */
    public string $parentDomainId;
    /**
     * @var bool
     */
    public bool $zeroTouchStatus;
}