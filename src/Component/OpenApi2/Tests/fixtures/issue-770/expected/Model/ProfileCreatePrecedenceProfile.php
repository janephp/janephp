<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreatePrecedenceProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
    /**
     * vlan precedence
     *
     * @var list<ProfileVlanPrecedenceItem>
     */
    public array $vlanPrecedence;
    /**
     * rate limiting precedence
     *
     * @var list<ProfileRateLimitingPrecedenceItem>
     */
    public array $rateLimitingPrecedence;
}