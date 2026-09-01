<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceTicketLoginResponse
{
    /**
     * @var string
     */
    public string $controllerVersion;
    /**
     * Logon authentication successful, the server generates a service ticket
     *
     * @var string
     */
    public string $serviceTicket;
}