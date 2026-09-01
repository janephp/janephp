<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DomainModifyDomain
{
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
     * Zero Touch enable/disable
     *
     * @var bool
     */
    public bool $zeroTouchStatus;
}