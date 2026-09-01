<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneRogue
{
    /**
     * Report type
     *
     * @var string
     */
    public string $reportType;
    /**
     * Malicious type when reportType is Malicious
     *
     * @var list<string>
     */
    public array $maliciousTypes;
    /**
     * Protection enabled
     *
     * @var bool
     */
    public bool $protectionEnabled;
}