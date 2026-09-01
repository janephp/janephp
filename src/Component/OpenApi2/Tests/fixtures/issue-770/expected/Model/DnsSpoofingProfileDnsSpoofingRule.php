<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingRule
{
    /**
     * Rule's Domain Name
     *
     * @var string
     */
    public string $domainName;
    /**
     * Rule's Ip addresses
     *
     * @var list<string>
     */
    public array $ipList;
}