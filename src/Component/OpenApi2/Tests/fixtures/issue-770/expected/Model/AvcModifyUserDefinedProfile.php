<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcModifyUserDefinedProfile
{
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