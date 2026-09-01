<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AvcCreateUserDefinedProfile
{
    /**
     * Identifier of the System (root) domain or partner managed domain to which the User Defined Application belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * Type of the User Defined Application
     *
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $destIp;
    /**
     * @var string
     */
    public string $netmask;
    /**
     * Destination Port of User Defined Application
     *
     * @var int
     */
    public int $destPort;
    /**
     * Protocol of User Defined Application
     *
     * @var string
     */
    public string $protocol;
}