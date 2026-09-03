<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DnsSpoofingProfileDnsSpoofingProfile
{
    /**
     * @var string
     */
    public string $name;
    /**
     * DNS Spoofing Profile's description
     *
     * @var string
     */
    public string $description;
    /**
     * DNS Spoofing Profile's rules (At least one rule)
     *
     * @var list<DnsSpoofingProfileDnsSpoofingRule>
     */
    public array $rules;
}