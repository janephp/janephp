<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingProfileDetail
{
    /**
     * DNS Spoofing Profile's id
     *
     * @var string
     */
    public string $id;
    /**
     * DNS Spoofing Profile's name
     *
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
    /**
     * The zone which DNS Spoofing Profile belong to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * The user who create the DNS Spoofing Profile
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * The time when the user modify the DNS Spoofing Profile
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * The time when the user create the DNS Spoofing Profile
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * The user who modify the DNS Spoofing Profile
     *
     * @var string
     */
    public string $modifierUsername;
}