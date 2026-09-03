<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationLicenseServer
{
    /**
     * use cloud license server
     *
     * @var bool
     */
    public bool $useCloud;
    /**
     * local license server IP address
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * local license server port
     *
     * @var int
     */
    public int $port;
}