<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DomainCreateDomain
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
    public string $domainType = 'REGULAR';
    /**
     * parent domain id
     *
     * @var string
     */
    public string $parentDomainId;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var bool
     */
    public bool $zeroTouchStatus = true;
}