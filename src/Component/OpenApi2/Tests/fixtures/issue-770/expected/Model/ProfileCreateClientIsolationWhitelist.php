<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateClientIsolationWhitelist
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
     * Client Isolation Whitelist array
     *
     * @var list<ProfileClientIsolationEntry>
     */
    public array $whitelist;
    /**
     * Client Isolation Auto Enable
     *
     * @var bool
     */
    public bool $clientIsolationAutoEnabled;
}