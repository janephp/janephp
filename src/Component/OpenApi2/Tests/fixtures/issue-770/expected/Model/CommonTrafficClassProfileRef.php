<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonTrafficClassProfileRef
{
    /**
     * Zone Id of Traffic Class Profile
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Identifier of the Traffic Class Profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var list<CommonTrafficClassRef>
     */
    public array $trafficClasses;
}