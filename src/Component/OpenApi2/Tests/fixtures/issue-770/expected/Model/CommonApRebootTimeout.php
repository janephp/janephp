<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonApRebootTimeout
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
     * Gateway loss timeout in second
     *
     * @var int
     */
    protected $gatewayLossTimeoutInSec = 1800;
    /**
     * Server loss timeout in second
     *
     * @var int
     */
    protected $serverLossTimeoutInSec = 7200;
    /**
     * Gateway loss timeout in second
     *
     * @return int
     */
    public function getGatewayLossTimeoutInSec(): int
    {
        return $this->gatewayLossTimeoutInSec;
    }
    /**
     * Gateway loss timeout in second
     *
     * @param int $gatewayLossTimeoutInSec
     *
     * @return self
     */
    public function setGatewayLossTimeoutInSec(int $gatewayLossTimeoutInSec): self
    {
        $this->initialized['gatewayLossTimeoutInSec'] = true;
        $this->gatewayLossTimeoutInSec = $gatewayLossTimeoutInSec;
        return $this;
    }
    /**
     * Server loss timeout in second
     *
     * @return int
     */
    public function getServerLossTimeoutInSec(): int
    {
        return $this->serverLossTimeoutInSec;
    }
    /**
     * Server loss timeout in second
     *
     * @param int $serverLossTimeoutInSec
     *
     * @return self
     */
    public function setServerLossTimeoutInSec(int $serverLossTimeoutInSec): self
    {
        $this->initialized['serverLossTimeoutInSec'] = true;
        $this->serverLossTimeoutInSec = $serverLossTimeoutInSec;
        return $this;
    }
}