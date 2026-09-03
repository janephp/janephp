<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileBonjourFencingRuleMapping
{
    /**
     * Bonjour Service Type
     *
     * @var string
     */
    public string $serviceType;
    /**
     * @var string
     */
    public string $customServiceName;
    /**
     * The array of mdns string
     *
     * @var list<string>
     */
    public array $customStringList;
}