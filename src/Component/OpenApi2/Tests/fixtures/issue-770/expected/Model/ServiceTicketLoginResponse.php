<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

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