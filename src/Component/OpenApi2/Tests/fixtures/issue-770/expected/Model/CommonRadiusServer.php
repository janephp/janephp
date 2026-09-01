<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRadiusServer
{
    /**
     * @var string
     */
    public string $ip;
    /**
     * Server port
     *
     * @var int
     */
    public int $port;
    /**
     * Server shared secret
     *
     * @var string
     */
    public string $sharedSecret;
}