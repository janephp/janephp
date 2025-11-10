<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesIpAddressRange
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
    protected $fromIp;
    /**
     * @var string
     */
    protected $toIp;
    /**
     * @return string
     */
    public function getFromIp(): string
    {
        return $this->fromIp;
    }
    /**
     * @param string $fromIp
     *
     * @return self
     */
    public function setFromIp(string $fromIp): self
    {
        $this->initialized['fromIp'] = true;
        $this->fromIp = $fromIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getToIp(): string
    {
        return $this->toIp;
    }
    /**
     * @param string $toIp
     *
     * @return self
     */
    public function setToIp(string $toIp): self
    {
        $this->initialized['toIp'] = true;
        $this->toIp = $toIp;
        return $this;
    }
}