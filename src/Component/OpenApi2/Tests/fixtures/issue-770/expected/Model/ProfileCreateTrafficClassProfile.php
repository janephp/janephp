<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateTrafficClassProfile
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
     * @var list<CommonTrafficClassRef>
     */
    public array $trafficClasses;
}