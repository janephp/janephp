<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneQueryCriteriaOptions
{
    /**
     * @var string
     */
    public string $zoneIpmode;
    /**
     * Include the resources of parent domain as well while querying.
     *
     * @var bool
     */
    public bool $includeSharedResources;
}