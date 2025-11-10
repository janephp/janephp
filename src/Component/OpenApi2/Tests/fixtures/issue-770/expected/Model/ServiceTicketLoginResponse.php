<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceTicketLoginResponse
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $controllerVersion;
    /**
     * Logon authentication successful, the server generates a service ticket
     *
     * @var string
     */
    protected $serviceTicket;
    /**
     * @return string
     */
    public function getControllerVersion(): string
    {
        return $this->controllerVersion;
    }
    /**
     * @param string $controllerVersion
     *
     * @return self
     */
    public function setControllerVersion(string $controllerVersion): self
    {
        $this->initialized['controllerVersion'] = true;
        $this->controllerVersion = $controllerVersion;
        return $this;
    }
    /**
     * Logon authentication successful, the server generates a service ticket
     *
     * @return string
     */
    public function getServiceTicket(): string
    {
        return $this->serviceTicket;
    }
    /**
     * Logon authentication successful, the server generates a service ticket
     *
     * @param string $serviceTicket
     *
     * @return self
     */
    public function setServiceTicket(string $serviceTicket): self
    {
        $this->initialized['serviceTicket'] = true;
        $this->serviceTicket = $serviceTicket;
        return $this;
    }
}