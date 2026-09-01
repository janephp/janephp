<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationTacacsServer
{
    /**
     * @var string
     */
    public string $service;
    /**
     * @var string
     */
    public string $ip;
    /**
     * Port number of TACACS+ Server object
     *
     * @var int
     */
    public int $port;
    /**
     * Shared secret of TACACS+ Server object
     *
     * @var string
     */
    public string $sharedSecret;
}